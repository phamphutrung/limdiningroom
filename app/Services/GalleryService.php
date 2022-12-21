<?php

namespace App\Services;

use App\Models\Media;
use App\Repositories\GalleryRepository;
use App\Repositories\MediaRepository;
use Illuminate\Support\Facades\Storage;

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
    public function show($request)
    {
        $id = $request->id;

        return $this->galleryRepository->show($id);
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

    /**
     *
     */
    public function update($request)
    {
        $attributes = $request->except(['galleryId', 'image']);
        $gallery = $this->galleryRepository->show($request->galleryId);
        $gallery->update($attributes);

        if ($request->hasFile('image')) {
            $mediaOld = $this->mediaRepository->getImage($gallery->id, Media::$media_type['GALLERY']);
            if ($mediaOld) {
                if (Storage::exists('public/' . $mediaOld->path)) {
                    Storage::delete('public/' . $mediaOld->path);
                }
                $mediaOld->delete();
            }
        }

        $this->uploadImage($request->image, $gallery->id, Media::$media_type['GALLERY'], 'galleries');

        return $gallery;
    }
}
