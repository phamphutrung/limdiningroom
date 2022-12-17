<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
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
            'name' => data_get($this, 'name'),
            'price' => data_get($this, 'price'),
            'sub_desc' => data_get($this, 'sub_desc'),
            'short_desc' => data_get($this, 'short_desc'),
            'content' => data_get($this, 'content'),
            'status' => data_get($this, 'status'),
            'isCombo' => data_get($this, 'isCombo'),
            'more_info' => data_get($this, 'more_info'),
            'image' => data_get($this, 'image'),
            'sub_image' => data_get($this, 'sub_image'),
            'currency' => data_get($this, 'currency')
        ];

        return $result;
    }
}
