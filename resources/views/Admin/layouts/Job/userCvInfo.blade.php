@if(!empty($userCvInfo))
	<div class="content-wrapper" id="dvContainer">
		<section class="content">
			<div class="row">
		        <div class="col-xs-12">
		            @if(session()->has('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
		            @endif
		            @if(session()->has('delete'))
		            	<div class="alert alert-warning">{{session('delete')}}</div>
		            @endif

		          <!-- start user general Info -->
		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('job.general user Info')</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-bordered" style="border-width: 1px;">

		                <tr>
		                  <th>@lang('job.CV-number')</th>
		                  <th>@lang('job.name')</th>
		                  <th>@lang('job.email')</th>
		                  <th>@lang('job.created_at')</th>
		                  <th>@lang('job.operations')</th>
		                </tr>
					
						<tr>
						
							<td>{{$userCvInfo->userJobOrderInfo->CV_Code}}</td>
					        <td>{{$userCvInfo->name}}</td>
					        <td>{{$userCvInfo->email}}</td>
					        <td>{{$userCvInfo->created_at}}</td>
							<td>	
				          		<!-- End HR Actions And Table Operations -->	
								@if(count($errors))
									@foreach($errors->all() as $error)
						              	<div class="alert alert-danger">{{$error}}</div>
									@endforeach
								@endif

								<div  class="col-md-10 form-group">

						  			@if($userCvInfo->userJobOrderInfo->hrAction == "accepted")
										<div class="form-control">
								  	 		<a class="col-md-10 label-info" href="#"  id="btnPrint" >
								  	 			<i class="fa fa-print"></i>  @lang('job.print')
								  	 		</a>
							  	 		</div>

								@if(!empty(\App\Models\Interview::where('user_employer',$userCvInfo->id)->first()))
							  	 		
							  	 		<div class="form-control">
								  	 		<label class="col-md-10 label-default">
								  	 			<i class="fa fa-check-circle"></i>  @lang('job.user already has interview')
								  	 		</label>
							  	 		</div>
							  	@else
								  		<div class="form-control">
								  	 		<a class="col-md-10 label-success" href="#"  onclick="return interviewFormm();" >
								  	 			<i class="fa fa-bolt"></i>  @lang('job.interview')
								  	 		</a>
							  	 		</div>
							  	@endif 		

							  	 	@elseif($userCvInfo->userJobOrderInfo->hrAction == "suggested")
							  	 		<div class="form-control">
								  	 		<a class="col-md-10 label-info" href="#"  id="btnPrint" >
								  	 			<i class="fa fa-print"></i>  @lang('job.print')
								  	 		</a>
							  	 		</div>
							  	 		<div class="form-control">
											<a class="col-md-10 label-success" href="{{url('admin/hrAcceptUserJob/'.$userCvInfo->id)}}">
								  				@lang('job.accept') <i class="fa fa-edit"></i>
								  			</a>
							  			</div>
							  			<div class="form-control" onclick="return refusedForm();">
								  			<a class="col-md-10 label-danger" href="#">
								  				@lang('job.refuse') <i class="fa fa-close"></i>
								  			</a>
								  		</div>
							  		@elseif($userCvInfo->userJobOrderInfo->hrAction == "refused")	
							  			<div class="form-control">
								  	 		<a class="col-md-10 label-info" href="#"  id="btnPrint" >
								  	 			<i class="fa fa-print"></i>  @lang('job.print')
								  	 		</a>
							  	 		</div>
							  	 	@elseif($userCvInfo->userJobOrderInfo->hrAction == NULL)
							  	 		
							  	 	<div class="form-control">
								  	 		<a class="col-md-10 label-info" href="#"  id="btnPrint" >
								  	 			<i class="fa fa-print"></i>  @lang('job.print')
								  	 		</a>
							  	 		</div>
							  	 		<div class="form-control">
											<a class="col-md-10 label-success" href="{{url('admin/hrAcceptUserJob/'.$userCvInfo->id)}}">
								  				@lang('job.accept') <i class="fa fa-edit"></i>
								  			</a>
							  			</div>
							  			<div class="form-control" onclick="return refusedForm();">
								  			<a class="col-md-10 label-danger" href="#">
								  				@lang('job.refuse') <i class="fa fa-close"></i>
								  			</a>
								  		</div>
								  	 	<div class="form-control" onclick="return suggestForm();">
								  			<a class="col-md-10 label-warning" href="#">
								  				@lang('job.suggest') <i class="fa fa-close"></i>
								  			</a>
								  		</div>

							  		@endif

							  		<div class="form-group">
							  			<form action="{{url('admin/hrRefuseJob')}}" method="post" id="refuseJobForm" style="display:none;">
											@csrf
											<input type="hidden" name="user_id" value="{{$userCvInfo->id}}">
											<input type="hidden" name="hrAction" value="refused">
											<div  class="form-group" class="col-sm-12">
												<div class="col-sm-6">
												<label class="form-control label-danger">
													<i class="fa fa-info"></i>
													@lang('job.refuseReason')
												</label>
									  			<input type="text" name="refuseReason" placeholder="@lang('job.refuseReason')" class="form-control" required>
													<input type="submit" value="@lang('job.submit')" class="form-control">
												</div>
											</div>
										</form>

										<form action="{{url('admin/hrSuggestJob')}}" method="post" style="display:none;width: 300px;" id="suggestjobForm">
											@csrf
									<input type="hidden" name="hrAction" value="suggested">
									<input type="hidden" name="user_id" value="{{$userCvInfo->id}}">
											<div  class="form-group" class="col-sm-12">
												<div class="col-sm-6">
												<label class="form-control label-warning">
													<i class="fa fa-info"></i>
													@lang('job.another Jobs')
												</label>
									  			<select name="job_suggest_id" class="form-control" required>
									  				<option value="">@lang('job.choose')</option>
									  				@if(!empty(\App\Models\Job::get()))
									  				@foreach(\App\Models\Job::get() as $jobb)
														<option class="label label-default" value="{{$jobb->id}}" style="font-size: 13px;">
															{{$jobb->jobName}}
														</option>
														@endforeach
									  				@endif
									  			</select>
													<input type="submit" value="@lang('job.submit')" class="form-control">
												</div>
											</div>
										</form>


										<form action="{{url('admin/createInterview')}}" method="post" style="display:none;width: 400px;" id="interviewForm">
											@csrf
											<input type="hidden" name="user_employer" value="{{$userCvInfo->id}}">
											<input type="hidden" name="interview_job" value="{{$userCvInfo->userJobOrderInfo->job_id}}">
											<div  class="form-group" class="col-sm-12">
												<div class="col-sm-6">
												<label class="form-control label-success">
													<i class="fa fa-user"></i>
													@lang('job.interview employer')
												</label>
									  			<select name="hr_employer" class="form-control" required>
									  				<option value="">@lang('job.choose')</option>
									  				@if(!empty(\App\User::get()))
									  				@foreach(\App\User::get() as $user)
														<option class="label label-default" value="{{$user->id}}" style="font-size: 13px;">
															{{$user->name}}
														</option>
														@endforeach
									  				@endif
									  			</select>

									  			<label class="form-control label-success">
													<i class="fa fa-calender"></i>
													@lang('job.interview date')
												</label>
			  									<input type="date" name="interviewDate" class="form-control" placeholder="interviewDate" required>

			  									<label class="form-control label-success">
													<i class="fa fa-calender"></i>
													@lang('job.interview time')
												</label>
			  									<input type="time" name="interviewTime" class="form-control" placeholder="interviewTime" required>
													<input type="submit" value="@lang('job.submit')" class="form-control">
												</div>
											</div>
										</form>

							  	 		
										
							  		</div>
						  	 	</div>						
							<!-- Start HR Actions And Table Operations -->
				          	</td>
				      	</tr>
		              </table> 
		            </div>
		          </div>

		          <!-- end user general Info -->


		          <!-- start user personal Info -->
		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('job.user personal Info')</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-bordered">
		                <tr>
		                  	<th>@lang('job.CV-number')</th>
						  	<th>@lang('job.firstName')</th>
		                  	<th>@lang('job.lastName')</th>
		                  	<th>@lang('job.fatherName')</th>
		                  	<th>@lang('job.grandFatherName')</th>
		                  	<th>@lang('job.familyName')</th>
		                  	<th>@lang('job.personalCardNumber')</th>
		                  	<th>@lang('job.cardExpireDate')</th>
		                  	<th>@lang('job.nationality')</th>
		                  	<th>@lang('job.sex')</th>
		                  	<th>@lang('job.birthDay')</th>
		                  	<th>@lang('job.birthPlace')</th>
		                  	<th>@lang('job.religion')</th>
		                  	<th>@lang('job.socialStatus')</th>
		                  	<th>@lang('job.armyStatus')</th>
		                  	<th>@lang('job.armyDate')</th>
		                </tr>
						@if(!empty($userCvInfo->userPersonalInfo))
						<tr>
							<td>{{$userCvInfo->userJobOrderInfo->CV_Code}}</td>
					        <td>{{$userCvInfo->userPersonalInfo->firstName}}</td>
					        <td>{{$userCvInfo->userPersonalInfo->lastName}}</td>
					        <td>{{$userCvInfo->userPersonalInfo->fatherName}}</td>
					        <td>{{$userCvInfo->userPersonalInfo->grandFatherName}}</td>
					        <td>{{$userCvInfo->userPersonalInfo->familyName}}</td>
					        <td>{{$userCvInfo->userPersonalInfo->personalCardNumber}}</td>
					        <td>{{$userCvInfo->userPersonalInfo->cardExpireDate}}</td>
					        <td>{{$userCvInfo->userPersonalInfo->nationality}}</td>
					        <td>{{$userCvInfo->userPersonalInfo->sex}}</td>
					        <td>{{$userCvInfo->userPersonalInfo->birthDay}}</td>
					        <td>{{$userCvInfo->userPersonalInfo->birthPlace}}</td>
					        <td>{{$userCvInfo->userPersonalInfo->religion}}</td>
					        <td>{{$userCvInfo->userPersonalInfo->socialStatus}}</td>
					        <td>{{$userCvInfo->userPersonalInfo->armyStatus}}</td>
					        <td>{{$userCvInfo->userPersonalInfo->armyDate}}</td>
				      	</tr>
				      	@endif
		              </table> 
		            </div>
		          </div>
		          <!-- end user personal Info -->

		          <!-- start user Communication Info -->
		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('job.user Communication Info')</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-bordered">

		                <tr>
		                  	<th>@lang('job.CV-number')</th>
						  	<th>@lang('job.firstMobile')</th>
		                  	<th>@lang('job.secondMobile')</th>
		                  	<th>@lang('job.landPhone')</th>
		                </tr>
						@if(!empty($userCvInfo->userCommunicationInfo))
						<tr>
							<td>{{$userCvInfo->userJobOrderInfo->CV_Code}}</td>
					        <td>{{$userCvInfo->userCommunicationInfo->firstMobile}}</td>
					        <td>{{$userCvInfo->userCommunicationInfo->secondMobile}}</td>
					        <td>{{$userCvInfo->userCommunicationInfo->landPhone}}</td>
				      	</tr>
				      	@endif
		              </table> 
		            </div>
		          </div>
		          <!-- end user Communication Info -->


		          <!-- start user adress Info -->
		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('job.user adress Info')</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-bordered">

		                <tr>
		                  	<th>@lang('job.CV-number')</th>
						  	<th>@lang('job.governoment')</th>
		                  	<th>@lang('job.city')</th>
		                  	<th>@lang('job.referenecePersoneName')</th>
		                  	<th>@lang('job.referenecePersoneMobile')</th>
		                  	<th>@lang('job.compeleteAdress')</th>
		                  	<th>@lang('job.adressStatus')</th>
		                </tr>
					@if(!empty($userCvInfo->userAdressInfo))
					@foreach($userCvInfo->userAdressInfo as $adress)
						<tr>
							<td>{{$userCvInfo->userJobOrderInfo->CV_Code}}</td>
					        <td>{{$adress->governoment}}</td>
					        <td>{{$adress->city}}</td>
					        <td>{{$adress->referenecePersoneName}}</td>
					        <td>{{$adress->referenecePersoneMobile}}</td>
					        <td>{{$adress->compeleteAdress}}</td>
					        <td>{{$adress->adressStatus}}</td>
				      	</tr>
				    @endforeach  	
				    @endif  	

		              </table> 
		            </div>
		          </div>
		          <!-- end user adress Info -->

		          <!-- start user education Info -->
		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('job.user education Info')</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-bordered">

		                <tr>
		                  	<th>@lang('job.CV-number')</th>
						  	<th>@lang('job.qualificationType')</th>
		                  	<th>@lang('job.specialization')</th>
		                  	<th>@lang('job.educationGrading')</th>
		                  	<th>@lang('job.handGraduation')</th>
		                  	<th>@lang('job.graduationDate')</th>
		                </tr>
					@if(!empty($userCvInfo->userEducationInfo))
					@foreach($userCvInfo->userEducationInfo as $education)
						<tr>
							<td>{{$userCvInfo->userJobOrderInfo->CV_Code}}</td>
					        <td>{{$education->qualificationType}}</td>
					        <td>{{$education->specialization}}</td>
					        <td>{{$education->educationGrading}}</td>
					        <td>{{$education->handGraduation}}</td>
					        <td>{{$education->graduationDate}}</td>
				      	</tr>
				    @endforeach  	
				    @endif  	

		              </table> 
		            </div>
		          </div>
		          <!-- end user education Info -->


		          <!-- start user courses Info -->
		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('job.user courses Info')</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-bordered">

		                <tr>
		                  	<th>@lang('job.CV-number')</th>
						  	<th>@lang('job.courseName')</th>
		                  	<th>@lang('job.handGraduation')</th>
		                  	<th>@lang('job.joinDate')</th>
		                  	<th>@lang('job.endDate')</th>
		                  	<th>@lang('job.courseGrading')</th>
		                </tr>
					@if(!empty($userCvInfo->userCoursesInfo))
					@foreach($userCvInfo->userCoursesInfo as $courses)
						<tr>
							<td>{{$userCvInfo->userJobOrderInfo->CV_Code}}</td>
					        <td>{{$courses->courseName}}</td>
					        <td>{{$courses->handGraduation}}</td>
					        <td>{{$courses->joinDate}}</td>
					        <td>{{$courses->endDate}}</td>
					        <td>{{$courses->courseGrading}}</td>
				      	</tr>
				    @endforeach  	
				    @endif  	

		              </table> 
		            </div>
		          </div>
		          <!-- end user courses Info -->


		          <!-- start user language Info -->
		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('job.user language Info')</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-bordered">

		                <tr>
		                  	<th>@lang('job.CV-number')</th>
						  	<th>@lang('job.langName')</th>
		                  	<th>@lang('job.write')</th>
		                  	<th>@lang('job.read')</th>
		                  	<th>@lang('job.speak')</th>
		                  	<th>@lang('job.printSpeed')</th>
		                  	<th>@lang('job.understandingSpeed')</th>
		                </tr>
					@if(!empty($userCvInfo->userLanguage))
					@foreach($userCvInfo->userLanguage as $language)
						<tr>
							<td>{{$userCvInfo->userJobOrderInfo->CV_Code}}</td>
					        <td>{{$language->langName}}</td>
					        <td>{{$language->write}}</td>
					        <td>{{$language->read}}</td>
					        <td>{{$language->speak}}</td>
					        <td>{{$language->printSpeed}}</td>
					        <td>{{$language->understandingSpeed}}</td>
				      	</tr>
				    @endforeach  	
				    @endif  	

		              </table> 
		            </div>
		          </div>
		          <!-- end user language Info -->



		          <!-- start user incurance Info -->
		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('job.user incurance Info')</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-bordered">

		                <tr>
		                  	<th>@lang('job.CV-number')</th>
						  	<th>@lang('job.insuranceStatus')</th>
		                  	<th>@lang('job.insuranceOffice')</th>
		                  	<th>@lang('job.insuranceNumber')</th>
		                </tr>
					@if(!empty($userCvInfo->userIncuranceInfo))
						<tr>
							<td>{{$userCvInfo->userJobOrderInfo->CV_Code}}</td>
					        <td>{{$userCvInfo->userIncuranceInfo->insuranceStatus}}</td>
					        <td>{{$userCvInfo->userIncuranceInfo->insuranceOffice}}</td>
					        <td>{{$userCvInfo->userIncuranceInfo->insuranceNumber}}</td>
				      	</tr>
				    @endif  	

		              </table> 
		            </div>
		          </div>
		          <!-- end user incurance Info -->



		          <!-- start user work Info -->
		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('job.user work Info')</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-bordered">

		                <tr>
		                  	<th>@lang('job.CV-number')</th>
						  	<th>@lang('job.companyName')</th>
		                  	<th>@lang('job.managerName')</th>
		                  	<th>@lang('job.startWork')</th>
		                  	<th>@lang('job.endWork')</th>
		                  	<th>@lang('job.salary')</th>
		                  	<th>@lang('job.missions')</th>
		                  	<th>@lang('job.position')</th>
		                  	<th>@lang('job.managerPhone')</th>
		                  	<th>@lang('job.reasonForLeaving')</th>
		                </tr>
					@if(!empty($userCvInfo->userWorkInfo))
					@foreach($userCvInfo->userWorkInfo as $work)
						<tr>
							<td>{{$userCvInfo->userJobOrderInfo->CV_Code}}</td>
					        <td>{{$work->companyName}}</td>
					        <td>{{$work->managerName}}</td>
					        <td>{{$work->startWork}}</td>
					        <td>{{$work->endWork}}</td>
					        <td>{{$work->salary}}</td>
					        <td>{{$work->missions}}</td>
					        <td>{{$work->position}}</td>
					        <td>{{$work->managerPhone}}</td>
					        <td>{{$work->reasonForLeaving}}</td>
				      	</tr>
				    @endforeach  	
				    @endif  	

		              </table> 
		            </div>
		          </div>
		          <!-- end user work Info -->



		          <!-- start user partne Info -->
		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('job.user partne Info')</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-bordered">

		                <tr>
		                  	<th>@lang('job.CV-number')</th>
						  	<th>@lang('job.partnerName')</th>
		                  	<th>@lang('job.personalCardNumber')</th>
		                  	<th>@lang('job.relativeRelation')</th>
		                  	<th>@lang('job.birthDate')</th>
		                </tr>
					@if(!empty($userCvInfo->userPartnerInfo))
					@foreach($userCvInfo->userPartnerInfo as $partne)
						<tr>
							<td>{{$userCvInfo->userJobOrderInfo->CV_Code}}</td>
					        <td>{{$partne->partnerName}}</td>
					        <td>{{$partne->personalCardNumber}}</td>
					        <td>{{$partne->relativeRelation}}</td>
					        <td>{{$partne->birthDate}}</td>
				      	</tr>
				    @endforeach  	
				    @endif  	

		              </table> 
		            </div>
		          </div>
		          <!-- end user partne Info -->



		          <!-- start user emergency_friends Info -->
		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('job.user emergency_friends Info')</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-bordered">

		                <tr>
		                  	<th>@lang('job.CV-number')</th>
						  	<th>@lang('job.friendName')</th>
		                  	<th>@lang('job.friendWork')</th>
		                  	<th>@lang('job.friendMobile')</th>
		                </tr>
					@if(!empty($userCvInfo->userEmergencyFriendsInfo))
					@foreach($userCvInfo->userEmergencyFriendsInfo as $emergency_friends)
						<tr>
							<td>{{$userCvInfo->userJobOrderInfo->CV_Code}}</td>
					        <td>{{$emergency_friends->friendName}}</td>
					        <td>{{$emergency_friends->friendWork}}</td>
					        <td>{{$emergency_friends->friendMobile}}</td>
				      	</tr>
				    @endforeach  	
				    @endif  	

		              </table> 
		            </div>
		          </div>
		          <!-- end user emergency_friends Info -->



		          <!-- start user family_company Info -->
		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('job.user family_company Info')</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-bordered">

		                <tr>
		                  	<th>@lang('job.CV-number')</th>
						  	<th>@lang('job.name')</th>
		                  	<th>@lang('job.relativeRelation')</th>
		                  	<th>@lang('job.mobile')</th>
		                </tr>
					@if(!empty($userCvInfo->userFamilyCompanyInfo))
					@foreach($userCvInfo->userFamilyCompanyInfo as $family_company)
						<tr>
							<td>{{$userCvInfo->userJobOrderInfo->CV_Code}}</td>
					        <td>{{$family_company->name}}</td>
					        <td>{{$family_company->relativeRelation}}</td>
					        <td>{{$family_company->mobile}}</td>
				      	</tr>
				    @endforeach  	
				    @endif  	

		              </table> 
		            </div>
		          </div>
		          <!-- end user family_company Info -->



		          <!-- start user job_order Info -->
		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('job.user job_order Info')</h3>
	<!-- trans here -->
		            </div>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-bordered">

		                <tr>
		                  	<th>@lang('job.CV-number')</th>
						  	<th>@lang('job.hrAction')</th>
		                  	<th>@lang('job.refuseReason')</th>
		                  	<th>@lang('job.jobRequired')</th>
		                  	<th>@lang('job.jobSuggest')</th>
		                </tr>
					@if(!empty($userCvInfo->userJobOrderInfo))
					
						<tr>
							<td>{{$userCvInfo->userJobOrderInfo->CV_Code}}</td>
					        <td>{{$userCvInfo->userJobOrderInfo->hrAction}}</td>
					        <td>{{$userCvInfo->userJobOrderInfo->refuseReason}}</td>
					        <td>
					        	@if(!empty(\App\Models\Job::find($userCvInfo->userJobOrderInfo->job_id)))
		        	{{\App\Models\Job::find($userCvInfo->userJobOrderInfo->job_id)->jobName}}
		        				@endif	
					        </td>
					        <td>
					        	@if(!empty(\App\Models\Job::find($userCvInfo->userJobOrderInfo->job_suggest_id)))
		        	{{\App\Models\Job::find($userCvInfo->userJobOrderInfo->job_suggest_id)->jobName}}
		        				@endif
					        </td>
				      	</tr>
				      	
				    @endif  	

		              </table> 
		            </div>
		          </div>
		          <!-- end user job_order Info -->
		        </div>
		      </div>
		</section>	
	</div>
@endif()





<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>User Information</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>