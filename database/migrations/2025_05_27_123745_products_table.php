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
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('Name');
        $table->string('Image')->nullable();
        $table->string('ALT')->nullable();
        $table->string('Category');
        $table->text('Description')->nullable();
        $table->decimal('Price', 8, 2);
        $table->string('Material');
        $table->string('Dimensions');
        $table->string('Color');
        $table->string('Availability');
        $table->string('Shipping');
        $table->timestamps();
    });
}

   public function down()
    {
        Schema::dropIfExists('products');
    }
};
