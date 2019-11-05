<div class="box box-danger box-solid" style="width: 220px;">
	<div class="box-header with-border">
	      <h3 class="box-title">refuse</h3>
	      <div class="box-tools pull-right">
	        <button type="button" class="btn btn-box-tool" data-widget="collapse">	<i class="fa fa-minus"></i>
	        </button>
	      </div>
	  <!-- /.box-tools -->
	</div>
	<!-- /.box-header -->
	<div style="display: none;" class="box-body">
		<form action="{{url('admin/interviewAction/refused/'.$interv->interviewDate)}}" method="post" style="width: 400px;">
			@csrf
			<div  class="form-group" class="col-sm-12">
				<div class="col-sm-6">
		  			<label class="form-control label-danger">
						refuseReason
					</label>
					<input type="text" name="refuseReason" class="form-control" placeholder="refuseReason" required>

					<input type="submit" value="submit" class="form-control">
				</div>
			</div>
		</form>
	</div>
</div>