<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsandcartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('productsandcarts', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->bigInteger('product_id')->unsigned();
          $table->bigInteger('cart_id')->unsigned();
          $table->timestamps();
          $table->foreign('product_id')
          ->references('id')->on('products');
          $table->foreign('cart_id')
          ->references('id')->on('carts');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productsandcarts');
    }
}
