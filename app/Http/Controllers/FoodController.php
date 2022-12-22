<?php

namespace App\Http\Controllers;

use App\Exceptions\BadRequestException;
use App\Http\Resources\FoodResource;
use App\Http\Resources\FoodsResource;
use App\Models\Food;
use App\Services\FoodService;
use Illuminate\Http\Request;

class FoodController extends BaseController
{
    protected $foodService;

    /**
     *
     */
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

    /**
     *
     */
    public function show(Request $request)
    {
        $food = new FoodResource($this->foodService->show($request));

        return $this->jsonRender(['payload' => $food]);
    }

    /**
     *
     */
    public function create(Request $request)
    {
        return $this->foodService->create($request)
            ? $this->jsonRender()
            : throw new BadRequestException();
    }

    /**
     *
     */
    public function update(Request $request)
    {
        return $this->foodService->update($request);
    }

    /**
     *
     */
    public function delete(Request $request)
    {
        return $this->foodService->delete($request)
            ? $this->jsonRender()
            : throw new BadRequestException();
    }
}
