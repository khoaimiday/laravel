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
            $table->string('product_name');
            $table->double('price');
            $table->longText('short_description')->nulable();
            $table->longText('long_description')->nullable();
            $table->string('image')->default('default.png');
            $table->integer('exp_date')->default(24);
            $table->text('product_info')->nullable();
            $table->string('product_unit')->default('box');
            $table->integer('product_quantity')->nullable();      // Quantity of product within per unit
            $table->longText('product_use')->nullable();          // Use for customer
            $table->longText('product_maintain')->nullable();
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('product_types_id');
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
