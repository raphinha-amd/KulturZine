<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $post_categories = PostCategory::all();

        $posts = Post::with('category')
            ->when($request->category, function ($query, $categorySlug) {
                $query->whereHas('category', function ($q) use ($categorySlug) {
                    $q->where('slug', $categorySlug);
                });
            })
            ->latest()
            ->paginate(6)
            ->withQueryString();

        return view('page.article.article', compact('post_categories', 'posts'));
    }

    public function show(Post $post)
    {
        // Memastikan kategori dimuat bersama data post
        $post->load('category');

        // Mengambil 3 post terbaru sesuai category untuk related articles
        $relatedPosts = Post::latest()->limit(3)->get();

        return view('page.article.detail_article', compact('post', 'relatedPosts'));
    }
}
