<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->nullable();  
            $table->string('author')->nullable();
            $table->integer('category_id')->unsigned()->nullable();  
            $table->text('summary')->nullable();  
            $table->string('name')->nullable();
            $table->text('blog')->nullable(); 
            $table->string('tags')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable(); 
            $table->string('image3')->nullable(); 
            $table->boolean('status')->default(0); 
            $table->boolean('approved')->default(0);
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
        Schema::dropIfExists('blogs');
    }
}
