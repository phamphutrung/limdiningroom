<?php

namespace App\Services;

use App\Models\Media;
use App\Repositories\FoodRepository;
use App\Repositories\MediaRepository;
use Illuminate\Support\Facades\Storage;

class FoodService
{
    /**
     *
     */
    protected $foodRepository;

    /**
     *
     */
    protected $mediaRepository;

    /**
     * @param FoodRepository
     */
    public function __construct(FoodRepository $foodRepository, MediaRepository $mediaRepository)
    {
        $this->foodRepository = $foodRepository;
        $this->mediaRepository = $mediaRepository;
    }

    /**
     *
     */
    public function list()
    {
        return $this->foodRepository->list();
    }

    /**
     *
     */
    public function show($request)
    {
        $id = $request->id;

        return $this->foodRepository->show($id);
    }

    /**
     *
     */
    public function create($request)
    {
        dd($request->all());
        $attributes = $request->except(['image', 'multipleImage']);
        $attributes['status'] = $attributes['status'] == 'true' ? true : false;

        $food = $this->foodRepository->create($attributes);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $this->uploadImage($image, $food->id, false);
        }

        if ($request->multipleImage) {
            foreach ($request->multipleImage as $image) {
                $this->uploadImage($image, $food->id, true);
            }
        }

        return $food;
    }

    /**
     *
     */
    public function update($request)
    {
        $attributes = $request->except(['image', 'multipleImage', 'multipleImageRemove', 'foodId']);
        $attributes['price'] = str_replace(',', '', $attributes['price']);
        $attributes['status'] = $attributes['status'] == 'true' ? true : false;

        $food = $this->foodRepository->show($request->foodId);
        $food->update($attributes);

        if ($request->multipleImage) {
            if ($request->multipleImage) {
                foreach ($request->multipleImage as $image) {
                    $this->uploadImage($image, $food->id);
                }
            }
        }

        if ($request->image) {
            $mediaOld = $this->mediaRepository->getImage($food->id, Media::$media_type['FOOD']);
            if ($mediaOld) {
                if (Storage::exists('public/' . $mediaOld->path)) {
                    Storage::delete('public/' . $mediaOld->path);
                }
                $mediaOld->delete();
            }
            $this->uploadImage($request->image, $food->id, false);
        }

        if ($request->multipleImageRemove) {
            foreach ($request->multipleImageRemove as $image) {
                $mediaOld = $this->mediaRepository->show($image);
                if ($mediaOld) {
                    if (Storage::exists('public/' . $mediaOld->path)) {
                        Storage::delete('public/' . $mediaOld->path);
                    }
                    $mediaOld->delete();
                }
            }
        }

        return $food;
    }

    public function uploadImage($image, $media_id, $is_sub = true, $media_type = 'food', $folder = 'foods')
    {
        $fileName = time() . '_' . $image->getClientOriginalName();
        $FilePath = $image->storeAs($folder, $fileName, 'public');

        $attributesMedia = [
            'path' => $FilePath,
            'is_sub' => $is_sub,
            'size' => $image->getSize(),
            'mime_type' => $image->getMimeType(),
            'media_type' => $media_type,
            'media_id' => $media_id
        ];

        $this->mediaRepository->create($attributesMedia);
    }
}
