<?php

namespace App\Services;

use App\Repositories\FoodRepository;

class FoodService
{
    /**
     *
     */
    protected $foodRepository;

    /**
     * @param FoodRepository
     */
    public function __construct(FoodRepository $foodRepository)
    {
        $this->foodRepository = $foodRepository;
    }

    /**
     *
     */
    public function create($request)
    {
        $attributes = $request->all();
        if ($request->hasFile('image')) {
            // $name
        }
        dd('not ok');

        return $this->foodRepository->create($attributes);
    }

    /**
     *
     */
    public function list()
    {
        return $this->foodRepository->list();
    }
}
