<?php

namespace App\Scoping\Scopes;

use App\Scoping\Contracts\Scope;
use Illuminate\Database\Eloquent\Builder;

class ShowOnHomePageScope implements Scope
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('show_on_homepage', true)->orderBy('homepage_order', 'ASC');
    } 
}