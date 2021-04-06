<?php

namespace App\Rules;

use App\Models\Shipping;
use Illuminate\Contracts\Validation\Rule;

class PayAtDoorIsValid implements Rule
{
    protected $shipping;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($shipping_id)
    {
        $this->shipping = Shipping::find($shipping_id);
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ($value) {
            return $this->shipping->at_the_door;
        }
        
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Kargo seçeneklerinde kapıda ödeme mevcut değil';
    }
}
