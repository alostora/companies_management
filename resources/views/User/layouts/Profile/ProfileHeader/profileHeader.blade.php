<div class="bg" style="background-image: url({{url('dashboard/images/cover.jpg')}})">
	<div class="py-5 text-center" style="height: 200px;"></div>
	<div style="text-align: center;background-color: #1ac6ff;border-radius: 10px;opacity: 0.77; height: 100px; padding-top: 10px;text-align: center;">
	  <div class="container-fluid">
	  	<div style="font-size: 35px; font-weight: bold; color: white;">{{$user->name}}</div>
	    	<div style="display: inline-flex;">
	    		<p style="margin: 5px 120px 0px 120px; font-size: 25px; color: white;">
	    			@if(!empty($user->userJobOrderInfo))
		    			@if(!empty(\App\Models\Job::find($user->userJobOrderInfo->job_id)))
		              		{{\App\Models\Job::find($user->userJobOrderInfo->job_id)->jobName}}
		              	@endif
		            @else
		              	still under test
	              	@endif
	    		</p>
		    	<p style="margin: 5px 0px 0px 0px; font-size: 25px; color: white;">
		    		@if(!empty($user->userJobOrderInfo))
				    	@if(!empty(\App\Models\Job::find($user->userJobOrderInfo->job_id)))
		              		{{\App\Models\Management::find(\App\Models\Job::find($user->userJobOrderInfo->job_id)->first()->manage_id)->managementName}}
		              	@endif
		            @else
			    		still under test jobNumber
	              	@endif
		    	</p>
		    	<p style="margin: 5px 120px 0px 120px; font-size: 25px; color: white;">
		    		still under test
		    	</p>
	    	</div>
	  </div>
	</div>
	<nav class="navbar navbar-default" style="text-align: center;background-color: #334d4d">
	  <div class="container-fluid">
	  	
	  	<span class="btn" style=" color:#1ac6ff;font-size: 50px; margin: 5px 150px 0px 150px;"><i class="fa fa-user-circle"></i><div style="font-size:20px ">الملف الشخصي</div></span>

	  	<span class="btn" style="color:#1ac6ff ;font-size: 50px; margin: 5px 150px 0px 150px;"><i class="fa fa-users"></i><div style="font-size:20px ">موظفيني</div></span>

	  </div>
	</nav>
</div>