<div class="box box-warning box-solid" style="width: 220px;">
    <div class="box-header with-border">
          <h3 class="box-title">delay</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse">	<i class="fa fa-minus"></i>
            </button>
          </div>
    </div>
    <div class="box-body" style="display: none;">
    	<form action="{{url('admin/delayInterview')}}" method="post" id="interviewForm" style="width: 400px;">
			@csrf
			<input type="hidden" name="interviewOldDate" value="{{$interv->interviewDate}}">
			<input type="hidden" name="hrAction" value="delay">

			<div  class="form-group" class="col-sm-12">
				<div class="col-sm-6">
		  			<label class="form-control label-warning">
						date to
					</label>

						<input type="date" name="interviewDate" class="form-control" placeholder="interviewDate" required>

						<label class="form-control label-warning">
						time to
					</label>

						<input type="time" name="interviewTime" class="form-control" placeholder="interviewTime" required>

					<input type="submit" value="submit" class="form-control">
				</div>
			</div>
		</form>
    </div>
</div>