<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('brand_id');
            //product stock keeping unit for tracking product in warehouse
            //consider how to store sku per attribute
            //test a product_variant table that will include sku for each variant
            //store product attributes as array in product_variant table
            $table->string('sku')->unique();
            $table->string('gtin')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->text('short_description')->nullable();
            $table->text('full_description');
            $table->string('color')->nullable();
            $table->decimal('price')->default(0);
            $table->decimal('old_price')->default(0);
            $table->decimal('discount')->default(0);
            $table->boolean('featured')->default(false);
            $table->integer('status')->default(0);
            $table->integer('stock')->default(0);
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
