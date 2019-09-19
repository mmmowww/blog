<?php

namespace App;
//use App\Report;
namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;
///////
use Illuminate\Http\Request; //?
//use Request; //?
use Illuminate\Support\Facades\DB;/////?

class Report extends Model
{
    public function ReportUser(){ 
	$Month = $request['ReportMount'];
	$Name = $request['ReportName'];
	    ////Вызов рапорта для раобтника
		//// Средняя оценка "SELECT avg(`Rating`),`Name` FROM `is` WHERE Name = 185"
		//// Средняя оценка по Месту "SELECT avg(`Rating`),`Name`,`Position` FROM `is` WHERE Name = 185 AND Position = 1"
		//// Отсчёт за позицыю, на месте за год и за месяц "SELECT avg(`Rating`),`Name`,`Position` FROM `is` WHERE Name = 185 AND Position = 1 AND Month = 7 AND Year = 2019"
		//// Отсчёт о количестве записей за месяц "SELECT COUNT(`id`),`Name` FROM `is` WHERE Name = 185 AND Position = 1 AND Month = 7 AND Year = 2019"
		////
	$SELECTID = DB::table('is')->where('Name','=',$Name)->avg('id');
	/////
	//$SELECTID = DB::table('is')->where('Name',$Name)->orWhere(function ($query){
	//	$query->where('',)
	//	->where('',)
	//})-get();
	
	dd($SELECTID);
	}
}
