<div class="content-wrapper">
  <section class="content">
    <div class="row">
          <div class="col-xs-12">
              <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">@lang('admin.Add Admin')</h3>
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
              <form class="form-horizontal" action="{{url('admin/createAdmin')}}" method="post">
                <div class="box-body">
                  @csrf
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">@lang('admin.Name')</label>

                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="@lang('admin.Name')" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">@lang('admin.Email')</label>

                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="@lang('admin.Email')" required>
                    </div>
                  </div>



                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">@lang('admin.Password')</label>

                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="@lang('admin.Password')" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">@lang('admin.Confirm Password')</label>

                    <div class="col-sm-10">
                      <input type="password" name="confirmPassword" class="form-control" id="inputPassword3" placeholder="@lang('admin.Confirm Password')" required>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <input type="submit" class="btn btn-info" value="@lang('admin.Add Admin')">
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
          </div>
        </div>
  </section>
</div>