<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
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
            'name' => data_get($this, 'name'),
            'price' => data_get($this, 'price'),
            'sub_desc' => data_get($this, 'sub_desc'),
            'desc' => data_get($this, 'desc'),
            'content' => data_get($this, 'content'),
            'status' => data_get($this, 'status'),
            'type' => data_get($this, 'type'),
            'index' => data_get($this, 'index'),
        ];

        return $result;
    }
}
