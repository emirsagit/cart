<?php

namespace App\Cart\Payments\Gateways;

use App\Cart\Cart;
use Iyzipay\Options;
use App\Models\Order;
use Iyzipay\Model\Buyer;
use Iyzipay\Model\Address;
use Iyzipay\Model\Payment;
use Iyzipay\Model\Currency;
use Illuminate\Http\Request;
use Iyzipay\Model\BasketItem;
use App\Cart\Payments\Gateway;
use Iyzipay\Model\PaymentCard;
use Iyzipay\Model\BasketItemType;
use Iyzipay\Model\ThreedsPayment;
use Iyzipay\Model\InstallmentInfo;
use Illuminate\Support\Facades\Log;
use Iyzipay\Model\ThreedsInitialize;
use Iyzipay\Request\CreatePaymentRequest;
use Iyzipay\Request\CreateThreedsPaymentRequest;
use Iyzipay\Request\RetrieveInstallmentInfoRequest;

class IyzicoGateway implements Gateway
{
    protected $options;
    protected $request;
    protected $purchaseRequest;
    protected $cart;
    protected $user;
    protected $products;
    protected $order;
    protected $result;
    protected $securePaymentRequest;

    public function __construct()
    {
        $this->options = new Options();
        $this->options->setApiKey("sandbox-SrgRHPZdeb8Zf5LRPVQgHnOIhkjQCCNv");
        $this->options->setSecretKey("sandbox-KU68EtJKH5fxtVrTdBd9Kpp46KOlQmiC");
        $this->options->setBaseUrl("https://sandbox-api.iyzipay.com");
    }

    public function charge()
    {
        $this->result = Payment::create($this->purchaseRequest, $this->options);

        return $this;
    }

    public function logPaymentFailed(Order $order, $request = null)
    {
        if ($this->result) {
            Log::channel('payment')->info('Ödeme Hatası', [
                'order_id' => $order->id,
                'error_message' => $this->getErrorMessage(),
                'error_code' => $this->getErrorCode()
            ]);

            return $this->getErrorMessage();
        }

        Log::channel('payment')->info('3D doğrulama hatası', [
            'order_id' => $order->id,
            'md_status' => $request->mdStatus,
        ]);

        return ('3D doğrulama hatası. Lütfen tekrar deneyiniz.');
    }

    public function createTransactions()
    {
        $transaction = $this->order->transactions()->create([
            'payment_id' => $this->result->getPaymentId(),
            'fraud_status' => $this->result->getFraudStatus(),
            'price' => $this->result->getPrice(),
            'paid_price' => $this->result->getPaidPrice(),
            'installment' => $this->result->getInstallment(),
        ]);

        foreach ($this->result->getPaymentItems() as $item) {
            $transaction->items()->create([
                'payment_transaction_id' => $item->getPaymentTransactionId(),
                'item_id' => $item->getItemId(),
                'price' => $item->getPrice(),
                'paid_price' => $item->getPaidPrice(),
                'converted_payout_paid_price' => $item->getConvertedPayout()->getPaidPrice()
            ]);
        }
    }

    public function initializeSecureCharge()
    {
        $this->result = ThreedsInitialize::create($this->purchaseRequest, $this->options);
        return $this;
    }

    public function finishSecureCharge()
    {
        $this->result = ThreedsPayment::create($this->purchaseRequest, $this->options);
        return $this;
    }

    public function withOptions(Request $request, Cart $cart, Order $order)
    {
        $this->cart = $cart;
        $this->user = $request->user();
        $this->products = $this->cart->products($request->user())->load(['product', 'product.categories']);
        $this->request = $request;
        $this->order = $order;
        $this->purchaseRequest = new CreatePaymentRequest();
        $this->setConfiguration();
        $this->setBuyer();
        $this->setPaymentCard();
        $this->setShippingAddress();
        $this->setBillingAddress();
        $this->setBasket();
        return $this;
    }

    public function getInstallmentOptions($binNumber, $price)
    {
        $request = new RetrieveInstallmentInfoRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setBinNumber($binNumber);
        $request->setPrice($price);

        return InstallmentInfo::retrieve($request, $this->options);
    }

