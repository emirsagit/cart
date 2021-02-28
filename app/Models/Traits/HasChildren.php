<?php 

namespace App\Models\Traits; 

trait HasChildren
{
    public function scopeParents($query)
    {
        $query->whereNull('parent_id');
    } 
}
