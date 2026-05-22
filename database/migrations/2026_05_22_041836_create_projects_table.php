<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_category_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('client_name')->nullable();
            $table->string('tagline')->nullable();
            $table->text('summary')->nullable();
            $table->longText('problem')->nullable();
            $table->longText('solution')->nullable();
            $table->longText('outcome')->nullable();
            $table->json('tech_stack')->nullable();
            $table->string('banner_image_path')->nullable();
            $table->string('logo_image_path')->nullable();
            $table->string('live_url')->nullable();
            $table->string('playstore_url')->nullable();
            $table->string('appstore_url')->nullable();
            $table->string('github_url')->nullable();
            $table->string('region')->nullable();
            $table->string('industry')->nullable();
            $table->date('duration_from')->nullable();
            $table->date('duration_to')->nullable();
            $table->integer('team_size')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_published')->default(false);
            $table->integer('sort_order')->default(0);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
