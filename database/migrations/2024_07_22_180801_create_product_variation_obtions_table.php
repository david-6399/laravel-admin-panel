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
        Schema::create('product_variation_obtions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_item_id');
            $table->foreignId('variation_obtion_id');
            $table->timestamps();

            $table->foreign('product_item_id')->references('id')->on('product_items');
            $table->foreign('variation_obtion_id')->references('id')->on('variation_obtions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variation_obtions');
    }
};
