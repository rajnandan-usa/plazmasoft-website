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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Project title
            $table->string('banner')->nullable(); // Banner image URL or path
            $table->string('logo')->nullable(); // logo image URL or path
            $table->string('category')->nullable(); // Project category
            $table->text('technologies')->nullable(); // Technologies used in the project - seperated by commas
            $table->string('url')->nullable(); // Project URL
            $table->string('shortDescription')->nullable(); // Short description of the project
            $table->text('description'); // Full description of the project
            $table->string('country')->nullable(); // Country where the project was executed
            $table->string('budget')->nullable(); // Budget of the project range 1000-5000 USD
            $table->string('type')->nullable(); // Project type
            $table->enum('status', ['draft', 'published', 'in_progress'])->default('draft'); // Status of the project
            $table->date('startDate')->nullable(); // Start date of the project
            $table->date('endDate')->nullable(); // End date of the project
            $table->string('videoUrl')->nullable(); // Video URL related to the project
            $table->string('clientName')->nullable(); // Client name
            $table->string('clientAvatar')->nullable(); // Client avatar image
            $table->text('clientFeedback')->nullable(); // Client feedback
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
