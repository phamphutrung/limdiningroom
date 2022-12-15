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
    public function create(Request $request)
    {
        # code...
    }

    /**
     *
     */
    public function list()
    {
        return $this->foodRepository->list();
    }
}

