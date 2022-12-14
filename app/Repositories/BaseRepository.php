<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected $model;

    public function __construct(string $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $attributes
     */
    public function create(array $attributes)
    {
        return $this->model::query()->create($attributes);
    }


}
