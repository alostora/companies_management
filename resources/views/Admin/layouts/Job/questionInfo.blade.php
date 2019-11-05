

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
			              <h3 class="box-title">@lang('question.questions info')</h3>
			            </div>
			            <!-- /.box-header -->
			            <div class="box-body table-responsive no-padding">
		              <table class="table table-hover">

		                <tr>
		                  <th>#</th>
		                  <th>@lang('question.question job')</th>
		                  <th>@lang('question.question')</th>
		                  <th>@lang('question.answers')</th>
		                  <th>@lang('question.Operations')</th>
		                </tr>
		                @if(!empty($questions))
						@foreach($questions as $key=>$question)
							<tr>
								<td>{{$key+1}}</td>
						        <td>{{\App\Models\Job::find($question->job_id)->jobName}}</td>
						        <td>{{$question->question}}</td>
						        <td>
						        @if(!empty($question->fackAnswers))
							        @foreach($question->fackAnswers as $answer)
							        	@if($answer->theTrueAnswer == true)
							        		<div>
								        		<span class="label label-info" style="font-size: 13px; margin: 1px;">{{$answer->fackAnswer}}</span>
							        			<a href="{{url('admin/changeAnswerStatus/'.$answer->id.'/false')}}" class="label label-success" style="font-size: 13px; margin: 1px;"> 
							        			@lang('question.make it wrong answer')</a>
								        		<span class="label label-success" style="font-size: 13px; margin: 1px;">@lang('question.true answer')</span>
							        		</div>
							        	@elseif($answer->theTrueAnswer == false)
							        	<div>
							        		<span class="label label-info" style="font-size: 13px; margin: 1px;">{{$answer->fackAnswer}}</span>
						        			<a href="{{url('admin/changeAnswerStatus/'.$answer->id.'/true')}}" class="label label-warning" style="font-size: 13px; margin: 1px;">
						        			@lang('question.make it true answer')</a>
							        		<span class="label label-danger" style="font-size: 13px; margin: 1px;">
							        		@lang('question.error answer')</span>
						        		</div>
							        	@endif

							        	<a href="{{url('admin/changeAnswerStatus/'.$answer->id.'/delete')}}" class="label label-default" style="font-size: 13px; margin: 1px;">
							        	@lang('question.delete answer')</a>
							        @endforeach	
						        @endif
						        </td>
								<td>
									
									<a class="label label-success" href="{{url('admin/viewCreateQuestion/'.$question->id)}}">@lang('question.Edite')<i class="fa fa-edit"></i></a>

				          			<a class="label label-danger" href="{{url('admin/deleteQuestion/'.$question->id)}}" onclick="return confirm('Are you sure?');" ><i class="fa fa-trash"></i>@lang('question.Delete')</a>

								</td>
					      	</tr>
		              	{{$questions->render()}}
						@endforeach()
						@endif

		              </table>
		            </div>
			            <!-- /.box-body -->
			          </div>
			          <!-- /.box -->
			        </div>

			      </div>
			      <a href="{{url('admin/viewCreateQuestion')}}" class="btn btn-primary"><i class="fa fa-plus"></i><i class="fa fa-user"></i>@lang('question.Add')</a>
			</section>	

		</div>

