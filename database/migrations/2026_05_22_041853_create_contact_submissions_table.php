<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->enum('project_type', ['web_app', 'mobile_app', 'ai_integration', 'mvp', 'maintenance', 'ui_ux', 'other'])->default('other');
            $table->enum('budget_range', ['under_5k', '5k_15k', '15k_30k', '30k_plus', 'not_sure'])->default('not_sure');
            $table->text('message');
            $table->string('attachment_path')->nullable();
            $table->string('source')->nullable();
            $table->string('source_url')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->enum('status', ['new', 'contacted', 'qualified', 'won', 'lost', 'spam'])->default('new');
            $table->text('admin_notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_submissions');
    }
};
