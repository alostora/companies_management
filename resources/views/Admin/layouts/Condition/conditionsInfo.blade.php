@if(!empty($conditions))

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
			              <h3 class="box-title">@lang('conditions.conditionsInfo')</h3>
			            </div>
			            <!-- /.box-header -->
			            <div class="box-body table-responsive no-padding">
			              <table class="table table-hover">
			                <tr>
			                  <th>#</th>
			                  <th>@lang('conditions.conditions')</th>
			                  <th>@lang('conditions.Created_at')</th>
			                  <th>@lang('conditions.Updated_at')</th>
			                  <th>@lang('conditions.Operations')</th>
			                </tr>

						@foreach($conditions as $key=>$cond)
							<tr>
					          <td>{{$key+1}}</td>
					          <td>{!! $cond->conditions !!}</td>
					          <td>{{$cond->created_at}}</td>
					          <td>{{$cond->updated_at}}</td>

					          <td>	
				          		<a class="label label-success" href="{{url('admin/viewEditCondition/'.$cond->id)}}">@lang('conditions.Edite')<i class="fa fa-edit"></i></a>
				          	
			          	 		<a class="label label-danger" href="{{url('admin/deleteCondition/'.$cond->id)}}" onclick="return confirm('Are you sure?');" ><i class="fa fa-trash"></i>
			          	 		@lang('conditions.Delete')</a>
					          </td>
					      	</tr>
						@endforeach()

			              </table>
			              {{$conditions->render()}}
			            </div>
			            <!-- /.box-body -->
			          </div>
			          <!-- /.box -->
			        </div>

			      </div>
			      @if(empty($cond->id))
			      <a href="{{url('admin/viewEditCondition')}}" class="btn btn-primary"><i class="fa fa-plus"></i><i class="fa fa-user"></i>@lang('conditions.Add')</a>
			      @else
			      <a class="btn btn-primary" href="{{url('admin/viewEditCondition/'.$cond->id)}}">@lang('conditions.Edite') <i class="fa fa-edit"></i></a>
			      @endif
			</section>	

		</div>

@endif()