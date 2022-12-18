<?php

namespace App\Repositories;

use App\Models\Media;

class MediaRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(Media::class);
    }

    /**
     *
     */
    public function getImage($media_id, $media_type, $is_sub = false)
    {
        return $this->model::query()
            ->where('media_id', $media_id)
            ->where('media_type', $media_type)
            ->where('is_sub', $is_sub)->first();
    }
}
