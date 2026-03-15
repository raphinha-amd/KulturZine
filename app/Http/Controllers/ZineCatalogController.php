<?php

namespace App\Http\Controllers;

use App\Models\Zine;
use App\Models\ZineCategory;
use App\Models\ZineTag;
use Illuminate\Http\Request;

class ZineCatalogController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->input('sort', 'newest');
        $allowedSort = ['newest', 'oldest'];

        if (! in_array($sort, $allowedSort, true)) {
            $sort = 'popular';
        }

        $selectedCategory = $request->input('category');
        $selectedTagSlug = $request->input('tag');
        $showAllCategories = $request->boolean('show_all_categories');
        $showAllTags = $request->boolean('show_all_tags');

        $categoriesQuery = ZineCategory::query()
            ->withCount('zines')
            ->orderBy('zine_category');

        if (! $showAllCategories) {
            $categoriesQuery->limit(5);
        }

        $categories = $categoriesQuery->get();

        $tagsQuery = ZineTag::query()
            ->withCount('zines')
            ->orderByDesc('zines_count')
            ->orderBy('zine_tag');

        if (! $showAllTags) {
            $tagsQuery->limit(5);
        }

        $tags = $tagsQuery->get();

        $selectedTag = $selectedTagSlug
            ? ZineTag::query()->where('slug', $selectedTagSlug)->first()
            : null;

        $zines = Zine::query()
            ->with(['category', 'tags'])
            ->when($selectedCategory, function ($query, $categorySlug) {
                $query->whereHas('category', function ($categoryQuery) use ($categorySlug) {
                    $categoryQuery->where('slug', $categorySlug);
                });
            })
            ->when($selectedTagSlug, function ($query) use ($selectedTagSlug) {
                $query->whereHas('tags', function ($tagQuery) use ($selectedTagSlug) {
                    $tagQuery->where('slug', $selectedTagSlug);
                });
            })
            ->when($sort === 'oldest', function ($query) {
                $query->oldest();
            }, function ($query) use ($sort) {
                if ($sort === 'popular') {
                    $query->orderBy('views_count', 'desc');
                } else {
                    $query->latest();
                }
            })
            ->paginate(6)
            ->withQueryString();

        return view('page.catalog.catalog', [
            'categories' => $categories,
            'tags' => $tags,
            'zines' => $zines,
            'sort' => $sort,
            'selectedCategory' => $selectedCategory,
            'selectedTagSlug' => $selectedTagSlug,
            'selectedTag' => $selectedTag,
            'showAllCategories' => $showAllCategories,
            'showAllTags' => $showAllTags,
        ]);
    }

    public function show(Zine $zine)
    {
        $zine->load(['category', 'tags']);

        return view('page.catalog.detail_catalog', compact('zine'));
    }
}
