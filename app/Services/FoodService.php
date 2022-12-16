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
    public function create($request)
    {
        $attributes = $request->except('image');
        $attributes['status'] = $attributes['status'] == 'true' ? true : false;

        $food = $this->foodRepository->create($attributes);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $fileName = time() . '_' . $image->getClientOriginalName();
            $FilePath = $image->storeAs('foods', $fileName, 'public');

            $attributesMedia = [
                'path' => $FilePath,
                'size' => $image->getSize(),
                'mime_type' => $image->getMimeType(),
                'media_type' => Media::$media_type['FOOD'],
                'media_id' => $food->id
            ];

            return $this->mediaRepository->create($attributesMedia);
        }

        return $food;
    }

    /**
     *
     */
    public function list()
    {
        return $this->foodRepository->list();
    }
}
