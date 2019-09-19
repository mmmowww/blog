<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateISTable extends Migration
{
   
    public function up()
    {
        Schema::create('is', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Rating');
            $table->integer('Position');
            $table->text('Name');
            $table->text('Comment');
            $table->dateTime('FULL_Data');
            $table->integer('Month');
            $table->integer('Year');
            $table->integer('Menager');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('is');
    }
}



