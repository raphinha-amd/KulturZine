<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ZineCategory extends Model
{
    /** @use HasFactory<\Database\Factories\ZineCategoryFactory> */
    use HasFactory, SoftDeletes;

    public function zines()
    {
        return $this->hasMany(\App\Models\Zine::class, 'zine_category_id');
    }
}
