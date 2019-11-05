@if(count($errors))
	@foreach($errors->all() as $error)
      	<div class="errormessage">{{$error}}</div>
	@endforeach
@endif
@if(session()->has('success'))
	<div class="sucssesmessage">{{session('success')}}</div>
@endif
<div id="holdersite">
    <div class="infopage"><i class="fa fa-gear"></i> نموذج طلب وظيفى : معلومات التأمين</div>
    <br>


    <form action="{{url('completeUserIncurance')}}" method="post" >
    	@csrf
    	<input type="hidden" name="user_id" value="{{\Auth::id()}}">
       

        <div class="titlrtexthed">معلومات التأمين</div>
        <table id="tableinsert">
            <tbody>
                <tr>
                    <td class="intd">حالة التأمين</td>
                    <td class="intd" id="remove"> مكتب التأمين التابع له</td>
                    <td class="intd" id="remove1">الرقم التأميني</td>
                </tr>
                <tr>

                    <td class="outtd">
                        <select id="mkmkm" class="inputtext personal selct" name="insuranceStatus" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')">
                    		<option value="">اختر ...</option>
                    		<option value="havent">غير مؤمن عليه</option>
                    		<option value="haveAndWork">مؤمن عليه ويعمل</option>
                    		<option value="haveAndNotWork">مؤمن عليه ولا يعمل</option>
                    	</select><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd" id="remove2">
                        <input class="inputtext ar" id="noselecti" type="text" name="insuranceOffice" placeholder="مكتب التأمين" value="{{old('insuranceOffice')}}" required ><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd" id="remove3">
                        <input class="inputtext" type="number" id="noselectii"  name="insuranceNumber" placeholder="الرقم التأميني" value="{{old('insuranceNumber')}}" required><span class="message"><div id="arrow"></div></span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>


        <br>
        <center>
            <table style="text-align: center;">
                <tbody>
                    <tr>
                        <td class="tdtext insert">
                            <input class="insert-1" value="حفظ ومتابعة" type="submit">
                        </td>
                        <td class="tdtext insert no">
                            <a href="{{url('logOut')}}" class="urlinbsert"> غير موافق</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </center>
    </form>
    <br>
</div>
    



<script>
    $('#mkmkm').change(function(){
  if($(this).val() == 'havent'){ 
     $("#remove").css({"display": "none"});
    $("#remove1").css({"display": "none"});
    $("#remove2").css({"display": "none"});
    $("#remove3").css({"display": "none"});
    $("#noselectii").removeAttr('required');
    $("#noselecti").removeAttr("required");
  }else{     
    $("#remove").css({"display": ""});
    $("#remove1").css({"display": ""});
    $("#remove2").css({"display": ""});
    $("#remove3").css({"display": ""});
    $("#noselectii").prop('required',true);
    $("#noselecti").prop('required',true);
         
  }
});
    
    

</script>

