<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestashopProductStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestashop_product_stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('producto_id');
            $table->string('stock_real');
            $table->string('estado_producto');
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
        Schema::dropIfExists('prestashop_product_stocks');
    }
}
