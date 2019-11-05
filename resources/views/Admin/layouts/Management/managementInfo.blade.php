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
			              <h3 class="box-title">@lang('management.managementsInfo')</h3>
			            </div>
			            <!-- /.box-header -->
			            <div class="box-body table-responsive no-padding">
			              <table class="table table-hover">
			                <tr>
			                  <th>#</th>
			                  <!-- personalInfo -->
			                  <th>@lang('management.managementName')</th>
			                  <th>@lang('management.managementCode')</th>
			                  <th>@lang('management.managementRule')</th>
			                  <th>@lang('management.mainManagement')</th>
			                  <th>@lang('management.type')</th>
			                  <th>@lang('management.managementJobs')</th>
			                  <th>@lang('management.Created_at')</th>
			                  <th>@lang('management.Updated_at')</th>
			                  <th>@lang('management.Operations')</th>
			                </tr>

						@foreach($managements as $key=>$manage)
							<tr>
								  <!-- personalInfo -->
								  <td>{{$key+1}}</td>
						          <td>{{$manage->managementName}}</td>
						          <td>{{$manage->managementCode}}</td>
						          <td>{{$manage->managementRule}}</td>
						          <td>
						          	@if(!empty($manage->mainManagement))
						          	{{\App\Models\Management::where('id',$manage->mainManagement)->first()->managementName}}
						          	@endif
						      	  </td>
						      	  <td>
						      	  	@if($manage->isCategory == true)
						      	  	<label class="label label-primary">@lang('management.category')</label>
						      	  	@else
						      	  	<label class="label label-success">@lang('management.management')</label>
						      	  	@endif
						      	  </td>
						          <td>
						          	@if(count($manage->jobInfo))
						          		<select>
						          			@foreach($manage->jobInfo as $job)
						          				<option>{{$job->jobName}}</option>
						          			@endforeach
						          		</select>
						          	@endif
						          </td>
						          <td>{{$manage->created_at}}</td>
						          <td>{{$manage->updated_at}}</td>

						          <td>	
					          		<a class="label label-success" href="{{url('admin/viewCreateManagement/'.$manage->id)}}">@lang('management.Edite')<i class="fa fa-edit"></i></a>
					          	
				          	 		<a class="label label-danger" href="{{url('admin/deleteManagement/'.$manage->id)}}" onclick="return confirm('Are you sure?');" ><i class="fa fa-trash"></i>@lang('management.Delete')</a>

						          </td>
					      	</tr>
						@endforeach()

			              </table>
			              {{$managements->render()}}
			            </div>
			            <!-- /.box-body -->
			          </div>
			          <!-- /.box -->
			        </div>

			      </div>
			      <a href="{{url('admin/viewCreateManagement')}}" class="btn btn-primary"><i class="fa fa-plus"></i><i class="fa fa-user"></i>@lang('management.Add')</a>
			</section>	

		</div>

@endif()