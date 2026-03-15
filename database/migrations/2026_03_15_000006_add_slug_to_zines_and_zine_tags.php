<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('zines', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('title');
        });

        Schema::table('zine_tags', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('zine_tag');
        });

        DB::table('zines')->orderBy('id')->get(['id', 'title'])->each(function ($zine): void {
            $baseSlug = Str::slug($zine->title ?: 'zine');
            $slug = $baseSlug !== '' ? $baseSlug . '-' . $zine->id : 'zine-' . $zine->id;

            DB::table('zines')->where('id', $zine->id)->update(['slug' => $slug]);
        });

        DB::table('zine_tags')->orderBy('id')->get(['id', 'zine_tag'])->each(function ($tag): void {
            $baseSlug = Str::slug($tag->zine_tag ?: 'tag');
            $slug = $baseSlug !== '' ? $baseSlug . '-' . $tag->id : 'tag-' . $tag->id;

            DB::table('zine_tags')->where('id', $tag->id)->update(['slug' => $slug]);
        });

        Schema::table('zines', function (Blueprint $table) {
            $table->unique('slug');
        });

        Schema::table('zine_tags', function (Blueprint $table) {
            $table->unique('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('zines', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            $table->dropColumn('slug');
        });

        Schema::table('zine_tags', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            $table->dropColumn('slug');
        });
    }
};
