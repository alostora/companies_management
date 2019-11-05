<div id="holdersite">
            <div class="infopage"><i class="fa fa-gear"></i> نموذج طلب وظيفى</div>
            <br>
            <form action="{{url('confirmConditionAndChooseJobe')}}" method="post" >
                @csrf

                @if(count($errors))
                @foreach($errors->all() as $error)
                  <div class="errormessage">{{$error}}</div>
                @endforeach
                @endif
                @if(session()->has('success'))
                    <div class="sucssesmessage">{{session('success')}}</div>
                @endif
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                <table style="width: max-content;text-align: right;">
                    <tbody>
                        <tr>
                            <td class="tdtext">
                                الوظيفة المتقدم عليها : 
                            </td>
                            <td class="tdtext">
                                <select type="text" name="job_id" class="selectcond" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')" onchange="return sendRequest(this.value);">
		                      		<option value="">اختر وظيفة..</option>
					                @if(!empty(\App\Models\Job::get()))
					                    @foreach(\App\Models\Job::get() as $job)
					                    <option value="{{$job->id}}">{{$job->jobName}}</option>
					                    @endforeach
					                @endif
					            </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table style="width: 100%;text-align: center;">
                    <tbody>
                        <tr>
                            <td class="tdtext insert" valign="top">
                                <div class="titltinert">شروط الوظيفة</div>
                                <div class="textcond" id="jobRequirement">
                                    الشروط الخاصة بالوظائف المتقدم عليها
                                </div>
                            </td>
                            <td class="tdtext insert" valign="top">
                                <div class="titltinert">الشروط والاحكام</div>
                                <div class="textcond">
                                    {!! \App\Models\Condition::first()->conditions !!}
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>

                <center>
                    <table style="text-align: center;">
                        <tbody>
                            <td class="tdtext insert">
                                <input class="insert-1" value="حفظ ومتابعة" type="submit">
                            </td>
                            <td class="tdtext insert no">
                                <a href="{{url('logOut')}}" class="urlinbsert"> غير موافق</a>
                            </td>
                        </tbody>
                    </table>
                </center>
            </form>
            <br>
        </div>




<script type="text/javascript">
	
	function sendRequest(id){
		
		var xhr = new XMLHttpRequest();
			jobcond = document.getElementById('jobRequirement');

		xhr.open('GET', "{{url('jobInfo/')}}?id="+id, true);
		xhr.send(null);

		xhr.onreadystatechange = function() {
		    if (xhr.readyState == XMLHttpRequest.DONE) {
		        var data = xhr.responseText;
				jobcond.innerHTML = JSON.parse(data).job.jobRequirement;
		    }
		}
	}


</script>














			                      	
















        
