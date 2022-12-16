<?php

namespace App\Repositories;

use App\Models\Media;

class MediaRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(Media::class);
    }
}
