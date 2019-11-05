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
		              <h3 class="box-title">@lang('job.new jobs Orders Info')</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
	                @if(!empty($jobOrderInfo))
		              <table class="table table-hover">
		                <tr>
		                  <th>#</th>
		                  <th>@lang('job.jobName')</th>
		                  <th>@lang('job.orderCount')</th>
		                </tr>
						@foreach($jobOrderInfo as $key=>$job)
							<tr>
								<td>{{$key+1}}</td>
						        <td>
						        	<a href="{{url('admin/jobCvInfo/'.$job->id.'/new')}}">
						        		{{$job->jobName}}
						        	</a>
						        </td>
								<td>
									<a href="{{url('admin/jobCvInfo/'.$job->id.'/new')}}">
										{{count(\App\Models\JobOrder::where('job_id',$job->id)
										->where('hrAction',null)->get())}}
									</a>
								</td>

					      	</tr>
						@endforeach()
		              </table>
		              {{$jobOrderInfo->render()}}
					@endif 
		            </div>
		          </div>


		          
		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('job.old jobs Orders Info')</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
	            	@if(!empty($oldJobOrderInfo))
		              <table class="table table-hover">
		                <tr>
		                  <th>#</th>
		                  <th>@lang('job.jobName')</th>
		                  <th>@lang('job.orderCount')</th>
		                </tr>
						@foreach($oldJobOrderInfo as $key=>$oldJob)
							<tr>
								<td>{{$key+1}}</td>
						        <td>
						        	<a href="{{url('admin/jobCvInfo/'.$oldJob->id.'/old')}}">
						        		{{$oldJob->jobName}}
						        	</a>
						        </td>
								<td>
									<a href="{{url('admin/jobCvInfo/'.$oldJob->id.'/old')}}">
										{{count(\App\Models\JobOrder::where('job_id',$oldJob->id)
										->whereIn('hrAction',['suggested','accepted','refused'])->get())}}
									</a>
								</td>
					      	</tr>
						@endforeach()
		              </table>
		              {{$oldJobOrderInfo->render()}}
	              	@endif
		            </div>
		          </div>



		          
		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('job.suggested jobs Orders Info')</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
	            	@if(!empty($suggestJobOrderInfo))
		              <table class="table table-hover">
		                <tr>
		                  <th>#</th>
		                  <th>@lang('job.jobName')</th>
		                  <th>@lang('job.orderCount')</th>
		                </tr>
						@foreach($suggestJobOrderInfo as $key=>$suggestJob)
							<tr>
								<td>{{$key+1}}</td>
						        <td>
						        	<a href="{{url('admin/jobCvInfo/'.$suggestJob->id.'/suggested')}}">
						        		{{$suggestJob->jobName}}
						        	</a>
						        </td>
								<td>
									<a href="{{url('admin/jobCvInfo/'.$suggestJob->id.'/suggested')}}">
										{{count(\App\Models\JobOrder::where('job_id',$suggestJob->id)
										->where('hrAction','suggested')->get())}}
									</a>
								</td>
					      	</tr>
						@endforeach()
		              </table>
		              {{$suggestJobOrderInfo->render()}}
	              	@endif
		            </div>
		          </div>



		          <div class="box">
		            <div class="box-header">
		              <h3 class="box-title">@lang('job.refused jobs Orders Info')</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
		            @if(!empty($refusedJobOrderInfo))	
		              <table class="table table-hover">
		                <tr>
		                  <th>#</th>
		                  <th>@lang('job.jobName')</th>
		                  <th>@lang('job.orderCount')</th>
		                </tr>
						@foreach($refusedJobOrderInfo as $key=>$refusedJob)
							<tr>
								<td>{{$key+1}}</td>
						        <td>
						        	<a href="{{url('admin/jobCvInfo/'.$refusedJob->id.'/refused')}}">
						        		{{$refusedJob->jobName}}
						        	</a>
						        </td>
								<td>
									<a href="{{url('admin/jobCvInfo/'.$refusedJob->id.'/refused')}}">
										{{count(\App\Models\JobOrder::where('job_id',$refusedJob->id)
										->where('hrAction','refused')->get())}}
									</a>
								</td>
					      	</tr>
						@endforeach()
		              </table>
		              {{$refusedJobOrderInfo->render()}}
		            @endif  
		            </div>
		          </div>

		        </div>
		      </div>
		</section>	
	</div>
