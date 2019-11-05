@if(count($errors))
	@foreach($errors->all() as $error)
      	<div class="errormessage">{{$error}}</div>
	@endforeach
@endif
@if(session()->has('success'))
	<div class="sucssesmessage">{{session('success')}}</div>
@endif
<div id="holdersite">
    <div class="infopage"><i class="fa fa-gear"></i> نموذج طلب وظيفى : معلومات الاتصال</div>
    <br>


    <form action="{{url('completeUserCommunication')}}" method="post">
    	@csrf
        
        <div class="titlrtexthed">رقم الهاتف</div>
        <table id="tableinsert">
            <tbody>
                <tr>
                    <td class="intd">الهاتف الاول</td>
                    <td class="intd">الهاتف الثاني</td>
                </tr>
                <tr>
                    <td class="outtd">
                        <input onkeydown="phone(this);" onkeyup="phone(this);" class="inputtext" type="number" name="firstMobile" value="{{old('firstMobile')}}" placeholder="الهاتف الاول" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input onkeydown="phone(this);" onkeyup="phone(this);" class="inputtext" type="number" name="secondMobile" value="{{old('secondMobile')}}" placeholder="الهاتف الاول" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    
                    
                </tr>
            </tbody>
        </table>
        <br>

        <div class="titlrtexthed">العنوان الحالي المؤقت</div>
        <table id="tableinsert">
            <tbody>
                <tr>
                    <td class="intd">المحافظة</td>
                    <td class="intd">المدينة</td>
                    <td class="intd">اسم شخص يمكن الرجوع الية</td>
                    <td class="intd">هاتف شخص يمكن الرجوع الية</td>
                 
                </tr>
                <tr>

                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="governoment[]" placeholder="المحافظة" value="{{old('governoment.0')}}" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="city[]" placeholder="المدينة" value="{{old('city.0')}}" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="referenecePersoneName[]" placeholder="اسم شخص يمكن الرجوع الية" value="{{old('referenecePersoneName.0')}}" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext" type="number" name="referenecePersoneMobile[]" placeholder="هاتف شخص يمكن الرجوع الية" value="{{old('referenecePersoneMobile.0')}}" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <input type="hidden" name="adressStatus[]" value="current">
                </tr>
            </tbody>
        </table>
        
        
        
            <table id="tableinsert">
            <tbody>
                <tr>
                    <td class="intd">العنوان كامل</td>
                </tr>
                <tr>

                    <td class="outtd">
                        <input class="inputtext" type="text" name="compeleteAdress[]" placeholder="العنوان كامل" value="{{old('compeleteAdress.0')}}" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                
                </tr>
            </tbody>
        </table>
        <br>

        <div class="titlrtexthed">العنوان الدائم</div>
        <table id="tableinsert">
            <tbody>
                <tr>
                    <td class="intd">المحافظة</td>
                    <td class="intd">المدينة</td>
                    <td class="intd">اسم شخص يمكن الرجوع الية</td>
                    <td class="intd">هاتف شخص يمكن الرجوع الية</td>
                 
                </tr>
                <tr>

                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="governoment[]" placeholder="المحافظة" value="{{old('governoment.0')}}" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="city[]" placeholder="المدينة" value="{{old('city.0')}}" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="referenecePersoneName[]" placeholder="اسم شخص يمكن الرجوع الية" value="{{old('referenecePersoneName.0')}}" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext" type="number" name="referenecePersoneMobile[]" placeholder="هاتف شخص يمكن الرجوع الية" value="{{old('referenecePersoneMobile.0')}}" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
            
                    <input type="hidden" name="adressStatus[]" value="past">
                </tr>
            </tbody>
        </table>
        
            <table id="tableinsert">
            <tbody>
                <tr>
                    <td class="intd">العنوان كامل</td>
                </tr>
                <tr>

                    <td class="outtd">
                        <input class="inputtext" type="text" name="compeleteAdress[]" placeholder="العنوان كامل" value="{{old('compeleteAdress.0')}}" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
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
    

