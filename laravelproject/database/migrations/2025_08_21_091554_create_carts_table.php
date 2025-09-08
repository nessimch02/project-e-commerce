<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id('cart_id'); // Primary key
            $table->unsignedBigInteger('user_id'); // User reference
            $table->unsignedBigInteger('product_id'); // Product reference
            $table->integer('quantity')->default(1); // Quantity
            $table->timestamp('date_added')->useCurrent(); // Auto set current time

            // Foreign keys
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
