<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function Index()
	{
		$currency_data = DB::table('currency_data')->select()->get();
		return View::make('index')->with('currency_data',$currency_data);
	}
	
	public function Post_Data()
	{

		$time_placed = strtotime(Input::get('timePlaced'));
		$time_Placed_format = date('Y-m-d H:i:s', $time_placed); 
		
		$data = array('User_ID'=>Input::get('userId'),'Currency_From'=>Input::get('currencyFrom'),
		'Currency_To'=>Input::get('currencyTo'),'Amount_Sell'=>Input::get('amountSell'),'Amount_Buy'=>Input::get('amountBuy'),
		'Rate'=>Input::get('rate'),'Time_Placed'=>$time_Placed_format,'Originating_Country'=>Input::get('originatingCountry'),
		'Created_Time'=> new DateTime());
		
		DB::table('currency_data')->insert($data);
		return Redirect::to('/');


	}

}
