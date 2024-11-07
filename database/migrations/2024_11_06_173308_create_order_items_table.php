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
        Schema::create('order_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('product_id')->unique();
            // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
            // $table->unsignedBigInteger('order_id');
            // $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreignId('order_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();

            $table->string('name');
            $table->unsignedInteger('unit_price');
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderitems');
    }
};
