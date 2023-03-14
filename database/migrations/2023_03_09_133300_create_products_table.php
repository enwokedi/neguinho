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
            // $table->id();
            $table->text('sku');
            $table->text('description')->nullable();
            $table->text('ean');
            $table->float('price', 8, 2);
            $table->float('vat_price', 8, 2);
            $table->integer('stock')->nullable();
            $table->text('estimated_delivery')->nullable();
            $table->text('image_name');
            $table->text('vatable');
            $table->text('obsolete');
            $table->text('dead');
            $table->text('replacement_product')->nullable();
            $table->text('brand')->nullable();
            $table->text('exteneded_description')->nullable();
            $table->text('variation')->nullable();
            $table->text('date_added')->nullable();
            $table->text('pid')->nullable();
            $table->text('super_product_name')->nullable();
            $table->text('colour')->nullable();
            $table->text('image_url')->nullable();
            $table->text('category')->nullable();
            $table->text('model')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
