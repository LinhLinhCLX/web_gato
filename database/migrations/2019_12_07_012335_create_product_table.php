<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();//check tên ko được trùng lặp
            $table->string('slug');
            $table->string('image');
            $table->float('price', 8, 2)->unsigned();//chỉnh sủa để float hoặc double
            $table->float('sale_product', 8, 2)->unsigned();
            $table->integer('active')->default(1);// mặc định là 1 - Hiển thị, 0-Ẩn
            $table->integer('new')->default(1);//mặc định là 1 - sản phẩm mới, 0-Cũ
            $table->integer('count_view')->default(0);// mặc định bằng 0// đếm số view
            $table->integer('count_sale')->default(0);// mặc định bằng 0//số lượng sp bán được
            $table->text('short_description')->nullable();
            $table->text('full_description')->nullable();
            $table->bigInteger('id_cate_product')->unsigned();// thêm khóa ngoài
            $table
                ->foreign('id_cate_product')
                ->refernces('id')
                ->on('cate_product')
                ->onDelete('cascade');
            $table->string('size')->nullable();

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
        Schema::dropIfExists('product');
    }
}
