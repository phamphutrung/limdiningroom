<?php

namespace App\Repositories;

use App\Models\Food;

class FoodRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(Food::class);
    }

    /**
     *
     */
    public function createFood()
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
