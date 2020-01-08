<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('active')->default(1);//
            $table->bigInteger('id_blog')->unsigned();
            $table->foreign('id_blog')
                ->references('id')
                ->on('blog');
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
        Schema::dropIfExists('tag_blog');
    }
}
