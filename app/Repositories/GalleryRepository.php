<?php

namespace App\Repositories;

use App\Models\Gallery;

class GalleryRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(Gallery::class);
    }

    /**
     *
     */
    public function list($params = null)
    {
        return $this->model::paginate(100);
    }
}
