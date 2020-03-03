<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('orders_products', function (Blueprint $table) {
          $table->unsignedBigInteger('order_id');
          $table->index('order_id');
          $table->foreign('order_id')
              ->references('id')
              ->on('orders')
              ->onDelete('cascade');

          $table->unsignedBigInteger('product_id');
          $table->index('product_id');
          $table->foreign('product_id')
              ->references('id')
              ->on('products')
              ->onDelete('cascade');

          $table->float('quantity');

          $table->primary(['order_id', 'product_id']);

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
        Schema::dropIfExists('orders_products');
    }
}
