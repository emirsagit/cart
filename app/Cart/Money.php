<?php

namespace App\Cart;

use NumberFormatter;
use Money\Money as BaseMoney;
use Money\Currencies\ISOCurrencies;
use Money\Formatter\IntlMoneyFormatter;

class Money
{
    protected $money;

    public function __construct($money)
    {
        $this->money = BaseMoney::TRY($money);
    }

    public function amount()
    {
        return $this->money->getAmount();
    } 

    public function formatted()
    {
        $formatter = new IntlMoneyFormatter(new NumberFormatter('tr_TR', NumberFormatter::CURRENCY), new ISOCurrencies());
        return $formatter->format($this->money);
    } 
}
