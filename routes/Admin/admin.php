<?php



Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){

		

	Route::get('login',function(){
		return view('Admin/login');
	});

	Route::post('doLogin','Admins@doLogin');

	//lang
	Route::get('lang/{locale}', function ($locale) {
		Session::put('locale',$locale);
	    return redirect('admin/');
	});


	
	Route::group(['middleware'=>'lang'],function(){

		

		Route::group(['middleware'=>'admin:admin'],function(){
			Config::set('auth.defines','admin');

			//homePage
			Route::get('/','Dashboard@homePage');
			
			//admin
			Route::get('adminInfo','Admins@adminInfo');
			Route::get('viewCreateAdmin','Admins@viewCreateAdmin');
			Route::post('createAdmin','Admins@createAdmin');
			Route::get('viewEditAdmin/{adminId}','Admins@viewEditAdmin');
			Route::post('editAdmin','Admins@editAdmin');
			Route::get('deleteAdmin/{adminId}','Admins@deleteAdmin');




			//users
			Route::get('userInfo','Users@userInfo');
			Route::get('viewCreateUser','Users@viewCreateUser');
			Route::post('createUser','Users@createUser');
			Route::get('viewEditUser/{userId}','Users@viewEditUser');
			Route::post('editUser','Users@editUser');
			Route::get('deleteUser/{userId}','Users@deleteUser');
			
			//Religion
			Route::get('religionInfo','Religions@religionInfo');
			Route::get('viewEditReligion/{religionId?}','Religions@viewEditReligion');
			Route::post('createRegilion','Religions@createRegilion');
			Route::get('deleteRegilion/{religionId}','Religions@deleteRegilion');



			//Condition
			Route::get('conditionsInfo','Conditions@conditionsInfo');
			Route::get('viewEditCondition/{conditionId?}','Conditions@viewEditCondition');
			Route::post('createCondition','Conditions@createCondition');
			Route::get('deleteCondition/{conditionId}','Conditions@deleteCondition');



			//ManageMents
			Route::get('managementInfo','Managements@managementInfo');
			Route::get('viewCreateManagement/{manageId?}','Managements@viewCreateManagement');
			Route::post('createManagement','Managements@createManagement');
			Route::get('deleteManagement/{manageId}','Managements@deleteManagement');



			//jobs
			Route::get('jobInfo/{id?}','Jobs@jobInfo');
			Route::get('viewCreateJob/{jobId?}','Jobs@viewCreateJob');
			Route::post('createJob','Jobs@createJob');
			Route::get('deleteJob/{jobId}','Jobs@deleteJob');
			Route::get('jobOrderInfo','Jobs@jobOrderInfo');
			Route::get('jobCvInfo/{jobId}/{hrAction}','Jobs@jobCvInfo');
			Route::get('userCvInfo/{jobId}','Jobs@userCvInfo');

			//hrActions
			Route::get('hrAcceptUserJob/{userId}','Jobs@hrAcceptUserJob');
			Route::post('hrSuggestJob','Jobs@hrSuggestJob');
			Route::post('hrRefuseJob','Jobs@hrRefuseJob');



			//interview
			Route::post('createInterview','Interviews@createInterview');
			Route::get('interviewInfo/{interviewStatus?}','Interviews@interviewInfo');
			Route::post('interviewInfoWithDate','Interviews@interviewInfoWithDate');
			Route::any('interviewAction/{hrAction}/{interviewDate}','Interviews@interviewAction');
			Route::post('delayInterview','Interviews@delayInterview');
			Route::get('delayedInterViewActions/{interviewDate}','Interviews@delayedInterViewActions');
			//delayed interview operations
			Route::get('delayedInterviewAccepted/{interviewId}','Interviews@delayedInterviewAccepted');
			Route::post('refuseDelayInterview','Interviews@refuseDelayInterview');
			//the testpage
			Route::get('startTest/{userId}/{jobId}','Interviews@startTest');
			//user send answers
			Route::post('userInterviewAnswer','Interviews@userInterviewAnswer');
			//view results
			Route::get('viewResult/{userId}','Interviews@viewResult');

			
			

			//questions
			Route::get('questionInfo','Questions@questionInfo');
			Route::get('viewCreateQuestion/{questionId?}','Questions@viewCreateQuestion');
			Route::post('createQuestion','Questions@createQuestion');
			Route::get('fackAnswerInfo','Questions@fackAnswerInfo');
			Route::get('changeAnswerStatus/{answerId}/{status}','Questions@changeAnswerStatus');





			//logout
			Route::get('logOut','Admins@logOut');


		});

	});


});



