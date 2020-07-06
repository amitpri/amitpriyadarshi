<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCloudXLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cloud_x_labs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category')->nullable();
            $table->string('title')->nullable(); 
            $table->text('reference')->nullable();
            $table->text('notes')->nullable();
            $table->text('concepts')->nullable();  
            $table->string('image1')->nullable();
            $table->string('image2')->nullable(); 
            $table->string('image3')->nullable();
            $table->string('image4')->nullable(); 
            $table->string('image5')->nullable(); 
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
        Schema::dropIfExists('cloud_x_labs');
    }
}
