<?php

namespace App\Models\Traits\Attributes;

use App\Models\Media;

/**
 *
 */
trait EventAttribute
{
    /**
     *
     */
    public function getImageAttribute()
    {
        $media = Media::where('media_id', $this->id)->where('media_type', Media::$media_type['EVENT'])->where('is_sub', false)->first();

        return $media->path ?? null;
    }
}
