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
		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('interview.delayed interview Info')</h3>
		            </div>
		            <br>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-hover">

		                <tr>
		                  <th>#</th>
		                  <th>@lang('interview.interviewCurrentDate')</th>
		                  <th>@lang('interview.interviewCurrentTime')</th>
		                  <th>@lang('interview.hrAction')</th>
		                  <th>@lang('interview.hr_employer')</th>
		                  <th>@lang('interview.user_employer')</th>
		                  <th>@lang('interview.interview_job')</th>
		                  <th>@lang('interview.delayedDateTo')</th>
		                  <th>@lang('interview.delayedTimeTo')</th>
		                  <th>@lang('interview.Operations')</th>
		                </tr>
					@if(!empty($delayedInterviews))
						@foreach($delayedInterviews as $key=>$delayedInterview)
						<tr>
							<td>{{$key+1}}</td>	
							<td>{{date("D /",strtotime($delayedInterview->interviewDate))}}
								{{$delayedInterview->interviewDate}}
							</td>
							<td>{{$delayedInterview->interviewTime}}</td>
							<td>
			        			@if(!empty($delayedInterview->delayedInterview->hrAction))
				        			<span class="label label-default"><i class="fa fa-info"></i>
				        				{{$delayedInterview->delayedInterview->hrAction}}
				        			</span>
			        			@else
				        			<span class="label label-warning"><i class="fa fa-info"></i>
				        				@lang('interview.pending')
				        			</span>
			        			@endif	
							</td>
							<td>{{$delayedInterview->hr_employer}}</td>
							<td>{{$delayedInterview->user_employer}}</td>
							<td>{{$delayedInterview->interview_job}}</td>
							<td>{{$delayedInterview->delayedInterview->interviewDate}}</td>
							<td>{{$delayedInterview->delayedInterview->interviewTime}}</td>
							<td>
							@if($delayedInterview->delayedInterview->hrAction == null)
					
					  	 		<a class="btn btn-success" href="{{url('admin/delayedInterviewAccepted/'.$delayedInterview->delayedInterview->interviewDate)}}">
					  	 			<i class="fa fa-check"></i>  @lang('interview.accept')
					  	 		</a>

					  	 		<!-- <a class="col-sm-10 btn btn-danger" href="#" onclick="return anotherEmployerInterviewFormm()">
					  	 			<i class="fa fa-close"></i>  refuse and select employer
					  	 		</a> -->

					  	 		@include('Admin/layouts/Job/InterviewForms/delayedInterviewRefuseForm')
								
							@endif		
							</td>
				      	</tr>
				      	@endforeach	
					@endif()
					
		              </table>
					
					{{$delayedInterviews->render()}}
		              
		            </div>
		          </div>
		        </div>
		      </div>
		</section>	
	</div>