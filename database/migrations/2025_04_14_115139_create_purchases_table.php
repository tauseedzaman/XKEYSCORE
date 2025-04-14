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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('account_id')->constrained()->onDelete('cascade');
            $table->string('item')->nullable();
            $table->string('currency')->nullable();
            $table->string('category')->nullable(); // e.g., "health", "gadgets"
            $table->decimal('price', 10, 2);
            $table->string('payment_method')->nullable(); // "credit_card", "paypal"
            $table->timestamp('purchased_at')->nullable();
            $table->string('ip_address')->nullable(); // IP address of the user
            $table->string('device')->nullable(); // e.g., 'mobile', 'desktop'
            $table->string('source_info')->nullable(); // e.g., "data_breach", "user_input"
            $table->json('metadata')->nullable(); // Additional data related to the purchase
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
