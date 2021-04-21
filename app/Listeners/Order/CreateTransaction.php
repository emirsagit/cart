<?php

namespace App\Listeners\Order;

use App\Cart\Cart;
use App\Events\Order\OrderPaid;


class CreateTransaction
{
    /**
     * Handle the event.
     *
     * @param  OrderCreated  $event
     * @return void
     */
    public function handle(OrderPaid $event)
    {
        $transaction = $event->order->transactions()->create([
            'payment_id' => $event->paymentResult->getPaymentId(),
            'fraud_status' => $event->paymentResult->getFraudStatus(),
            'price' => $event->paymentResult->getPrice(),
            'paid_price' => $event->paymentResult->getPaidPrice(),
            'installment' => $event->paymentResult->getInstallment(),
        ]);

        foreach ($event->paymentResult->getPaymentItems() as $item) {
            $transaction->items()->create([
                'payment_transaction_id' => $item->getPaymentTransactionId(),
                'item_id' => $item->getItemId(),
                'price' => $item->getPrice(),
                'paid_price' => $item->getPaidPrice(),
                'converted_payout_paid_price' => $item->getConvertedPayout()->getPaidPrice()
            ]);
        }
    }
}
