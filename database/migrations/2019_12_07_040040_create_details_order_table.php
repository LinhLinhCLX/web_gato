<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIntger('id_product');
            $table->bigIntger('id_order');
            $table->float('price')->unsigned();// giá sản phẩm tại thời điểm bán
            $table->integer('amount')->unsigned();
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
        Schema::dropIfExists('details_order');
    }
}
