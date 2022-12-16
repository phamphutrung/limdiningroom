<?php

namespace App\Models\Traits\Attributes;

use App\Models\Media;

/**
 *
 */
trait FoodAttribute
{
    /**
     *
     */
    public function getImageAttribute()
    {
        $media = Media::where('media_id', $this->id)->where('media_type', Media::$media_type['FOOD'])->first();

        return $media->path ?? null;
    }

    /**
     *
     */
    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = number_format($value);
    }
}
