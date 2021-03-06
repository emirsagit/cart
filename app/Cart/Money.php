<?php

namespace App\Cart;

use NumberFormatter;
use Money\Money as BaseMoney;
use Money\Currencies\ISOCurrencies;
use Money\Formatter\IntlMoneyFormatter;
use Money\Formatter\DecimalMoneyFormatter;

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

    public function decimalFormatted()
    {
        $currencies = new ISOCurrencies();
        $formatter = new DecimalMoneyFormatter($currencies);
        return $formatter->format($this->money);
    }

    public function add(Money $money)
    {
        $this->money = $this->money->add($money->instance());

        return $this;
    }

    public function subtract(Money $money)
    {
        $this->money = $this->money->subtract($money->instance());

        return $this;
    }

    public function equals(Money $money)
    {
        return $this->money->equals($money->instance());
    }

    protected function instance()
    {
        return $this->money;
    }
}
