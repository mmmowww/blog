<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; //?
//use Request; //?
use Illuminate\Support\Facades\DB;


class IS extends Controller
{

 public function SelectIS(){
	 $SELECT = DB::table('is')->select('*')->get();
	 return view('SELECT.index', ['SELECT' => $SELECT]);
 }
 public function Insertform(){
	 return view('welcome');
 }
 
 //////// Кнопки селекторы
 public function SearchNumeroWorks(Request $request){ //Выборка по номеру
 $SELECT = DB::table('is')->where('Name','=',$request['SearhName'])->get();
 return view('Render',['SELECT' => $SELECT]);
 }
 
 public function SearchRatingWorks(Request $request){ //Выборка по оценке
 $SELECT = DB::table('is')->where('Rating','=' ,$request['SearhRating'])->get();
 
  return view('Render',['SELECT' => $SELECT]);
 }
 public function SearchPositionWorks(Request $request){ //Выборка по позицыии
 $SELECT = DB::table('is')->where('Position','=',$request['SearhPosition'].'')->get();
 
  return view('Render',['SELECT' => $SELECT]);
 }
 public function SearchMonthWorks(Request $request){ //Выборка по Месяцу
 $SELECT = DB::table('is')->where('Month','=',$request['SearhMonth'])->get();
 
  return view('Render',['SELECT' => $SELECT]);
 }
 public function SearchYearWorks(Request $request){ //Выборка по Году
 $SELECT = DB::table('is')->where('Year','=',$request['SearhYear'])->get();
 
  return view('Render',['SELECT' => $SELECT]);
 }
 public function SearchMenagerWorks(Request $request){ //Выборка по оценившему менеджеру
 $SELECT = DB::table('is')->where('Menager','=',$request['SearhMenager'])->get();
 
  return view('Render',['SELECT' => $SELECT]);
 }
}


