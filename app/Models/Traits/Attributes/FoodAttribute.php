<?php

namespace App\Models\Traits\Attributes;

/**
 *
 */
trait FoodAttribute
{
    /**
     *
     */
    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = number_format($value);
    }
}
