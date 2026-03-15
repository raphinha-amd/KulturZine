<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Zine extends Model
{
    /** @use HasFactory<\Database\Factories\ZineFactory> */
    use HasFactory;

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getFeaturedImageUrlAttribute(): ?string
    {
        if (! $this->featured_image) {
            return null;
        }

        if (Str::startsWith($this->featured_image, 'http')) {
            return $this->featured_image;
        }

        return asset('storage/' . $this->featured_image);
    }

    public function category()
    {
        return $this->belongsTo(\App\Models\ZineCategory::class, 'zine_category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(\App\Models\ZineTag::class, 'zine_zine_tag', 'zine_id', 'zine_tag_id')->withTimestamps();
    }
}
