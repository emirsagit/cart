<?php

namespace App\Models\Traits; 

trait IsOrderable
{
    public function scopeOrder($query, $column = 'order', $direction = 'ASC')
    {
        $query->orderBy($column, $direction);
    } 
}
