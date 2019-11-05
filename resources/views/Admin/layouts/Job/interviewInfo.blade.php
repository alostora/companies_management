@if(!empty($interviews))
	<div class="content-wrapper">
		<section class="content">
			<div class="row">
		        <div class="col-xs-12">
		            @if(session()->has('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
		            @endif
		            @if(session()->has('delete'))
		            	<div class="alert alert-warning">{{session('delete')}}</div>
		            @endif
		             @if(count($errors))
				      	@foreach($errors->all() as $error)
				        	<div class="alert alert-danger">{{$error}}</div>
				      	@endforeach
				    @endif
		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('interview.jobs interview Info')</h3>
		            </div>
		            <center>
		            	<a href="{{url('admin/interviewInfo')}}" class="btn btn-info">
		            		@lang('interview.all interviews')
		            	</a>
		            	<a href="{{url('admin/interviewInfo/accepted')}}" class="btn btn-success">
		            		@lang('interview.accepted interviews')
		            	</a>
		            	<a href="{{url('admin/interviewInfo/delay')}}" class="btn btn-warning">
		            		@lang('interview.pending interviews')
		            	</a>
		            	<a href="{{url('admin/interviewInfo/refused')}}" class="btn btn-danger">
		            		@lang('interview.refused interviews')
		            	</a>
		            	<div class="container">
		            		<div class="btn btn-success">
		            			<div class="box-body">
		            				<h5>@lang('interview.search with date')<i class="fa fa-search"></i></h5>
		            				<form class="form form-group" action="{{url('admin/interviewInfoWithDate')}}" method="post">
					            		@csrf
					            		<input type="date" name="interviewDate" class="form-control" required>
					            		<input type="submit" value="@lang('interview.submit')" class="btn btn-primary form-control">	
					            	</form>

		            			</div>
		            		</div>
		            	</div>
		            </center>
		            <br>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-hover">

		                <tr>
		                  <th>#</th>
		                  <th>@lang('interview.interviewDate')</th>
		                  <th>@lang('interview.interviewTime')</th>
		                  <th>@lang('interview.hrAction')</th>
		                  <th>@lang('interview.hr_employer')</th>
		                  <th>@lang('interview.user_employer')</th>
		                  <th>@lang('interview.interview_job')</th>
		                  <th>@lang('interview.refuseReason')</th>
		                  <th>@lang('interview.Operations')</th>
		                </tr>

						@foreach($interviews as $key=>$interv)
							<tr>
								<td>{{$key+1}}</td>
						        <td>{{date("D /",strtotime($interv->interviewDate))}} {{$interv->interviewDate}}</td>
						        <td>{{$interv->interviewTime}}</td>
						        <td>
						        	@if($interv->hrAction == "accepted")
						        		<span class="label label-success"><i class="fa fa-check"></i>{{$interv->hrAction}}</span>
						        	@elseif($interv->hrAction == "refused")
						        		<span class="label label-danger"><i class="fa fa-close"></i>{{$interv->hrAction}}</span>
						        	@elseif($interv->hrAction == "delay")
						        		<span class="label label-warning"><i class="fa fa-info"></i>{{$interv->hrAction}}</span>
						        	@else
						        		<span class="label label-default"></i>@lang('interview.no action token')</span>
						        	@endif
						        </td>
						        <td>{{\App\User::find($interv->hr_employer)->name}}</td>
						        <td>{{\App\User::find($interv->user_employer)->name}}</td>
						        <td>{{\App\Models\Job::find($interv->interview_job)->jobName}}</td>
						        <td>{{$interv->refuseReason}}</td>
								<td>
								@if($interv->hrAction != "delay")	

				          			<a class="btn btn-success btn-lg" href="{{url('admin/interviewAction/accepted/'.$interv->interviewDate)}}">
				          				<i class="fa fa-check"></i>@lang('interview.accept')
				          			</a>
	          		@include('Admin/layouts/Job/InterviewForms/mainRefuseForm')	
				          			
				          			@if(!count(\App\Models\PersonalInterviewAnswer::where('user_id',$interv->user_employer)->get()))
										<a class="btn btn-info btn-lg" href="{{url('admin/startTest/'.$interv->user_employer.'/'.$interv->interview_job)}}">
												<i class="fa fa-check"></i>@lang('interview.Start Test')
										</a>
									@else
										<a class="btn btn-primary btn-lg" href="{{url('admin/viewResult/'.$interv->user_employer)}}">
											@lang('interview.View Result')<i class="fa fa-check"></i>
										</a>
								@endif
				          		
				          		@elseif($interv->hrAction == "delay")
					          			<a class="btn btn-warning btn-lg" href="{{url('admin/delayedInterViewActions/'.$interv->interviewDate)}}">
						          				@lang('interview.go to Interview datails') <i class="fa fa-link"></i>
					          			</a>
					          			<br>	
					          			<br>	
				          		@endif	
					@include('Admin/layouts/Job/InterviewForms/mainDelayForm')

					          	</td>
					      	</tr>
						@endforeach()

		              </table>
		              {{$interviews->render()}}
		              
		            </div>
		          </div>
		        </div>
		      </div>
		</section>	
	</div>
@endif()