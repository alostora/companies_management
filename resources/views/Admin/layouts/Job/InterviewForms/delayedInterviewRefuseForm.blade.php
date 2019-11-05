<div class="box box-danger box-solid" style="width: 220px;">
	<div class="box-header with-border">
	      <h3 class="box-title">refuse</h3>
	      <div class="box-tools pull-right">
	        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
	        </button>
	      </div>
	  <!-- /.box-tools -->
	</div>
	<!-- /.box-header -->
	<div style="display: none;" class="box-body">
		<form action="{{url('admin/refuseDelayInterview')}}" method="post" id="anotherEmployerInterviewForm" style="width: 400px;">
			@csrf
			<input type="hidden" name="interviewDelayedDate" value="{{$delayedInterview->delayedInterview->interviewDate}}">
			<input type="hidden" name="hrAction" value="refused">

			<div  class="form-group" class="col-sm-12">
				<div class="col-sm-6">
		  			<label class="form-control label-danger">
						<i class="fa fa-calender"></i>
						original interview date
					</label>

						<input type="date" name="interviewDate" class="form-control" 
						value="{{$delayedInterview->interviewDate}}" required>

						<label class="form-control label-danger">
						<i class="fa fa-calender"></i>
						original interview time
					</label>

						<input type="time" name="interviewTime" class="form-control"
						value="{{$delayedInterview->interviewTime}}" required>

						<label class="form-control label-danger">
						<i class="fa fa-calender"></i>
						choose another employer
					</label>
					<select class="form-control" name="hr_employer" required>
						@if(!empty(\App\User::get()))
							<option value="">choose employer</option>
							@foreach(\App\User::get() as $user)
								<option value="{{$user->id}}">{{$user->name}}</option>
							@endforeach
						@endif
					</select>

					<input type="submit" value="submit" class="form-control btn-danger">
				</div>
			</div>
		</form>
	</div>
</div>