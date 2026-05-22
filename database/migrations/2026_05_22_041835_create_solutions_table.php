<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('tagline', 200)->nullable();
            $table->text('excerpt')->nullable();
            $table->longText('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('hero_image_path')->nullable();
            $table->json('tech_stack')->nullable();
            $table->json('features')->nullable();
            $table->text('process_blurb')->nullable();
            $table->json('faq')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('og_image_path')->nullable();
            $table->boolean('is_published')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solutions');
    }
};
