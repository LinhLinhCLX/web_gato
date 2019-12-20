<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            // $table->integer('slug');// đánh số thứ tự hiển thị trên thanh menu
            $table->text('short_description')->nullable();
            $table->text('full_description')->nullable();
            $table->integer('active')->default(1);//1 hiển thị, 0 ẩn
            $table->string('image')->nullable();
            $table->bigInteger('id_admin')->unsigned();
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
        Schema::dropIfExists('blog');
    }
}
