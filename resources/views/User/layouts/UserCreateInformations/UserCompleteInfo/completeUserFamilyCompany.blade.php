@if(count($errors))
	@foreach($errors->all() as $error)
      	<div class="errormessage">{{$error}}</div>
	@endforeach
@endif
@if(session()->has('success'))
	<div class="sucssesmessage">{{session('success')}}</div>
@endif
<div id="holdersite">
    <div class="infopage"><i class="fa fa-gear"></i> نموذج طلب وظيفى : معلومات اقارب داخل الشركة</div>
    <br>


    <form action="{{url('completeUserFamilyCompany')}}" method="post">
    	@csrf
        
        <div class="titlrtexthed">رقم الهاتف</div>
        <br>
        <table id="tableinsert">
            <tbody>
                <tr>
                    <td class="intd">الاسم</td>
                    <td class="intd">صلة القرابة</td>
                    <td class="intd">الهاتف</td>
                    
                </tr>
                <tr>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="name[]" placeholder="الاسم" value=""  oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <select class="personal selct" name="relativeRelation[]"  oninput="setCustomValidity('')">
                            <option value="">اختر ...</option>
                            <option value="husband">زوج</option>
                            <option value="wife">زوجة</option>
                            <option value="son">ابن</option>
                            <option value="daughter">ابنة</option>
                        </select><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input onkeydown="phone(this);" onkeyup="phone(this);" class="inputtext" type="number" name="mobile[]" value="{{old('firstMobile')}}" placeholder="الهاتف"  oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
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
    function phone(element)
    {
        var max_chars = 11;

        if(element.value.length > max_chars) {
            element.value = element.value.substr(0, max_chars);
        }
    }
</script>
    

