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
        Schema::create('favorite_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('favorite_cart_id');
            $table->foreignId('product_item_id');
            $table->timestamps();

            $table->foreign('favorite_cart_id')->references('id')->on('favorite_carts');
            $table->foreign('product_item_id')->references('id')->on('product_items');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorit_products');
    }
};
