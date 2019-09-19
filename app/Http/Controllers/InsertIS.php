<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; //?
use Illuminate\Support\Facades\DB;


class InsertIS extends Controller
{
	public function Insert(Request $request){
		$DATAREQVEST = $request;
		DB::insert("INSERT INTO `is` (`id`, `Rating`, `Position`, `Name`, `Comment`, `FULL_Data`, `Month`, `Year`, `Menager`) VALUES (NULL, '".$request['Rating']."', '".$request['Position']."', '".$request['Name']."', '".$request['Comment']."', NOW(), '".$request['Month']."', '".$request['Year']."', '".$request['Manager_Signature']."');");
		
		return view('Senks');
		
	}
	
}


