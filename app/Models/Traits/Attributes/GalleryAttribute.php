<?php

namespace App\Models\Traits\Attributes;

use App\Models\Media;

/**
 *
 */
trait GalleryAttribute
{
    /**
     *
     */
    public function getImageAttribute()
    {
        $media = Media::where('media_id', $this->id)->where('media_type', Media::$media_type['GALLERY'])->where('is_sub', false)->first();

        return $media->path ?? null;
    }
}
