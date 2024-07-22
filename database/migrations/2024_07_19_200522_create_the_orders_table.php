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
        Schema::create('the_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_cart_id');
            $table->foreignId('order_status_id');
            $table->foreignId('shipping_methos_id');
            $table->timestamps();

            $table->foreign('order_cart_id')->references('id')->on('order_carts');
            $table->foreign('order_status_id')->references('id')->on('order_statuses');
            $table->foreign('shipping_methos_id')->references('id')->on('shipping_methods');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('the_orders');
    }
};
