<?php


	 //lang
	Route::get('lang/{locale}', function ($locale) {
		Session::put('locale',$locale);
	    return redirect('/');
	});


Route::group(['middleware'=>'lang'],function(){


	Route::group(['namespace'=>'Users'],function(){

		//user
		Route::get('register','Users@register');
		Route::post('doRegister','Users@doRegister');
		Route::get('activeEmail/{emailToken}','Users@activeEmail');
		Route::get('login','Users@login')->name('login');
		Route::post('doLogin','Users@doLogin');





		//authRoutes
		Route::group(['middleware' => 'auth'],function(){
			
			Route::group(['middleware' => 'emailActive'],function(){

				Route::any('/','HomePage@homePage');



				Route::post('confirmConditionAndChooseJobe','Users@confirmConditionAndChooseJobe');
				Route::post('completeUserPersonal','Users@completeUserPersonal');
				Route::post('completeUserCommunication','Users@completeUserCommunication');
				Route::post('completeUserEducation','Users@completeUserEducation');
				Route::post('completeUserIncurance','Users@completeUserIncurance');
				Route::post('completeUserWork','Users@completeUserWork');
				Route::post('completeUserPartner','Users@completeUserPartner');
                    Route::post('completeUserFamilyCompany','Users@completeUserFamilyCompany');
				Route::post('completeUserEmergencyFriends','Users@completeUserEmergencyFriends');


				//iformations and view
				Route::any('userProfile','Users@userProfile');
				Route::get('myEmployers','Users@myEmployers');
				Route::get('vacationOrder','Users@vacationOrder');


				Route::get('jobInfo/{id?}','Users@jobInfo');

                
                /*Route::get('getDate',function(){
                    date_default_timezone_set('Africa/Cairo');
                    
                    date('Y-m-d');
                    
                    
                    return strtotime(date($_GET['start'])) - strtotime(date('yy/mm/dd')) / (60 * 60 * 24);
                });*/


			});




			Route::get('logOut','Users@logOut');
		});


	});



});




	
