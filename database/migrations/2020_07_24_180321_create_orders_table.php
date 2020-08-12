<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('order_confirm')->default(0);
            $table->integer('order_delivery')->default(0);
            $table->string('order_address');
            $table->string('order_name');
            $table->string('order_phone');
            $table->longText('order_note')->nullable();
            $table->integer('totalQuantity');
            $table->float('totalPrice');
            $table->string('payment')->default('COD');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('orders');
    }
}
