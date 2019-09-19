<?php

//use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewsTable extends Migration
{
  
    
    public function up()/// Как только применили
    {Schema::create('NewsTable',function (Bluprint $table){
		$table->increments('id');
		$table->string('NameNews');
        $table->text('NewsText');
        $table->text('AuthorNews');
        $table->dateTime('DATA');
		$table->timestamps();
		})
        
    }

   
    public function down()/// Когда  отменяем миграцыю
    {
        Schema::drop('NewsTable');
    }
}