    public function withSecureOptions($request, Order $order)
    {
        $this->purchaseRequest = new CreateThreedsPaymentRequest();
        $this->purchaseRequest->setLocale(\Iyzipay\Model\Locale::TR);
        $this->purchaseRequest->setConversationId($request->conversationId);
        $this->purchaseRequest->setPaymentId($request->paymentId);
        $this->purchaseRequest->setConversationData($request->conversationData);
        $this->order = $order;
        return $this;
    }

    public function checkPayment()
    {
        if ($this->result->getStatus() != 'success') {
            return false;
        }

        return true;
    }

    public function checkSecurePaymentValidation(Request $request)
    {
        if ($request->status != 'success') {
            return false;
        }

        return true;
    }


    public function get3dsHtmlContent()
    {
        return $this->result->getHtmlContent();
    }

    public function updateOrderStatus()
    {
        if ($status = $this->result->getFraudStatus() == '1') {
            $this->order->updateStatusProcessing();
        } else if ($status == '-1') {
            $this->order->updateStatusPaymentFailed();
        }
    }

    protected function getErrorMessage()
    {
        return $this->result->getErrorMessage();
    }

    protected function getErrorCode()
    {
        return $this->result->getErrorCode();
    }

    protected function setConfiguration()
    {
        $this->purchaseRequest->setConversationId($this->order->id);
        $this->purchaseRequest->setPrice($this->cart->subtotal()->decimalFormatted());
        $this->purchaseRequest->setPaidPrice($this->cart->withShipping($this->request)->withInstallment($this->request)->total()->decimalFormatted());
        $this->purchaseRequest->setCurrency(Currency::TL);
        $this->purchaseRequest->setInstallment(1);
        if ($this->request->has3ds) {
            $this->purchaseRequest->setCallbackUrl("http://entegrasyon.test/api/payment");
        }
    }

    protected function setPaymentCard()
    {
        $paymentCard = new PaymentCard();
        $paymentCard->setCardHolderName($this->request->card_holder);
        $paymentCard->setCardNumber($this->request->card_number);
        $paymentCard->setExpireMonth($this->request->expiration_month);
        $paymentCard->setExpireYear($this->request->expiration_year);
        $paymentCard->setCvc($this->request->cvc);
        $paymentCard->setRegisterCard(0);
        $this->purchaseRequest->setPaymentCard($paymentCard);
    }

    protected function setBuyer()
    {
        $buyer = new Buyer();
        $buyer->setId($this->user->id);
        $buyer->setName($this->user->name);
        $buyer->setSurname($this->user->name);
        $buyer->setEmail($this->user->email);
        $buyer->setIdentityNumber('11111111111');
        $buyer->setRegistrationAddress($this->request->selected_address['address']);
        $buyer->setIp($this->request->ip());
        $buyer->setCity($this->request->selected_address['city']['name']);
        $buyer->setCountry("Turkey");
        $this->purchaseRequest->setBuyer($buyer);
    }

    protected function setShippingAddress()
    {
        $shippingAddress = new Address();
        $shippingAddress->setContactName($this->request->selected_address['name']);
        $shippingAddress->setCity($this->request->selected_address['city']['name']);
        $shippingAddress->setCountry("Turkey");
        $shippingAddress->setAddress($this->request->selected_address['address']);
        $this->purchaseRequest->setShippingAddress($shippingAddress);
    }

    protected function setBillingAddress()
    {
        $billingAddress = new Address();
        $billingAddress->setContactName($this->request->billing_address['name']);
        $billingAddress->setCity($this->request->billing_address['city']['name']);
        $billingAddress->setCountry("Turkey");
        $billingAddress->setAddress($this->request->billing_address['address']);
        $this->purchaseRequest->setBillingAddress($billingAddress);
    }

    protected function setBasket()
    {
        $basketItems = array();
        foreach ($this->products as $product) {
            for ($i = 0; $i < $product->pivot->quantity; $i++) {
                $basketItem = new BasketItem();
                $basketItem->setId($product->id);
                $basketItem->setName($product->product->name);
                $basketItem->setCategory1($product->product->categories[0]->name);
                $basketItem->setItemType(BasketItemType::PHYSICAL);
                $basketItem->setPrice($product->price->decimalFormatted());
                array_push($basketItems, $basketItem);
            }
        }

        $this->purchaseRequest->setBasketItems($basketItems);
    }
}
