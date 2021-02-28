<?php

namespace App\Scoping\Scopes;

use App\Scoping\Contracts\Scope;
use Illuminate\Database\Eloquent\Builder;

class SliderScope implements Scope
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('show_on_slider', true)->orderBy('slider_order', 'ASC');
    } 
}