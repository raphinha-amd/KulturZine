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
            $sort = 'newest';
        }

        $selectedCategory = $request->input('category');
        $selectedTagId = $request->integer('tag');
        $showAllTags = $request->boolean('show_all_tags');

        $categories = ZineCategory::query()
            ->withCount('zines')
            ->orderBy('zine_category')
            ->get();

        $tagsQuery = ZineTag::query()
            ->withCount('zines')
            ->orderByDesc('zines_count')
            ->orderBy('zine_tag');

        if (! $showAllTags) {
            $tagsQuery->limit(8);
        }

        $tags = $tagsQuery->get();

        $selectedTag = null;
        if ($selectedTagId) {
            $selectedTag = ZineTag::query()->find($selectedTagId);
        }

        $zines = Zine::query()
            ->with(['category', 'tags'])
            ->when($selectedCategory, function ($query, $categorySlug) {
                $query->whereHas('category', function ($categoryQuery) use ($categorySlug) {
                    $categoryQuery->where('slug', $categorySlug);
                });
            })
            ->when($selectedTagId, function ($query) use ($selectedTagId) {
                $query->whereHas('tags', function ($tagQuery) use ($selectedTagId) {
                    $tagQuery->whereKey($selectedTagId);
                });
            })
            ->when($sort === 'oldest', function ($query) {
                $query->oldest();
            }, function ($query) {
                $query->latest();
            })
            ->paginate(6)
            ->withQueryString();

        return view('page.catalog.catalog', [
            'categories' => $categories,
            'tags' => $tags,
            'zines' => $zines,
            'sort' => $sort,
            'selectedCategory' => $selectedCategory,
            'selectedTagId' => $selectedTagId,
            'selectedTag' => $selectedTag,
            'showAllTags' => $showAllTags,
        ]);
    }
}
