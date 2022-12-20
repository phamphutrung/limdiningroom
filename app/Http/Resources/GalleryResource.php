<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GalleryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $result = [
            'id' => data_get($this, 'id'),
            'title' => data_get($this, 'title'),
            'sub_title' => data_get($this, 'sub_title'),
            'image' => data_get($this, 'image'),
        ];


        return $result;
    }
}
