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
        Schema::create('credentials', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('account_id')->constrained()->onDelete('cascade');
            $table->string('site')->nullable(); // e.g., "example.com"
            $table->string('email')->nullable(); // email associated with the account
            $table->string('phone')->nullable(); // phone number associated with the account
            $table->string('username')->nullable();
            $table->string('password'); // plaintext or hashed (simulate leak)
            $table->boolean('leaked')->default(false);
            $table->json('metadata')->nullable(); // Additional data related to the credential
            $table->string('source_info')->nullable(); // e.g., "data_breach", "user_input"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credentials');
    }
};
