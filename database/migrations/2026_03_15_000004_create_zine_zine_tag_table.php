<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('zine_zine_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('zine_id')->constrained()->cascadeOnDelete();
            $table->foreignId('zine_tag_id')->constrained('zine_tags')->cascadeOnDelete();
            $table->unique(['zine_id', 'zine_tag_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zine_zine_tag');
    }
};
