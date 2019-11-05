@include('Admin/layouts/Job/userCvInfo')


@if(!empty($userCvInfo))
<div class="content-wrapper">
	<section class="content">
		<div class="row">
	        <div class="col-xs-12" style="text-align: center;">

	        	<h3 style="color: red;">----Interview Questions----</h3>
	        	<form class="form-horizontal" action="{{url('admin/userInterviewAnswer')}}" method="post">
	        		<div class="box-body">
		        		@csrf
		        		<input type="hidden" name="user_id" value="{{$userCvInfo->id}}">
		        		<input type="hidden" name="job_id" value="{{$userCvInfo->userInterViewEmployer->interview_job}}">


		        			<div class="form-group">
		                    	<label class="col-sm-2 control-label">generalView</label>
			                    <div class="col-sm-4">
			                      <select name="generalView" class="form-control">
			                        <option value="Excellent">Excellent</option>
			                        <option value="Good">Good</option>
			                        <option value="Medium">Medium</option>
			                        <option value="Poor">Poor</option>
			                      </select>
			                    </div>
		                  	</div>

		                  	<div class="form-group">
		                    	<label class="col-sm-2 control-label">character</label>
			                    <div class="col-sm-4">
			                      <select name="character" class="form-control">
			                        <option value="Excellent">Excellent</option>
			                        <option value="Good">Good</option>
			                        <option value="Medium">Medium</option>
			                        <option value="Poor">Poor</option>
			                      </select>
			                    </div>
		                  	</div>

		                  	<div class="form-group">
		                    	<label class="col-sm-2 control-label">trust</label>
			                    <div class="col-sm-4">
			                      <select name="trust" class="form-control">
			                        <option value="Excellent">Excellent</option>
			                        <option value="Good">Good</option>
			                        <option value="Medium">Medium</option>
			                        <option value="Poor">Poor</option>
			                      </select>
			                    </div>
		                  	</div>

		                  	<div class="form-group">
		                    	<label class="col-sm-2 control-label">english</label>
			                    <div class="col-sm-4">
			                      <select name="english" class="form-control">
			                        <option value="Excellent">Excellent</option>
			                        <option value="Good">Good</option>
			                        <option value="Medium">Medium</option>
			                        <option value="Poor">Poor</option>
			                      </select>
			                    </div>
		                  	</div>

		                  	<div class="form-group">
		                    	<label class="col-sm-2 control-label">understanding</label>
			                    <div class="col-sm-4">
			                      <select name="understanding" class="form-control">
			                        <option value="Excellent">Excellent</option>
			                        <option value="Good">Good</option>
			                        <option value="Medium">Medium</option>
			                        <option value="Poor">Poor</option>
			                      </select>
			                    </div>
		                  	</div>


		                  	<div class="form-group">
		                    	<label class="col-sm-2 control-label">qualificationWithJob</label>
			                    <div class="col-sm-4">
			                      <select name="qualificationWithJob" class="form-control">
			                        <option value="Excellent">Excellent</option>
			                        <option value="Good">Good</option>
			                        <option value="Medium">Medium</option>
			                        <option value="Poor">Poor</option>
			                      </select>
			                    </div>
		                  	</div>


		                  	<div class="form-group">
		                    	<label class="col-sm-2 control-label">experienceWithJob</label>
			                    <div class="col-sm-4">
			                      <select name="experienceWithJob" class="form-control">
			                        <option value="Excellent">Excellent</option>
			                        <option value="Good">Good</option>
			                        <option value="Medium">Medium</option>
			                        <option value="Poor">Poor</option>
			                      </select>
			                    </div>
		                  	</div>


		                  	<div class="form-group">
		                    	<label class="col-sm-2 control-label">earnedExperienceWithJob</label>
			                    <div class="col-sm-4">
			                      <select name="earnedExperienceWithJob" class="form-control">
			                        <option value="Excellent">Excellent</option>
			                        <option value="Good">Good</option>
			                        <option value="Medium">Medium</option>
			                        <option value="Poor">Poor</option>
			                      </select>
			                    </div>
		                  	</div>


		                  	<div class="form-group">
		                    	<label class="col-sm-2 control-label">expectCompletWork</label>
			                    <div class="col-sm-4">
			                      <select name="expectCompletWork" class="form-control">
			                        <option value="Yes">Yes</option>
			                        <option value="No">No</option>
			                      </select>
			                    </div>
		                  	</div>


		                  	<div class="form-group">
		                    	<label class="col-sm-2 control-label">recommendForWorkHR</label>
			                    <div class="col-sm-4">
			                      <select name="recommendForWorkHR" class="form-control">
			                        <option value="Yes">Yes</option>
			                        <option value="No">No</option>
			                      </select>
			                    </div>
		                  	</div>


		                  	<div class="form-group">
		                    	<label class="col-sm-2 control-label">recommendForWorkGM</label>
			                    <div class="col-sm-4">
			                      <select name="recommendForWorkGM" class="form-control">
			                        <option value="Yes">Yes</option>
			                        <option value="No">No</option>
			                      </select>
			                    </div>
		                  	</div>


		        		<input type="submit" value="send answers">
	        		</div>
	        	</form>


	        </div>	
	    </div>    		
	</section>        	
</div>
@endif