@if(!empty($regilions))

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
			              <h3 class="box-title">@lang('religion.religionInfo')</h3>
			            </div>
			            <!-- /.box-header -->
			            <div class="box-body table-responsive no-padding">
			              <table class="table table-hover">
			                <tr>
			                  <th>#</th>
			                  <th>اسم الديانة</th>
			                  <th>@lang('religion.Created_at')</th>
			                  <th>@lang('religion.Updated_at')</th>
			                  <th>@lang('religion.Operations')</th>
			                </tr>

						@foreach($regilions as $key=>$reg)
							<tr>
					          <td>{{$key+1}}</td>
					          <td>{{$reg->religionName}}</td>
					          <td>{{$reg->created_at}}</td>
					          <td>{{$reg->updated_at}}</td>

					          <td>	
				          		<a class="label label-success" href="{{url('admin/viewEditReligion/'.$reg->id)}}">@lang('religion.Edite')<i class="fa fa-edit"></i></a>
				          	
			          	 		<a class="label label-danger" href="{{url('admin/deleteRegilion/'.$reg->id)}}" onclick="return confirm('Are you sure?');" ><i class="fa fa-trash"></i>@lang('religion.Delete')</a>
					          	
					          </td>
					      	</tr>
						@endforeach()

			              </table>
			              {{$regilions->render()}}
			            </div>
			            <!-- /.box-body -->
			          </div>
			          <!-- /.box -->
			        </div>

			      </div>
			      <a href="{{url('admin/viewEditReligion')}}" class="btn btn-primary"><i class="fa fa-plus"></i><i class="fa fa-user"></i>@lang('religion.Add')</a>
			</section>	

		</div>

@endif()