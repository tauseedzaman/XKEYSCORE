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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('account_id')->constrained()->onDelete('cascade');
            $table->string('platform'); // e.g., "WhatsApp", "Gmail"
            $table->string('recipient')->nullable();
            $table->text('content');
            $table->timestamp('sent_at');
            $table->string('status')->default('pending'); // e.g., 'sent', 'delivered', 'read'
            $table->string('ip_address')->nullable(); // IP address of the sender
            $table->string('device')->nullable(); // e.g., 'mobile', 'desktop'
            $table->string('location')->nullable(); // e.g., 'New York, USA'
            $table->string('browser')->nullable(); // e.g., 'Chrome', 'Firefox'
            $table->string('os')->nullable(); // e.g., 'Windows', 'macOS'
            $table->string('source_info')->nullable(); // e.g., "data_breach", "user_input"
            $table->json('metadata')->nullable(); // Additional data related to the message
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
