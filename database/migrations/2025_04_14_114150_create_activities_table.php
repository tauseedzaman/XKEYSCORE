<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('account_id')->constrained()->onDelete('cascade');
            $table->string('type'); // 'search', 'click', 'visit', 'purchase', etc.
            $table->text('description')->nullable(); // e.g., "Visited WebMD"
            $table->string('category')->nullable(); // 'medical', 'shopping', 'news'
            $table->timestamp('occurred_at')->nullable();
            $table->string('ip_address')->nullable(); // IP address of the user
            $table->string('device')->nullable(); // e.g., 'mobile', 'desktop'
            $table->string('location')->nullable(); // e.g., 'New York, USA'
            $table->string('browser')->nullable(); // e.g., 'Chrome', 'Firefox'
            $table->string('os')->nullable(); // e.g., 'Windows', 'macOS'
            $table->string('source_info')->nullable(); // e.g., "data_breach", "user_input"
            $table->json('metadata')->nullable(); // Additional data related to the activity
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
