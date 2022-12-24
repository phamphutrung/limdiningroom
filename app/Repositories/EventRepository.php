<?php

namespace App\Repositories;

use App\Models\Event;

class EventRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(Event::class);
    }

    /**
     *
     */
    public function list($params = null)
    {
        return $this->model::latest()->paginate(50);
    }
}
