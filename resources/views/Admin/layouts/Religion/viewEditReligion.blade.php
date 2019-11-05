<div class="content-wrapper">
  <section class="content">
    <div class="row">
          <div class="col-xs-12">
              <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">@lang('religion.Edite Or Create religion')</h3>
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
              <form class="form-horizontal" action="{{url('admin/createRegilion')}}" method="post" enctype="multipart/form-data">
                <div class="box-body">

                  @csrf

                  <input type="hidden" name="id" @if(!empty($regilions)) value="{{$regilions->id}}" @endif>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">@lang('religion.religionName')</label>

                    <div class="col-sm-4">
                      <input type="text" name="religionName" class="form-control" id="inputEmail3" required @if(!empty($regilions)) value="{{$regilions->religionName}}"  @else placeholder="@lang('religion.religionName')" @endif>
                    </div>
                  </div>


                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <input type="submit" class="btn btn-info" value="@lang('religion.Add')">
                </div>
                
                <!-- /.box-footer -->
              </form>
            </div>
          </div>
        </div>
  </section>
</div>