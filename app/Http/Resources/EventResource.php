<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => data_get($this, 'id'),
            'title' => data_get($this, 'title'),
            'sub_title' => data_get($this, 'sub_title'),
            'time' => data_get($this, 'time'),
            'content' => data_get($this, 'content'),
            'image' => data_get($this, 'image'),
        ];
    }
}
