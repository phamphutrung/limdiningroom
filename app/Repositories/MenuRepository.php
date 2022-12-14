<?php

namespace App\Repositories;

use App\Models\Menu;

class MenuRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(Menu::class);
    }

    /**
     *
     */
    public function createMenu()
    {
        parent::create([]);
    }

    /**
     *
     */
    public function list($params = null)
    {
        return $this->model::paginate(100);
    }
}
