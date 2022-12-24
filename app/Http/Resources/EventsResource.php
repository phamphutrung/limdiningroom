<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class EventsResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    /**
     * @var array
     */
    private array $pagination;


    /**
     * ShopsResource constructor.
     *
     * @param mixed $resource
     */
    public function __construct($resource)
    {
        $this->pagination = [
            'total' => $resource->total(),
            'count' => $resource->count(),
            'per_page' => $resource->perPage(),
            'current_page' => $resource->currentPage(),
            'total_pages' => $resource->lastPage(),
        ];
        $resource = $resource->getCollection();

        parent::__construct($resource);
    }
    public function toArray($request): array
    {
        return [
            'data' => EventResource::collection($this->collection->toArray()),
            'meta' => [
                'paginate' => $this->pagination,
            ],
        ];
    }
}
