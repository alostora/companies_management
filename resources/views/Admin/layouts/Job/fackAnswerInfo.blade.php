@if(!empty($answers))
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
		              <h3 class="box-title">jobs CV Info</h3>
		            </div>
		            <div class="box-body table-responsive no-padding">
		              <table class="table table-hover">

		                <tr>
		                  <th>#</th>
		                  <th>fackAnswer</th>
		                  <th>theTrueAnswer</th>
		                  <th>question_id</th>
		                </tr>

						@foreach($answers as $key=>$answer)
							<tr>
								<td>{{$key+1}}</td>
						        <td>{{$answer->fackAnswer}}</td>
						        <td>
						        	@if($answer->theTrueAnswer == false or $answer->theTrueAnswer == null)
						        		<a href="{{url('admin/changeAnswerStatus/'.$answer->id.'/true')}}" class="btn btn-warning"> make it true answer</a>
						        	@elseif($answer->theTrueAnswer == true)
						        		<a href="{{url('admin/changeAnswerStatus/'.$answer->id.'/false')}}" class="btn btn-success"> make it wrong answer</a>	
						        	@endif
						        </td>
						        <td>{{\App\Models\Question::find($answer->question_id)->question}}</td>
						@endforeach()

		              </table>
		              {{$answers->render()}}
		              
		            </div>
		          </div>
		        </div>
		      </div>
		</section>	
	</div>
@endif()