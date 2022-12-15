<?php

namespace App\Http\Controllers;

use App\Http\Resources\FoodsResource;
use App\Services\FoodService;
use Illuminate\Http\Request;

class FoodController extends BaseController
{
    protected $foodService;

    public function __construct(FoodService $foodService)
    {
        $this->foodService = $foodService;
    }

    /**
     *
     */
    public function list()
    {
        $foods = new FoodsResource($this->foodService->list());

        return $this->jsonRender(['payload' => $foods]);
    }
}
