

		<div class="content-wrapper">
			<section class="content">
				<div class="row">
			        <div class="col-xs-12">
			            @if(session()->has('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
			            @endif
			            @if(session()->has('delete'))
			            	<div class="alert alert-warning">{{session('delete')}}</div>
			            @endif
			          <div class="box">
			            <div class="box-header">
			              <h3 class="box-title">results info</h3>
			            </div>
			            <!-- /.box-header -->
			            <div class="box-body table-responsive no-padding">
		              <table class="table table-hover">

		                <tr>
		                  <th>#</th>
		                  <th>user name</th>
		                  <th>generalView</th>
		                  <th>character</th>
		                  <th>trust</th>
		                  <th>english</th>
		                  <th>understanding</th>
		                  <th>qualificationWithJob</th>
		                  <th>experienceWithJob</th>
		                  <th>earnedExperienceWithJob</th>
		                  <th>expectCompletWork</th>
		                  <th>recommendForWorkHR</th>
		                  <th>recommendForWorkGM</th>
		                  <th>interview_id</th>
		                  <th>hr_id</th>
		                  <th>hrSuper_id</th>
		                  <th>hrSuperGm_id</th>
		                  <th>created_at</th>
		                </tr>
		                @if(!empty($result))
							
								<tr>
									<td>#</td>
									<td>{{\App\User::find($result->user_id)->name}}</td>
									<td>{{$result->generalView}}</td>
									<td>{{$result->character}}</td>
									<td>{{$result->trust}}</td>
									<td>{{$result->english}}</td>
									<td>{{$result->understanding}}</td>
									<td>{{$result->qualificationWithJob}}</td>
									<td>{{$result->experienceWithJob}}</td>
									<td>{{$result->earnedExperienceWithJob}}</td>
									<td>{{$result->expectCompletWork}}</td>
									<td>{{$result->recommendForWorkHR}}</td>
									<td>{{$result->recommendForWorkGM}}</td>
									<td>{{$result->interview_id}}</td>
									<td>{{$result->hr_id}}</td>
									<td>{{$result->hrSuper_id}}</td>
									<td>{{$result->hrSuperGm_id}}</td>
									<td>{{$result->created_at}}</td>
						      	</tr>
			              	
							
						@endif

		              </table>
		            </div>
			            <!-- /.box-body -->
			          </div>
			          <!-- /.box -->
			        </div>

			      </div>

			      <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i><i class="fa fa-user"></i>take action</a>

			      <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i><i class="fa fa-user"></i>take action</a>

			      <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i><i class="fa fa-user"></i>take action</a>

			</section>	

		</div>

