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
        Schema::create('users', function (Blueprint $table) {
            $table->id();                       // Creates an auto-incrementing primary key (id).
            $table->string('email')->unique();  // Creates a unique email column.
            $table->timestamps();                // Creates created_at and updated_at timestamp columns.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');         // Drops the users table if it exists.
    }
};
