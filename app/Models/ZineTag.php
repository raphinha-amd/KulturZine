<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZineTag extends Model
{
    /** @use HasFactory<\Database\Factories\ZineTagFactory> */
    use HasFactory;

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function zines()
    {
        return $this->belongsToMany(\App\Models\Zine::class, 'zine_zine_tag', 'zine_tag_id', 'zine_id')->withTimestamps();
    }
}
