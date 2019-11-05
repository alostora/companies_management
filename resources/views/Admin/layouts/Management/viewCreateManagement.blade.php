<div class="content-wrapper">
  <section class="content">
    <div class="row">
          <div class="col-xs-12">
              <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">@lang('management.edite or create management')</h3>
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
              <form class="form-horizontal" action="{{url('admin/createManagement')}}" method="post" enctype="multipart/form-data">
                <div class="box-body">

                  @csrf

                  <input type="hidden" name="id" @if(!empty($management)) value="{{$management->id}}" @endif>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">@lang('management.creation type')</label>
                    <div class="col-sm-4">
                      <select name="type" class="form-control">
                        <option value="">@lang('management.choose')</option>
                        @if(!empty($management) && $management->isCategory == true)
                          <option value="category" selected>category</option>
                          <option value="management">management</option>
                        @elseif(!empty($management) && $management->isCategory != true)
                          <option value="category">category</option>
                          <option value="management" selected>management</option>
                        @else
                          <option value="category">category</option>
                          <option value="management">management</option>
                        @endif
                      </select>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">@lang('management.managementName')</label>

                    <div class="col-sm-4">
                      <input type="text" name="managementName" class="form-control" id="inputEmail3" required @if(!empty($management)) value="{{$management->managementName}}"  @else placeholder="@lang('management.managementName')" @endif>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">@lang('management.managementRule')</label>

                    <div class="col-sm-4">
                      <input type="number" name="managementRule" class="form-control" id="inputEmail3" required @if(!empty($management)) value="{{$management->managementRule}}" @else placeholder="@lang('management.managementRule')" @endif>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">@lang('management.mainManagement')</label>
                    <div class="col-sm-4">
                      <select name="mainManagement" class="form-control">
                        <option value="">@lang('management.choose')</option>
                        @foreach(\App\Models\Management::where('isCategory',false)->get() as $manage)
                          @if(!empty($management) && $manage->id == $management->mainManagement )
                            <option value="{{$manage->id}}" selected>{{$manage->managementName}}</option>
                          @else
                            <option value="{{$manage->id}}">{{$manage->managementName}}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                  </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <input type="submit" class="btn btn-info" value="@lang('management.Add')">
                </div>
                
                <!-- /.box-footer -->
              </form>
            </div>
          </div>
        </div>
  </section>
</div>