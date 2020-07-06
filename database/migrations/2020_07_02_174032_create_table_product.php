<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('name');
            $table->integer('price')->nullalble();
            $table->text('description')->nullalble();
            $table->text('content')->nullalble();
            $table->integer('discount')->default(0);
            $table->integer('sellCount')->default(0);
            $table->string('dvt')->nullalble();
            $table->string('madeIn')->nullalble();
            $table->text('useFor')->nullalble();
            $table->string('image')->nullalble();
            $table->text('ingredient')->nullalble();
            $table->text('safety')->nullalble();
            $table->string('brandId')->nullalble();
            $table->string('groupId')->nullalble();
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
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('id');
        });
    }
}
