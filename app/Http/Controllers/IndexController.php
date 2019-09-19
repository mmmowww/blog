<?php

namespace App\Http\Controllers;

use App\Index;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller{ // Подготовка к индексу
	public $bdIndex = ['Login' => 'Root', //Логин
	                  'Pasword' => '', // Пароль
	                  'Colons' => '', // Количество общее колонн
	                  'SQL' => '',]; // SQL запрос к БД
	                  
    CONST CountSql = "SELECT COUNT(*) FROM IndexNews"; // Запрос на количество строк в бд
	public function SHOW(){
		//$result = DB::select('select * from users where active = ?', [1]);
		
		
	return view('index');
}
}