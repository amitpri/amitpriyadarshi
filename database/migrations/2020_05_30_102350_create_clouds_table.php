<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCloudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clouds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category')->nullable();
            $table->string('title')->nullable(); 
            $table->text('reference')->nullable();
            $table->text('notes')->nullable();
            $table->text('concepts')->nullable();  
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
        Schema::dropIfExists('clouds');
    }
}
