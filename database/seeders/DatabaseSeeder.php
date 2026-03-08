<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        PostCategory::factory(10)->create();
        Tag::factory()->count(10)->create();

        Post::factory()
            ->count(20)
            ->create()
            ->each(function ($post) {
                $post->tags()->attach(
                    Tag::inRandomOrder()->take(rand(2, 5))->pluck('id')
                );
            });
    }
}
