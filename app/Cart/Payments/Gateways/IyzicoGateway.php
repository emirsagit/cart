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
use Iyzipay\Model\ThreedsInitialize;
use Iyzipay\Request\CreatePaymentRequest;
use App\Exceptions\PaymentFailedException;
use Iyzipay\Request\CreateThreedsPaymentRequest;

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

    public function withSecureOptions($request)
    {
        $this->purchaseRequest = new CreateThreedsPaymentRequest();
        $this->purchaseRequest->setLocale(\Iyzipay\Model\Locale::TR);
        $this->purchaseRequest->setConversationId($request->conversationId);
        $this->purchaseRequest->setPaymentId($request->paymentId);
        $this->purchaseRequest->setConversationData($request->conversationData);
        return $this;
    }

    public function checkStatus()
    {
        if ($this->result->getStatus() == 'failure') {
            return false;
        }
        return true;
    }

    public function checkSecurePaymentStatus()
    {
        if ($this->result->getStatus() == 'failure') {
            return false;
        }
        return true;
    }

    public function getHtmlContent()
    {
        return $this->result->getHtmlContent();
    }

    public function getErrorMessage()
    {
        return $this->result->getErrorMessage();
    }

    protected function setConfiguration()
    {
        $this->purchaseRequest->setConversationId($this->order->id);
        $this->purchaseRequest->setPrice($this->cart->subtotal()->decimalFormatted());
        $this->purchaseRequest->setPaidPrice($this->cart->withShipping($this->request)->total()->decimalFormatted());
        $this->purchaseRequest->setCurrency(Currency::TL);
        $this->purchaseRequest->setInstallment(1);
        if ($this->request->has3ds) {
            $this->purchaseRequest->setCallbackUrl("http://entegrasyon.test/api/payment");
        }
    }

    protected function setPaymentCard()
    {
        $paymentCard = new PaymentCard();
        $paymentCard->setCardHolderName("John Doe");
        $paymentCard->setCardNumber("5528790000000008");
        $paymentCard->setExpireMonth("12");
        $paymentCard->setExpireYear("2030");
        $paymentCard->setCvc("123");
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
        $buyer->setIdentityNumber("74300864791");
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
