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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();                                      // Creates an auto-incrementing primary key (id).
            $table->foreignId('post_id')->constrained()->onDelete('cascade'); // Foreign key to posts table.
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table.
            $table->timestamps();                               // Timestamps for creation and update.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');              // Drops the notifications table if it exists.
    }
};
