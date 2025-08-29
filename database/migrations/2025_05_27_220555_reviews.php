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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            // review appartiene a un utente
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            // review appartiene a un prodotto
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');

            $table->smallInteger('star');
            $table->string('comment');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};

