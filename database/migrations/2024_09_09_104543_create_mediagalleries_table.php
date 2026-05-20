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
        Schema::create('mediagalleries', function (Blueprint $table) {
            $table->id();
            $table->string("mediaFile");
            $table->string("type");
            $table->json('tags')->nullable(); // name of gallery_tags 
            $table->string("description")->nullable();
            $table->boolean("status")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mediagalleries');
    }
};
