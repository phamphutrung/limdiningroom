<?php

namespace App\Http\Controllers;

use App\Http\Resources\MenusResource;
use App\Models\Menu;
use App\Services\MenuService;
use Illuminate\Http\Request;

class MenuController extends BaseController
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    /**
     *
     */
    public function list()
    {
        $menus = new MenusResource($this->menuService->list());

        return $this->jsonRender(['payload' => $menus]);
    }
}
