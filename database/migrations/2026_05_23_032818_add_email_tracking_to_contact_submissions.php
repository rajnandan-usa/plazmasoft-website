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
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->string('open_token', 64)->nullable()->unique()->after('admin_notes');
            $table->timestamp('autoreply_sent_at')->nullable()->after('open_token');
            $table->timestamp('email_opened_at')->nullable()->after('autoreply_sent_at');
            $table->unsignedSmallInteger('email_open_count')->default(0)->after('email_opened_at');
        });
    }

    public function down(): void
    {
        Schema::table('contact_submissions', function (Blueprint $table) {
            $table->dropColumn(['open_token', 'autoreply_sent_at', 'email_opened_at', 'email_open_count']);
        });
    }
};
