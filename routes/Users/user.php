<?php


Route::group(['middleware'=>'lang'],function(){


	Route::group(['namespace'=>'Users'],function(){

	//un auth routes
		



		Route::group(['middleware' => 'auth'],function(){
			
			Route::group(['middleware' => 'emailActive'],function(){

		//auth routes



				







			});




			Route::get('logOut','Users@logOut');
		});
        
        
        
        Route::get('index',function(){
            return view('mAdmin/index');
        });
        
        Route::get('addvacation',function(){
            return view('mAdmin/addvacation');
        });
        
        Route::get('EmploymentData',function(){
            return view('mAdmin/EmploymentData');
        });
        
        Route::get('myusers',function(){
            return view('mAdmin/myusers');
        });
        
        Route::get('PendingRequests',function(){
            return view('mAdmin/PendingRequests');
        });
        
        Route::get('profile',function(){
            return view('mAdmin/profile');
        });
        
        Route::get('ServicesCompensation',function(){
            return view('mAdmin/ServicesCompensation');
        });
        
        Route::get('ServicesFinancial',function(){
            return view('mAdmin/ServicesFinancial');
        });
        
        Route::get('Serviceshr',function(){
            return view('mAdmin/Serviceshr');
        });
        
        Route::get('ServicesInsurance',function(){
            return view('mAdmin/ServicesInsurance');
        });
        
        Route::get('settingsdashboard',function(){
            return view('mAdmin/settingsdashboard');
        });
        
        Route::get('settingsnotifications',function(){
            return view('mAdmin/settingsnotifications');
        });
        
        Route::get('vacation',function(){
            return view('mAdmin/vacation');
        });
        
        Route::get('Vieworders',function(){
            return view('mAdmin/Vieworders');
        });
        
        
        
        
        
        
        
        
        
        
        
        
        


	});



});