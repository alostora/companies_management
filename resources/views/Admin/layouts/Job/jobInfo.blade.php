@if(!empty($managements))

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
			              <h3 class="box-title">@lang('job.jobs Info')</h3>
			            </div>
			            <!-- /.box-header -->
			            <div class="box-body table-responsive no-padding">
			              <table class="table table-hover">
			                <tr>
			                  <th>#</th>
			                  <!-- personalInfo -->
			                  <th>@lang('job.jobName')</th>
			                  <th>@lang('job.jobCode')</th>
			                  <th>@lang('job.jobRequirement')</th>
			                  <th>@lang('job.managementName')</th>
			                  <th>@lang('job.Created_at')</th>
			                  <th>@lang('job.Updated_at')</th>
			                  <th>@lang('job.Operations')</th>
			                </tr>

						@foreach($managements as $key=>$manage)
						@if(!empty($manage->jobInfo))
							@foreach($manage->jobInfo as $job)
							<tr>
								<!-- personalInfo -->
								<td>{{$key+1}}</td>
						        <td>{{$job->jobName}}</td>
						        <td>{{$job->code}}</td>
						        <td>{{$job->jobRequirement}}</td>
						        <td>
						          	@if($job->manage_id)
						          	{{\App\Models\Management::where('id',$job->manage_id)->first()->managementName}}
						          	@endif
						      	</td>
						        <td>{{$job->created_at}}</td>
						        <td>{{$job->updated_at}}</td>

						         <td>	
				          			<a class="label label-success" href="{{url('admin/viewCreateJob/'.$job->id)}}">
				          				@lang('job.Edite')<i class="fa fa-edit"></i></a>
					          	
				          	 		<a class="label label-danger" href="{{url('admin/deleteJob/'.$job->id)}}" onclick="return confirm('Are you sure?');" ><i class="fa fa-trash"></i>@lang('job.Delete')</a>

					          	</td>
					      	</tr>
					      	@endforeach
					    @endif  	
						@endforeach()

			              </table>
			              {{$managements->render()}}
			            </div>
			            <!-- /.box-body -->
			          </div>
			          <!-- /.box -->
			        </div>

			      </div>
			      <a href="{{url('admin/viewCreateJob')}}" class="btn btn-primary"><i class="fa fa-plus"></i><i class="fa fa-user"></i>@lang('job.Add')</a>
			</section>	

		</div>

@endif()