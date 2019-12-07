<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('cate_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();//check tên ko được trùng lặp
            $table->string('slug');
            $table->string('image');
            $table->bigIntger('id_cate_menu')->unsigned();
            $table
                ->foriegn('id_cate_menu')
                ->references('id')
                ->on('cate_menu');
            $table->integer('active')->default(1);// mặc định là 1 - Hiển thị, 0-Ẩn
            $table->text('description')->nullable();
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
        Schema::dropIfExists('cate_product');
    }
}
