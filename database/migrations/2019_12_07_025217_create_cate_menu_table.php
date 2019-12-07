<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cate_menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('number_order');// đánh số thứ tự hiển thị trên thanh menu
            $table->text('description')->nullable();
            $table->integer('active')->default(1);//1 hiển thị, 0 ẩn
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
        Schema::dropIfExists('cate_menu');
    }
}
