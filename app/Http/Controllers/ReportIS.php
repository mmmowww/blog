<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportIS extends Controller
{
    public function ReportUserNumero(Request $request){
		$Name = $request['RenderName'];
		$Month = $request['RenderMonth'];
		$Year = $request['RenderYear'];
		
	$SELECTID = DB::select('SELECT count(id) as cid,`Name`,`Month`,`Year` FROM `is` WHERE Name = '.$Name.' AND Month = '.$Month.' AND Year = 2019',array(1)); // Количество записей
	$RatingUser =DB::select('SELECT avg(`Rating`) as avR,`Name` FROM `is` WHERE Name = '.$Name.' ',array(1)); //Средняя оценка по работе
	$SELECTPOSITION_one =DB::select('SELECT avg(`Rating`) as avR,`Name`,`Month`, `Year` FROM `is` WHERE Name = '.$Name.' AND Position = 1 AND Month = '.$Month.' AND Year = '.$Year.'',array(1)); //Кухня
	$SELECTPOSITION_two =DB::select('SELECT avg(`Rating`) as avR,`Name`,`Month`, `Year` FROM `is` WHERE Name = '.$Name.' AND Position = 2 AND Month = '.$Month.' AND Year = '.$Year.'',array(1)); //Зал
	$SELECTPOSITION_tree =DB::select('SELECT avg(`Rating`) as avR,`Name`,`Month`, `Year` FROM `is` WHERE Name = '.$Name.' AND Position = 3 AND Month = '.$Month.' AND Year = '.$Year.'' ,array(1)); //Касса
	$SELECTMENAGER_signature = DB::select('SELECT DISTINCT `Name`, `Month`,`Year`,`Menager` FROM `is` WHERE Name = '.$Name.' AND Month = '.$Month.' AND Year = '.$Year.'',array(1)); // Какой менеджер оценивал
	
		return view('ReportISAnswer',
		             ['SELECTID' => $SELECTID,
		             'RatingUser' => $RatingUser,
		             'SELECTPOSITION_one' => $SELECTPOSITION_one,
		             'SELECTPOSITION_two' => $SELECTPOSITION_two,
		             'SELECTPOSITION_tree' => $SELECTPOSITION_tree,
		             'SELECTMENAGER_signature' => $SELECTMENAGER_signature]
					 );
	}
}
