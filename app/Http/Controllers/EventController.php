<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EventController extends Controller
{
    public function index(Request $request): View
    {
        $selectedCategory = $request->string('category')->toString();

        $categories = EventCategory::query()
            ->withCount(['events' => function ($query) {
                $query->where('is_active', true);
            }])
            ->orderBy('name_category')
            ->get();

        $eventsQuery = Event::query()
            ->with('category')
            ->where('is_active', true)
            ->when($selectedCategory, function ($query, $categorySlug) {
                $query->whereHas('category', function ($categoryQuery) use ($categorySlug) {
                    $categoryQuery->where('slug', $categorySlug);
                });
            })
            ->orderBy('start_date');

        $featuredEvent = (clone $eventsQuery)->first();

        $events = (clone $eventsQuery)
            ->when($featuredEvent, function ($query) use ($featuredEvent) {
                $query->where('id', '!=', $featuredEvent->id);
            })
            ->paginate(6)
            ->withQueryString();

        return view('page.event.events', [
            'categories' => $categories,
            'events' => $events,
            'featuredEvent' => $featuredEvent,
            'selectedCategory' => $selectedCategory,
        ]);
    }

    public function show(Event $event): View
    {
        $event->load('category');

        $relatedEvents = Event::query()
            ->with('category')
            ->where('is_active', true)
            ->whereKeyNot($event->getKey())
            ->when($event->event_category_id, function ($query) use ($event) {
                $query->where('event_category_id', $event->event_category_id);
            })
            ->orderBy('start_date')
            ->limit(3)
            ->get();

        return view('page.event.detail_event', [
            'event' => $event,
            'relatedEvents' => $relatedEvents,
        ]);
    }
}
