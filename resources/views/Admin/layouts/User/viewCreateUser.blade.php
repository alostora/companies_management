<div class="content-wrapper">
  <section class="content">
    <div class="row">
          <div class="col-xs-12">
              <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">@lang('users.Add New User')</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              @if(count($errors))
                @foreach($errors->all() as $error)
                <div class="col-sm-12">
                  <div class="alert alert-danger">{{$error}}</div>
                </div>
                @endforeach
              @endif

              @if(session()->has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
              @endif
              <form class="form-horizontal" action="{{url('admin/createUser')}}" method="post" enctype="multipart/form-data">
                <div class="box-body">

                  @csrf
                  <!-- personalInfo -->
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">@lang('users.Name')</label>

                    <div class="col-sm-8">
                      <input type="text" name="name" class="form-control" id="inputEmail3" required placeholder="@lang('users.Name')">
                    </div>
                  </div>



                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">@lang('users.Email')</label>

                    <div class="col-sm-8">
                      <input type="email" name="email" class="form-control" id="inputEmail3" required placeholder="@lang('users.Email')">
                    </div>
                  </div>




                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">@lang('users.Password')</label>

                    <div class="col-sm-8">
                      <input type="password" name="password" class="form-control" id="inputEmail3" required placeholder="@lang('users.Password')">
                    </div>
                  </div>



                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">@lang('users.Confirm Password')</label>

                    <div class="col-sm-8">
                      <input type="password" name="confirmPassword" class="form-control" id="inputEmail3" required placeholder="@lang('users.Confirm Password')">
                    </div>
                  </div>


                  
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <input type="submit" class="btn btn-info" value="@lang('users.Add')">
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
          </div>
        </div>
  </section>
</div>