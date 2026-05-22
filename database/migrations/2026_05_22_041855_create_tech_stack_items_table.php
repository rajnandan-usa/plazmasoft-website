<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tech_stack_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('category', ['frontend', 'backend', 'mobile', 'language', 'framework', 'database', 'devops', 'ai'])->default('backend');
            $table->string('logo_path')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tech_stack_items');
    }
};
