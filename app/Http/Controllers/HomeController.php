<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Post;
use App\Models\Zine;
use App\Models\ZineCategory;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $featuredZine = Zine::query()
            ->with(['category', 'tags'])
            ->latest()
            ->first();

        $zineCategories = ZineCategory::query()
            ->withCount('zines')
            ->orderByDesc('zines_count')
            ->orderBy('zine_category')
            ->limit(4)
            ->get();

        $latestPosts = Post::query()
            ->with('category')
            ->latest()
            ->limit(2)
            ->get();

        $upcomingEvents = Event::query()
            ->with('category')
            ->where('is_active', true)
            ->whereNotNull('start_date')
            ->orderBy('start_date')
            ->limit(2)
            ->get();

        return view('page.home', [
            'featuredZine' => $featuredZine,
            'zineCategories' => $zineCategories,
            'latestPosts' => $latestPosts,
            'upcomingEvents' => $upcomingEvents,
        ]);
    }
}
