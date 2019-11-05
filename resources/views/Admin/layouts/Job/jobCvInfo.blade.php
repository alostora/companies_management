@if(!empty($jobCvInfo))
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
		              <h3 class="box-title">@lang('job.jobs CV Info')</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-hover">

		                <tr>
		                  <th>#</th>
		                  <th>@lang('job.C.V')</th>
		                  <th>@lang('job.userName')</th>
		                  <th>@lang('job.Operations')</th>
		                </tr>

						@foreach($jobCvInfo as $key=>$job)
							<tr>
								<td>{{$key+1}}</td>
						        <td>
						        	<a href="{{url('admin/userCvInfo/'.$job->user_id)}}">
						        		CV{{$job->CV_Code}}
						        	</a>
						        </td>
								<td>
									<a href="{{url('admin/userCvInfo/'.$job->user_id)}}">
										{{\App\User::find($job->user_id)->name}}
									</a>
								</td>
								<td>	
				          			<a class="label label-success" href="{{url('admin/userCvInfo/'.$job->user_id)}}">
				          				viewInformations<i class="fa fa-edit"></i>
				          			</a>
					          	</td>
					      	</tr>
						@endforeach()

		              </table>
		              {{$jobCvInfo->render()}}
		              
		            </div>
		          </div>
		        </div>
		      </div>
		</section>	
	</div>
@endif()