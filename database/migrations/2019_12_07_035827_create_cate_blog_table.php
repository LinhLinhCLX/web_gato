<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cate_blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('slug');// đánh số thứ tự hiển thị trên thanh menu
            $table->text('description')->nullable();
            $table->integer('active')->default(1);//1 hiển thị, 0 ẩn
            $table->string('image')->nullable();
            $table->bigIntger('id_cate_menu')->unsigned();
            $table
                ->foriegn('id_cate_menu')
                ->references('id')
                ->on('cate_menu');
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
        Schema::dropIfExists('cate_blog');
    }
}
