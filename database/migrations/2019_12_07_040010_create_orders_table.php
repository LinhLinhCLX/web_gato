<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->bigInteger('id_user');
            $table->integer('status')->default(1);//là id trạng thái, trạng thái của đơn hàng
            $table->text('time_receipt')->nullable();
            $table->float('sub_total')->unsigned(); // tổng hóa đơn khi chưa discount
            $table->string('title_cake')->nullable();
            $table->float('sub_total_pay')->unsigned();// tổng hóa đơn trước discount
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
