<?php

namespace Database\Seeders;

use App\Models\Zine;
use App\Models\ZineCategory;
use App\Models\ZineTag;
use Illuminate\Database\Seeder;

class ZineSeeder extends Seeder
{
    /**
     * Seed the application's zine data.
     */
    public function run(): void
    {
        ZineCategory::factory(8)->create();
        ZineTag::factory(15)->create();

        Zine::factory(20)
            ->create()
            ->each(function (Zine $zine): void {
                $zine->tags()->attach(
                    ZineTag::query()->inRandomOrder()->take(random_int(2, 5))->pluck('id')
                );
            });
    }
}
