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
		              <h3 class="box-title">jobs interview Info</h3>
		            </div>
		            
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-hover">

		                <tr>
		                  <th>#</th>
		                  <th>interviewDate</th>
		                  <th>interviewTime</th>
		                  <th>hr specialist Action</th>
		                  <th>hr_employer</th>
		                  <th>user_employer</th>
		                  <th>interview_job</th>
		                  <th>operations</th>
		                </tr>

						@foreach($interviews as $key=>$interv)
							<tr>
								<td>{{$key+1}}</td>
						        <td>{{date("D /",strtotime($interv->interviewDate))}} {{$interv->interviewDate}}</td>
						        <td>{{$interv->interviewTime}}</td>
						        <td>
						        	@if($interv->hrAction == "accepted")
						        		<span class="label label-success">
						        			<i class="fa fa-check"></i>{{$interv->hrAction}}
						        		</span>
						        	@endif
						        </td>
						        <td>{{\App\User::find($interv->hr_employer)->name}}</td>
						        <td>{{\App\User::find($interv->user_employer)->name}}</td>
						        <td>{{\App\Models\Job::find($interv->interview_job)->jobName}}</td>
								<td>
	@if(!count(\App\Models\PersonalInterviewAnswer::where('user_id',$interv->user_employer)->get()))
		<a class="label label-info" href="{{url('admin/startTest/'.$interv->user_employer.'/'.$interv->interview_job)}}">
				Start Test<i class="fa fa-check"></i>
		</a>
	@else
		<a class="label label-success" href="{{url('admin/viewResult/'.$interv->user_employer)}}">
			View Result<i class="fa fa-check"></i>
		</a>
	@endif
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