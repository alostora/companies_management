@if(!empty($admins))

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
                          <h3 class="box-title">@lang('admin.Admin Info')</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tr>
                              <th>#</th>
                              <th>@lang('admin.Name')</th>
                              <th>@lang('admin.Email')</th>
                              <th>@lang('admin.Created_at')</th>
                              <th>@lang('admin.Updated_at')</th>
                              <th>@lang('admin.Operations')</th>
                            </tr>

                                    @foreach($admins as $key=>$admin)
                                            <tr>
                                      <td>{{$key+1}}</td>
                                      <td>{{$admin->name}}</td>
                                      <td>{{$admin->email}}</td>
                                      <td>{{$admin->created_at}}</td>
                                      <td>{{$admin->updated_at}}</td>

                                      <td>	
                                            <a class="label label-success" href="{{url('admin/viewEditAdmin/'.$admin->id)}}">@lang('admin.Edite')<i class="fa fa-edit"></i></a>

                                            <a class="label label-danger" href="{{url('admin/deleteAdmin/'.$admin->id)}}" onclick="return confirm('Are you sure?');" ><i class="fa fa-trash"></i>@lang('admin.Delete')</a>

                                      </td>
                                    </tr>
                                    @endforeach()

                          </table>
                          {{$admins->render()}}
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                    </div>

                  </div>
                  <a href="{{url('admin/viewCreateAdmin')}}" class="btn btn-primary"><i class="fa fa-plus"></i><i class="fa fa-user"></i>@lang('admin.Add')</a>
            </section>	

        </div>

@endif()