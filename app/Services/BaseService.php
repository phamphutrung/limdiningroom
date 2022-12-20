<?php

namespace App\Services;

use App\Repositories\MediaRepository;

class BaseService
{
    /**
     *
     */
    public function uploadImage($image, $media_id, $media_type, $folder, $is_sub = false)
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
