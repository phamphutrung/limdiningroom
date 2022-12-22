<?php

namespace App\Http\Controllers;

use App\Http\Resources\GalleriesResource;
use App\Http\Resources\GalleryResource;
use App\Services\GalleryService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

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
    public function show(Request $request)
    {
        $gallery = new GalleryResource($this->galleryService->show($request));

        return $this->jsonRender(['payload' => $gallery]);
    }

    /**
     *
     */
    public function create(Request $request)
    {
        $this->galleryService->create($request);
    }

    /**
     *
     */
    public function update(Request $request)
    {
        return $this->galleryService->update($request)
            ? $this->jsonRender()
            : throw new BadRequestException();
    }

    /**
     *
     */
    public function delete(Request $request)
    {
        return $this->galleryService->delete($request)
            ? $this->jsonRender()
            : throw new BadRequestException();
    }
}
