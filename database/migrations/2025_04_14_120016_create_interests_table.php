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
        Schema::create('interests', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('account_id')->constrained()->onDelete('cascade');
            $table->string('interest'); // e.g., "Politics", "Health", "Gaming"
            $table->string('confidence')->nullable(); // low, medium, high
            $table->string('category')->nullable(); // e.g., "sports", "technology"
            $table->string('source')->nullable(); // e.g., "search", "click", "visit"
            $table->string('source_info')->nullable(); // e.g., "data_breach", "user_input"
            $table->json('metadata')->nullable(); // Additional data related to the interest
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interests');
    }
};
