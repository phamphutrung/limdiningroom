<?php

namespace App\Services;

use App\Repositories\MenuRepository;

class MenuService
{
    /**
     *
     */
    protected $menuRepository;

    /**
     * @param MenuRepository
     */
    public function __construct(MenuRepository $menuRepository)
    {
        $this->menuRepository = $menuRepository;
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
        return $this->menuRepository->list();
    }
}

