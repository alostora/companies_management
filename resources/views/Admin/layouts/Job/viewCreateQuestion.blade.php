<div class="content-wrapper">
  <section class="content">
    <div class="row">
          <div class="col-xs-12">
              <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">@lang('question.edite or create Questions')</h3>
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
              <form class="form-horizontal" action="{{url('admin/createQuestion')}}" method="post" enctype="multipart/form-data">
                <div class="box-body">

                  @csrf

                  <input type="hidden" name="id" @if(!empty($question)) value="{{$question->id}}" @endif>


                  <div class="form-group">
                    <label class="col-sm-2 control-label">@lang('question.jobName')</label>
                    <div class="col-sm-4">
                      <select name="job_id" class="form-control" required>
                            <option value="">@lang('question.choose')</option>
                        @if(!empty($question))
                          @foreach(\App\Models\Job::get() as $job)
                          @if(!empty($job) && $job->id == $question->job_id )
                            <option value="{{$job->id}}" selected>{{$job->jobName}}</option>
                          @else
                            <option value="{{$job->id}}">{{$job->jobName}}</option>
                          @endif
                        @endforeach
                        @else
                          @foreach(\App\Models\Job::get() as $job)
                            <option value="{{$job->id}}">{{$job->jobName}}</option>
                          @endforeach
                        @endif
                        
                      </select>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 control-label">@lang('question.question')</label>

                    <div class="col-sm-4">
                      <input type="text" name="question" class="form-control" required @if(!empty($question)) value="{{$question->question}}"  @else placeholder="@lang('question.question')" @endif>
                    </div>
                  </div>

                  <div class="form-group">

                    @if(!empty($question->fackAnswers))
                      @foreach($question->fackAnswers as $answer)
                        <label class="col-sm-2 control-label">@lang('question.fackAnswer')</label>

                        <div class="col-sm-4" id="addAnswer">
                          <input type="text" name="fackAnswer[]" class="form-control" value="{{$answer->fackAnswer}}" required>
                        </div>
                        <div class="form-group">
                          <span class="btn btn-info" onclick="return createAnswer();">@lang('question.add answer')</span>
                        </div>
                      @endforeach
                    @else
                      <label class="col-sm-2 control-label">@lang('question.fackAnswer')</label>

                      <div class="col-sm-4" id="addAnswer">
                        <input type="text" name="fackAnswer[]" class="form-control" placeholder="@lang('question.fackAnswer')" required>
                      </div>
                      <div>
                        <span class="btn btn-info" onclick="return createAnswer();">@lang('question.add answer')</span>
                      </div>
                    @endif
                    
                  </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <input type="submit" class="btn btn-primary" value="@lang('question.Add')">
                </div>
                
                <!-- /.box-footer -->
              </form>
            </div>
          </div>
        </div>
  </section>
</div>

<script>
  function createAnswer(){
    $("#addAnswer").append('<input type="text" name="fackAnswer[]" class="form-control" placeholder="@lang('question.fackAnswer')" required id="removeAnswer">');
  }

</script>