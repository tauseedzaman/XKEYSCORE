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
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id')->constrained()->onDelete('cascade');
            $table->string('platform'); // e.g., "Facebook", "Instagram"
            $table->string('username')->nullable(); // e.g., "john_doe"
            $table->string('link')->nullable(); // e.g., "john_doe"
            $table->json('metadata')->nullable(); // Additional data related to the social account
            $table->string('source_info')->nullable(); // e.g., "search", "click", "visit"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socials');
    }
};
