<div class="content-wrapper">
  <section class="content">
    <div class="row">
          <div class="col-xs-12">
              <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">@lang('job.edite or create job')</h3>
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
              <form class="form-horizontal" action="{{url('admin/createJob')}}" method="post" enctype="multipart/form-data">
                <div class="box-body">

                  @csrf

                  <input type="hidden" name="id" @if(!empty($job)) value="{{$job->id}}" @endif>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">@lang('job.jobName')</label>

                    <div class="col-sm-4">
                      <input type="text" name="jobName" class="form-control" id="inputEmail3" required @if(!empty($job)) value="{{$job->jobName}}"  @else placeholder="@lang('job.jobName')" @endif>
                    </div>
                  </div>



                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">@lang('job.jobRequirement')</label>

                    <div class="col-sm-4">
                      <input type="text" name="jobRequirement" class="form-control" id="inputEmail3" required @if(!empty($job)) value="{{$job->jobRequirement}}"  @else placeholder="@lang('job.jobRequirement')" @endif>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">@lang('job.managementName')</label>
                    <div class="col-sm-4">
                      <select name="manage_id" class="form-control">
                            <option value="">@lang('job.choose')</option>
                        @foreach(\App\Models\Management::where('isCategory','!=',true)->get() as $manage)
                          @if(!empty($job) && $job->manage_id == $manage->id )
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
                  <input type="submit" class="btn btn-info" value="@lang('job.Add')">
                </div>
                
                <!-- /.box-footer -->
              </form>
            </div>
          </div>
        </div>
  </section>
</div>
