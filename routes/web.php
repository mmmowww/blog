<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@SHOW');
Route::get('/photo/', function () {
    return view('photo');
});
Route::get('/contact/', function () {
    return view('contact');
});
Route::get('/price/', function () {
    return view('price');
});

Route::get('/Works',function (){
	$SELECT = DB::table('is')->get();
	return view('welcome', ["SELECT" => $SELECT]);
	});

//// Кнопки запроса
Route::post('/Senks','InsertIS@insert'); //Инсерт
//Route::post('/RenderNumero','IS@SearchNumeroWorks'); //??
//Route::get('/RenderNumero','IS@SearchNumeroWorks'); //??
Route::post('/RenderNumero','IS@SearchNumeroWorks'); //??
Route::post('/RenderRating','IS@SearchRatingWorks');
Route::post('/RenderPosition','IS@SearchPositionWorks');
Route::post('/RenderMonth','IS@SearchMonthWorks');
Route::post('/RenderYear','IS@SearchYearWorks');
Route::post('/RenderMenager','IS@SearchMenagerWorks');
/////Создать по месяцу, и имени отсчёт по проделанной работе работника

Route::post('/Report','ReportIS@ReportUserNumero');



Auth::routes();

Route::get('/home', 'HomeController@index');

if(Auth::check()){
	Route::get('Controler',function (){
		$IS = App\IS::all();
		return view('Controler');
	});
}