<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostCategory extends Model
{
    /** @use HasFactory<\Database\Factories\PostCategoryFactory> */
    use HasFactory, SoftDeletes;

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
