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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();                                      // Creates an auto-incrementing primary key (id).
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table.
            $table->foreignId('website_id')->constrained()->onDelete('cascade'); // Foreign key to websites table.
           // $table->unique(['user_id', 'website_id']);        // Unique constraint for user-website pairs.
            $table->timestamps();                               // Timestamps for creation and update.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');              // Drops the subscriptions table if it exists.
    }
};
