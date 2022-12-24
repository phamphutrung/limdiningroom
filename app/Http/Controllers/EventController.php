<?php

namespace App\Http\Controllers;

use App\Exceptions\BadRequestException;
use App\Http\Resources\EventResource;
use App\Http\Resources\EventsResource;
use App\Services\EventService;
use Illuminate\Http\Request;

class EventController extends BaseController
{
    protected $eventService;

    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    /**
     *
     */
    public function list()
    {
        $events = new EventsResource($this->eventService->list());

        return $this->jsonRender(['payload' => $events]);
    }

    /**
     *
     */
    public function show(Request $request)
    {
        $event = new EventResource($this->eventService->show($request));

        return $this->jsonRender(['payload' => $event]);
    }

    /**
     *
     */
    public function create(Request $request)
    {
        return $this->eventService->create($request)
            ? $this->jsonRender()
            : throw new BadRequestException();
    }

    /**
     *
     */
    public function update(Request $request)
    {
        return $this->eventService->update($request)
            ? $this->jsonRender()
            : throw new BadRequestException();
    }

    /**
     *
     */
    public function delete(Request $request)
    {
        return $this->eventService->delete($request)
            ? $this->jsonRender()
            : throw new BadRequestException();
    }
}
