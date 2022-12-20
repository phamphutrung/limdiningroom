<?php

namespace App\Http\Controllers;

use App\Http\Resources\GalleriesResource;
use App\Http\Resources\GalleryResource;
use App\Services\GalleryService;
use Illuminate\Http\Request;

class GalleryController extends BaseController
{
    protected $galleryService;

    public function __construct(GalleryService $galleryService)
    {
        $this->galleryService = $galleryService;
    }

    /**
     *
     */
    public function list()
    {
        $galleries = GalleryResource::collection($this->galleryService->list());

        return $this->jsonRender(['payload' => $galleries]);
    }

    /**
     *
     */
    public function create(Request $request)
    {
        $this->galleryService->create($request);
    }
}
