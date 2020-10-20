<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Category extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
            Schema::create('categories', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('user_id')->unsigned()->nullable(); 
                $table->string('name')->nullable(); 
                $table->string('image')->nullable();  
                $table->text('details')->nullable(); 
                $table->integer('priority')->nullable();
                $table->boolean('approved')->default(1); 
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
        //
    }
}
