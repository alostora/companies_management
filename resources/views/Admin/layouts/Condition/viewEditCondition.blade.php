<div class="content-wrapper">
  <section class="content">
    <div class="row">
          <div class="col-xs-12">
              <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">@lang('conditions.Edite Or Create Cond')</h3>
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
              <form class="form-horizontal" action="{{url('admin/createCondition')}}" method="post" enctype="multipart/form-data">
                <div class="box-body">
                      @csrf
                      <input type="hidden" name="id" @if(!empty($conditions)) value="{{$conditions->id}}" @endif>
                      <div class="form-group">

                          <section class="content">
                                <div class="row">
                                  <div class="col-md-12">
                                    
                                    <div class="box">
                                      <div class="box-header">
                                        <h3 class="box-title">Bootstrap WYSIHTML5
                                          <small>Simple and fast</small>
                                        </h3>
                                        <!-- tools box -->
                                        <div class="pull-right box-tools">
                                          <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                  title="Collapse">
                                            <i class="fa fa-minus"></i></button>
                                          <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                                                  title="Remove">
                                            <i class="fa fa-times"></i></button>
                                        </div>
                                        <!-- /. tools -->
                                      </div>
                                      <!-- /.box-header -->
                                      <div class="box-body pad">
                              <textarea id="editor1" name="conditions" class="textarea" placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> @if(!empty($conditions)){!! $conditions->conditions !!}@endif</textarea>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- /.col-->
                                </div>
                                <!-- ./row -->
                          </section>

                      </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <input type="submit" class="btn btn-info" value="@lang('conditions.Add')">
                </div>
                
                <!-- /.box-footer -->
              </form>
            </div>
          </div>
        </div>
  </section>
</div>




<!-- CK Editor -->

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>