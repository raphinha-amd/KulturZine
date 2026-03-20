<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index(): View
    {
        $galleries = Gallery::query()->latest()->paginate(8);

        return view('page.galleries', [
            'galleries' => $galleries,
        ]);
    }
}
