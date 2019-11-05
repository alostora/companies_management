<?php

use Illuminate\Http\Request;


Route::group(['namespace'=>'Users'],function(){
	
 	Route::post('doLogin','homePage@doLogin');
 	
 	/******************Auth Routes*********************/
	Route::group(['middleware' => 'authh:api'],function(){
		Config::set('auth.defines','api');
	        
	


	Route::get('logOut','homePage@logOut');
	    



	});
});



/********************************admin*******************/
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){

	Route::post('doLogin','adminPassportController@doLogin');

	Route::group(['middleware' => 'adminApi:adminApi'],function(){
		Config::set('auth.defines','adminApi');
		//start routs admins
		

	});

});
