@if(!empty($users))

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
			              <h3 class="box-title">@lang('users.Users Info')</h3>
			            </div>
			            <!-- /.box-header -->
			            <div class="box-body table-responsive no-padding">
			              <table class="table table-hover">
			                <tr>
			                  <th>#</th>
			                  <!-- personalInfo -->
			                  <th>@lang('users.Name')</th>
			                  <th>@lang('users.Email')</th>
			                  <th>@lang('users.Package')</th>
			                  <th>@lang('users.Created_at')</th>
			                  <th>@lang('users.Updated_at')</th>
			                  <th>@lang('users.Operations')</th>
			                </tr>

						@foreach($users as $key=>$user)
							<tr>
								  <!-- personalInfo -->
								  <td>{{$key+1}}</td>
						          <td>{{$user->name}}</td>
						          <td>{{$user->email}}</td>
						          <td>{{$user->package_id}}</td>
						          <td>{{$user->created_at}}</td>
						          <td>{{$user->updated_at}}</td>

						          <td>	
					          		<a class="label label-success" href="{{url('admin/viewEditUser/'.$user->id)}}">@lang('users.Edite')<i class="fa fa-edit"></i></a>
					          	
				          	 		<a class="label label-danger" href="{{url('admin/deleteUser/'.$user->id)}}" onclick="return confirm('Are you sure?');" ><i class="fa fa-trash"></i>@lang('users.Delete')</a>

						          </td>
					      	</tr>
						@endforeach()

			              </table>
			              {{$users->render()}}
			            </div>
			            <!-- /.box-body -->
			          </div>
			          <!-- /.box -->
			        </div>

			      </div>
			      <a href="{{url('admin/viewCreateUser')}}" class="btn btn-primary"><i class="fa fa-plus"></i><i class="fa fa-user"></i>@lang('users.Add New User')</a>
			</section>	

		</div>

@endif()