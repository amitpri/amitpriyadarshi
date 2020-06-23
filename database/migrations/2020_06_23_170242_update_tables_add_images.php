<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablesAddImages extends Migration
{
 
    public function up()
    {
        Schema::table('bigdatas', function (Blueprint $table) {  
            $table->string('image1')->nullable()->add();
            $table->string('image2')->nullable()->add();
            $table->string('image3')->nullable()->add();
            $table->string('image4')->nullable()->add();
            $table->string('image5')->nullable()->add();
        });

        Schema::table('clouds', function (Blueprint $table) {  
            $table->string('image1')->nullable()->add();
            $table->string('image2')->nullable()->add();
            $table->string('image3')->nullable()->add();
            $table->string('image4')->nullable()->add();
            $table->string('image5')->nullable()->add();
        });

        Schema::table('javas', function (Blueprint $table) {  
            $table->string('image1')->nullable()->add();
            $table->string('image2')->nullable()->add();
            $table->string('image3')->nullable()->add();
            $table->string('image4')->nullable()->add();
            $table->string('image5')->nullable()->add();
        });

        Schema::table('notes', function (Blueprint $table) {  
            $table->string('image1')->nullable()->add();
            $table->string('image2')->nullable()->add();
            $table->string('image3')->nullable()->add();
            $table->string('image4')->nullable()->add();
            $table->string('image5')->nullable()->add();
        });

        Schema::table('m_b_a_s', function (Blueprint $table) {  
            $table->string('image1')->nullable()->add();
            $table->string('image2')->nullable()->add();
            $table->string('image3')->nullable()->add();
            $table->string('image4')->nullable()->add();
            $table->string('image5')->nullable()->add();
        });
    }


    public function down()
    {
        Schema::table('bigdatas', function (Blueprint $table) {
            $table->dropColumn('image1'); 
            $table->dropColumn('image2'); 
            $table->dropColumn('image3'); 
            $table->dropColumn('image4'); 
            $table->dropColumn('image5'); 
        });

        Schema::table('clouds', function (Blueprint $table) {
            $table->dropColumn('image1'); 
            $table->dropColumn('image2'); 
            $table->dropColumn('image3'); 
            $table->dropColumn('image4'); 
            $table->dropColumn('image5'); 
        });

        Schema::table('javas', function (Blueprint $table) {
            $table->dropColumn('image1'); 
            $table->dropColumn('image2'); 
            $table->dropColumn('image3'); 
            $table->dropColumn('image4'); 
            $table->dropColumn('image5'); 
        });

        Schema::table('notes', function (Blueprint $table) {
            $table->dropColumn('image1'); 
            $table->dropColumn('image2'); 
            $table->dropColumn('image3'); 
            $table->dropColumn('image4'); 
            $table->dropColumn('image5'); 
        });

        Schema::table('m_b_a_s', function (Blueprint $table) {
            $table->dropColumn('image1'); 
            $table->dropColumn('image2'); 
            $table->dropColumn('image3'); 
            $table->dropColumn('image4'); 
            $table->dropColumn('image5'); 
        });
    }
}
