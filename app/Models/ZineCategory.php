<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZineCategory extends Model
{
    /** @use HasFactory<\Database\Factories\ZineCategoryFactory> */
    use HasFactory;

    public function zines()
    {
        return $this->hasMany(\App\Models\Zine::class, 'zine_category_id');
    }
}
