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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('device')->nullable();
            $table->string('location')->nullable(); // city, country
            $table->string('occupation')->nullable();
            $table->string('income_range')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('education')->nullable();
            $table->string('profile_picture')->nullable();
            $table->text('bio')->nullable();
            $table->string('website')->nullable();
            $table->string('source_info')->nullable(); // e.g., "data_breach", "user_input"
            $table->json('metadata')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
