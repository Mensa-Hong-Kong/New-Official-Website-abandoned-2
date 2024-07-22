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
        Schema::create('user_emails', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('email');
            $table->dateTime('verified_at')->nullable();
            $table->unique(['email', 'verified_at']);
            $table->boolean('is_main')->default(false);
            $table->unique(['user_id', 'is_main']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
