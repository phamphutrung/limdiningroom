<?php

namespace App\Services;

use App\Models\Media;
use App\Repositories\GalleryRepository;
use App\Repositories\MediaRepository;

class GalleryService extends BaseService
{
    /**
     *
     */
    protected $galleryRepository;

    /**
     *
     */
    protected $mediaRepository;

    /**
     *
     */
    public function __construct(GalleryRepository $galleryRepository, MediaRepository $mediaRepository)
    {
        $this->galleryRepository = $galleryRepository;
        $this->mediaRepository = $mediaRepository;
    }

    /**
     *
     */
    public function list()
    {
        return $this->galleryRepository->list();
    }

    public function create($request)
    {
        $attributes = $request->except('image');

        $gallery = $this->galleryRepository->create($attributes);

        if ($request->hasFile('image')) {
            $this->uploadImage($request->image, $gallery->id, Media::$media_type['GALLERY'], 'galleries');
        }

        return $gallery;
    }
}
