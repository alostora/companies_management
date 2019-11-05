@if(count($errors))
	@foreach($errors->all() as $error)
      	<div class="errormessage">{{$error}}</div>
	@endforeach
@endif
@if(session()->has('success'))
	<div class="sucssesmessage">{{session('success')}}</div>
@endif
<div id="holdersite">
   <div class="infopage">
    <i class="fa fa-gear"></i>
    نموذج طلب وظيفى : معلومات اصدقاء فى حالة الطوارئ
    </div>
    <br>

    <form action="{{url('completeUserEmergencyFriends')}}" method="post">
        @csrf
        <div class="titlrtexthed">معلومات اصدقاء فى حالة الطوارئ</div>
        <br>

        <table id="tableinsert"  class="optionBoxfrends">
            <tbody>
                <tr>
                    <td class="intd">الاسم</td>
                    <td class="intd">الوظيفة</td>
                    <td class="intd">الهاتف </td>
                    <td class="intd">العنوان</td>
                </tr>
                <tr  class="blockfrends">
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="friendName[]" placeholder="الاسم" value="" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="friendWork[]" placeholder="الوظيفة" value="" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext" onkeydown="phone(this);" onkeyup="phone(this);" type="number" name="friendMobile[]" placeholder="الهاتف" value="" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="friendAdress[]" placeholder="العنوان" value="" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    
                </tr>
                <tr  class="blockfrends">
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="friendName[]" placeholder="الاسم" value="" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="friendWork[]" placeholder="الوظيفة" value="" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext" type="number" name="friendMobile[]" placeholder="الهاتف" value="" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="friendAdress[]" placeholder="العنوان" value="" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    
                </tr>
                <tr  class="blockfrends">
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="friendName[]" placeholder="الاسم" value="" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="friendWork[]" placeholder="الوظيفة" value="" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext" type="number" name="friendMobile[]" placeholder="الهاتف" value="" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="friendAdress[]" placeholder="العنوان" value="" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
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

















<script type="text/javascript">
    $('.addfrends').click(function() {
        $('.blockfrends:last').after('<tr class="blockfrends"><td class="outtd"><input class="inputtext ar" type="text" name="friendName[]" placeholder="اسم الصديق" value="" required<span class="message"><div id="arrow"></div></span></td><td class="outtd"><input class="inputtext ar" type="text" name="friendWork[]" placeholder="وظيفة الصديق" value="" required><span class="message"><div id="arrow"></div></span></td><td class="outtd"><input class="inputtext" type="number" name="friendMobile[]" placeholder="هاتف الصديق" value="" required><span class="message"><div id="arrow"></div></span></td><td class="outtd"><input class="inputtext ar" type="text" name="friendAdress[]" placeholder="عنوان الصديق" value="" required><span class="message"><div id="arrow"></div></span></td><td class="remove"><span class="closetr"><i class="fa fa-trash" aria-hidden="true"></i> </span></div></td></tr>');
    });
    $('.optionBoxfrends').on('click','.remove',function() {
        $(this).parent().remove();
    });
    
    
    
    function phone(element)
    {
        var max_chars = 11;

        if(element.value.length > max_chars) {
            element.value = element.value.substr(0, max_chars);
        }
    }
    
    
    
    
    
</script>

    

