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
    public function getSubImageAttribute()
    {
        $media = Media::where('media_id', $this->id)->where('media_type', Media::$media_type['FOOD'])->where('is_sub', true)->get();

        if ($media->count()) {
            $result = [];
            foreach ($media as $value) {
                $result[] = [
                    'path' => $value->path,
                    'id' => $value->id
                ];
            }
            return $result;
        }

        return null;
    }

    /**
     *
     */
    public function setPriceAttribute($value)
    {
        $float = floatval($value);

        return $this->attributes['price'] = number_format($float);
    }
}
