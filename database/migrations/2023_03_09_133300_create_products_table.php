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
            $table->biginteger('ean')->unique();
            $table->double('rrp')->nullable();
            $table->double('rrp_vat')->nullable();
            $table->integer('stock')->nullable();
            $table->text('estimated_delivery')->nullable();
            $table->text('image_name')->nullable();
            $table->text('vatable')->nullable();
            $table->text('obsolete')->nullable();
            $table->text('dead')->nullable();
            $table->text('replacement_product')->nullable();
            $table->text('brand')->nullable();
            $table->text('exteneded_description')->nullable();
            $table->text('variation')->nullable();
            $table->text('date_added')->nullable();
            $table->bigInteger('ident')->unsigned();
            $table->text('super_product_name')->nullable();
            $table->text('colour')->nullable();
            $table->text('image_url')->nullable();
            $table->text('category')->nullable();
            $table->text('model')->nullable();
            $table->timestamps();
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
