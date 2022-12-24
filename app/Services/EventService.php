<?php

namespace App\Services;

use App\Models\Media;
use App\Repositories\EventRepository;
use App\Repositories\MediaRepository;
use Illuminate\Support\Facades\Storage;

class EventService extends BaseService
{
    /**
     *
     */
    protected $eventRepository;

    /**
     *
     */
    protected $mediaRepository;

    /**
     *
     */
    public function __construct(EventRepository $eventRepository, MediaRepository $mediaRepository)
    {
        $this->eventRepository = $eventRepository;
        $this->mediaRepository = $mediaRepository;
    }

    /**
     *
     */
    public function list()
    {
        return $this->eventRepository->list();
    }

    /**
     *
     */
    public function show($request)
    {
        $id = $request->id;

        return $this->eventRepository->show($id);
    }

    /**
     *
     */
    public function create($request)
    {
        $attributes = $request->except('image');

        $event = $this->eventRepository->create($attributes);

        if ($request->hasFile('image')) {
            $this->uploadImage($request->image, $event->id, Media::$media_type['EVENT'], 'events');
        }

        return $event;
    }

    /**
     *
     */
    public function update($request)
    {
        $attributes = $request->except(['eventId', 'image']);
        $event = $this->eventRepository->show($request->eventId);
        $event->update($attributes);

        if ($request->hasFile('image')) {
            $mediaOld = $this->mediaRepository->getImage($event->id, Media::$media_type['EVENT']);
            if ($mediaOld) {
                if (Storage::exists('public/' . $mediaOld->path)) {
                    Storage::delete('public/' . $mediaOld->path);
                }
                $mediaOld->delete();
            }
            $this->uploadImage($request->image, $event->id, Media::$media_type['EVENT'], 'galleries');
        }

        return $event;
    }

    /**
     *
     */
    public function delete($request)
    {
        $event = $this->eventRepository->show($request->eventId);

        $media = $this->mediaRepository->getImage($event->id, Media::$media_type['EVENT']);
        if ($media) {
            if (Storage::exists('public/' . $media->path)) {
                Storage::delete('public/' . $media->path);
            }
            $media->delete();
        }

        return $event->delete();
    }
}
