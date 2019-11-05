
<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
     display: none; 
    -webkit-appearance: none;
    margin: 0; 
}

input[type=number] {
    -moz-appearance:textfield;
}
input:focus:valid { box-shadow: rgb(92, 208, 83) 0px 0px 3px 1px; border-color: rgb(40, 146, 31); }
input:focus:required:invalid {border: 2px solid red;}
span.message {
    padding: 7px;
    font-size: 17px;
    display: none;
    margin-left: 15px;
}
input:valid + .message {
    background-image: url(https://www.amazingsouq.com/edititems/image/check.png);
    background-size: 20px 20px;
    background-repeat: no-repeat;
    background-position: 98% center;
    display: unset;
    margin-left: 1%;
    padding: 11px;
}



input:focus:valid { box-shadow: rgb(92, 208, 83) 0px 0px 3px 1px; border-color: rgb(40, 146, 31); }
input:valid + span div { display: none; }
input:invalid + span div { display: block; }




select:focus:valid { box-shadow: rgb(92, 208, 83) 0px 0px 3px 1px; border-color: rgb(40, 146, 31); }
select:focus:required:invalid {border: 2px solid red;}
span.message {
    padding: 7px;
    font-size: 17px;
    display: none;
    margin-left: 15px;
}
select:valid + .message {
    background-image: url(https://www.amazingsouq.com/edititems/image/check.png);
    background-size: 20px 20px;
    background-repeat: no-repeat;
    background-position: 98% center;
    display: unset;
    margin-left: 1%;
    padding: 11px;
}


select:focus:valid { box-shadow: rgb(92, 208, 83) 0px 0px 3px 1px; border-color: rgb(40, 146, 31); }
select:valid + span div { display: none; }
select:invalid + span div { display: block; }

input.textdatedd {
    position: absolute;
    height: 34px;
    z-index: 1;
}
input.textdateddpass {
    position: relative;
    height: 30px;
    z-index: 5;
    border-radius: 7px;
    border: transparent;
    padding: 7px;
    left: -13px;
    width: 100px;
    top: -15px;
}
input#stratcreat {
    height: 37px;
    position: relative;
    top: -50px;
    left: -13px;
    border-radius: 13px;
}
.textdateddpass2 {
    position: relative;
    z-index: 7;
    height: 27px;
    left: -14px;
    width: 102px;
    padding: 5px;
    border: transparent;
    top: -14px;
    border-radius: 13px;
}
input#startdatanoe {
    position: relative;
    top: -45px;
    height: 35px;
    left: -13px;
    border-radius: 11px;
}

input[type="date"] {
  display:block;
  position:relative;
  padding:1rem 3.5rem 1rem 0.75rem;
  
  font-size:1rem;
  font-family:monospace;
  
  border:1px solid #8292a2;
  border-radius:0.25rem;
  background:
    white
    url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='22' viewBox='0 0 20 22'%3E%3Cg fill='none' fill-rule='evenodd' stroke='%23688EBB' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' transform='translate(1 1)'%3E%3Crect width='18' height='18' y='2' rx='2'/%3E%3Cpath d='M13 0L13 4M5 0L5 4M0 8L18 8'/%3E%3C/g%3E%3C/svg%3E")
    right 1rem
    center
    no-repeat;
  
  cursor:pointer;
}
input[type="date"]:focus {
  outline:none;
  border-color:#3acfff;
  box-shadow:0 0 0 0.25rem rgba(0, 120, 250, 0.1);
}

::-webkit-datetime-edit {}
::-webkit-datetime-edit-fields-wrapper {}
::-webkit-datetime-edit-month-field:hover,
::-webkit-datetime-edit-day-field:hover,
::-webkit-datetime-edit-year-field:hover {
  background:rgba(0, 120, 250, 0.1);
}
::-webkit-datetime-edit-text {
  opacity:0;
}
::-webkit-clear-button,
::-webkit-inner-spin-button {
  display:none;
}
::-webkit-calendar-picker-indicator {
  position:absolute;
  width:2.5rem;
  height:100%;
  top:0;
  right:0;
  bottom:0;
  
  opacity:0;
  cursor:pointer;
  
  color:rgba(0, 120, 250, 1);
  background:rgba(0, 120, 250, 1);
 
}

input[type="date"]:hover::-webkit-calendar-picker-indicator { opacity:0.05; }
input[type="date"]:hover::-webkit-calendar-picker-indicator:hover { opacity:0.15; }

.holderdatem {
    height: 0;
}
input#stratcreatarmyy {
    height: 37px;
    position: relative;
    top: -39px;;
    border-radius: 13px;
    width: 200px;
}
input#textboxarmy {
    position: relative;
    z-index: 7;
    height: 25px;
    left: -13px;
    width: 135px;
    padding: 5px;
    border: transparent;
    top: -7px;
    border-radius: 13px;
}
</style>
@if(count($errors))
    @foreach($errors->all() as $error)
       
          <div class="errormessage">{{$error}}</div>
        
	@endforeach
@endif
@if(session()->has('success'))
    <div class="sucssesmessage">{{session('success')}}</div>
@endif

<link rel="stylesheet" type="text/css" href="{{url('design/css/completeUserPersonal.css')}}">

<menu>

<div id="holdersite" style="margin-top: -25px;">
    <div class="infopage"><i class="fa fa-gear"></i> نموذج طلب وظيفى : البيانات الشخصية</div>
 
   <form action="{{url('completeUserPersonal')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{\Auth::id()}}">
       
        <center style="background: #49879e;box-shadow: inset 0 0 10px black;">
            <div class="holderimg">
                <img id="blah" src="{{url('design/img/user.png')}}" name="userImage" alt="your image" />
                <input type='file' name="userImage" onchange="readURL(this);" required />
            </div>
        </center>

    <div class="titlrtexthed">بيانات البطاقة الشخصية</div>
    <table id="tableinsert" >
        <tbody>
            <tr>
                    <td class="intd">اللقب</td>
                    <td class="intd">الاسم الاول</td>
                    <td class="intd">اسم الاب</td>
                    <td class="intd">اسم الجد</td>
                    <td class="intd">الاسم الاخير</td>
                    <td class="intd">اسم العائلة</td>
                </tr>
                <tr>
                    <td>
                    <input class="inputtext ar" id="geder" type="text"  placeholder="اللقب"  required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')" readonly><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="firstName" placeholder="الاسم الاول" value="{{old('firstName')}}" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="fatherName" placeholder="اسم الاب" value="{{old('fatherName')}}" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="grandFatherName" placeholder="اسم الجد" value="{{old('grandFatherName')}}" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="lastName" placeholder="الاسم الاخير" value="{{old('lastName')}}" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="familyName" placeholder="اسم العائلة" value="{{old('familyName')}}" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    
                </tr>
        </tbody>
    </table>

    <table id="tableinsert">
        <tbody>
            <tr>
                <td class="intd">الرقم القومي</td>
                <td class="intd">تاريخ الاصدار</td>
                <td class="intd">تاريخ الانتهاء</td>
                <td class="intd" style="display:none">سوف تنتهى الباقة الشخصية بعد</td>
                <td class="intd">تاريخ الميلاد</td>
                <td class="intd">الجنس</td>
                <td class="intd">الجنسية</td>
            </tr>
            <tr>
                <td class="outtd">
                    <input class="inputtext" type="number" placeholder="الرقم القومي" name="personalCardNumber"  value="{{old('personalCardNumber')}}" id="NID" value=""  onkeydown="limit(this);" onkeyup="limit(this);" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span><div id="textareaname"></div>
                </td>
				
				<td class="outtd">
					<div class="holderdatem">
						<input id="textbox1" class="textdateddpass2"  type="text" value="dd-mm-yyyy" readonly></input>
						<input class="inputtext" type="date" name="cardReleaseDate" id="startdatanoe" onchange="calsss()" value="{{old('cardReleaseDate')}}"required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')">
					</div>
                </td>




				<td class="outtd">
					<div class="holderdatem">
						<input id="textbox" class="textdateddpass"  type="text" value="dd-mm-yyyy" readonly></input>
						<input class="inputtext" name="cardExpireDate" id="stratcreat"  type="date" name="bday" style="" onchange="cal()" value="{{old('cardExpireDate')}}" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')">
					</div>
				</td>

                <td  style="display:none"><input value="0"  class="inputtext" id="numdayscard" readonly> يوم</td>

                <td class="outtd">
                    <input class="inputtext" type="text" name="birthDay" id="BirthDate" placeholder="تاريخ الميلاد"  readonly required>
                    <span class="message"><div id="arrow"></div></span>
                </td>
                <td class="outtd">
                    <div class="col-lg-6">
                        <input type="text" required  name="sex" id="gender"  class="inputtext ar" value="{{old('sex')}}"  placeholder="الجنس" readonly><span class="message"><div id="arrow"></div></span>
                    </div>
                </td>

                <td class="outtd">
                    @include('User/layouts/Countery/countery')
                </td>


                
                
            </tr>
        </tbody>
    </table>
    <br>
    <div class="titlrtexthed">الديانة والحالة الاجتماعىة</div>
    <table id="tableinsert">
        <tbody>
            <tr>
                <td class="intd">الديانة</td>
                <td class="intd">الحالة الاجتماعية</td>
                <td class="intd">المهنة</td>
            </tr>
            <tr>
                <td class="outtd">
                    <select name="religion" class="personal selct" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')">
                        <option value="">اختر..</option>
                        @if(!empty(\App\Models\Religion::get()))
                        @foreach(\App\Models\Religion::get() as $reg)
                            <option value="{{$reg->religionName}}">{{$reg->religionName}}</option>
                        @endforeach    
                        @endif
                    </select><span class="message"><div id="arrow"></div></span>
                </td>
                <td class="outtd">
                    <select name="socialStatus" class="personal selct" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')">
                        <option value="">اختر..</option>
                        <option value="single">اعزب</option>
                        <option value="married">متزوج</option>
                        <option value="divorced">مطلق</option>
                        <option value="widowed">ارمل</option>
                    </select><span class="message"><div id="arrow"></div></span>
                </td>
                <td class="outtd">
                    <input onkeydown="job(this);" onkeyup="job(this);" class="inputtext ar" name="currentJobCard" value="{{old('currentJobCard')}}" type="text" placeholder="المهنة" required>
                    <span class="message"><div id="arrow"></div></span>
                </td>
            </tr>
        </tbody>
    </table>


    
            <br>
        
    <div class="titlrtexthed gggg" style="display: none;">التجنيد</div>
        <br>
    <table id="tableinsert" class="gggg" style="display: none;width: 100%;">
        <tbody>
            <tr>
                <td class="intd">الموقف من التجنيد</td>
                <td class="intd" id="armyDate1">تاريخ الشهادة</td>
            </tr>
            <tr>
                <td class="outtd">
                    <select class="personal selct" name="armyStatus"  oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')" onchange="return armyF(this.value);">
                        <option value="">اختر...</option>
                        <option value="wanted">مطلوب للتجنيد</option>
                        <option value="notWanted">اعفاء نهائي</option>
                        <option value="delayed">مؤجل</option>
                        <option value="done">ادي الخدمة العسكرية</option>
                    </select><span class="message"><div id="arrow"></div></span>
                </td>
                <td class="outtd" id="armyDate">
					<div class="holderdatem">
					<center>
				   	<input id="textboxarmy" class="textdateddpassarmy" type="text" value="dd-mm-yyyy" readonly="">
						<input id="stratcreatarmyy" onchange="armyy()" type="date" class="inputtext" name="armyDate" placeholder="تاريخ الشهادة" value="{{old('armyDate')}}"  oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')">
						</center>
					</div>
					
                </td>
            </tr>
        </tbody>
    </table>




    <td class="tdtext insert text" valign="top">
    </td>


    <div class="line"></div>
    <br>
    <center>
        <table style="text-align: center;">
            <tbody>
            <tr>
                <td class="tdtext insert" id="armyDate2">
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
    




<script>
    function armyF(value) {
        if(value == "wanted"){
            document.getElementById('armyDate').setAttribute("style", "display:none;");
            document.getElementById('armyDate1').setAttribute("style", "display:none;");
            document.getElementById('armyDate2').setAttribute("style", "display:none;");
            alert('عفو لا يمكن استكمال الاجراءات فى حالة انك لم تؤدي الخدمة العسكرية');
        }else{
            document.getElementById('armyDate').setAttribute("style", "display:block;");
            document.getElementById('armyDate1').setAttribute("style", "display:block;");
            document.getElementById('armyDate2').setAttribute("style", "display:block;");
        }
    }
</script>


<!-- dddd -->
<script type="text/javascript">
function calsss(){
var specific_datesss = new Date(document.getElementById("startdatanoe").value);
var current_datesss = new Date();
if(current_datesss.getTime() < specific_datesss.getTime())
{
alert("التاريخ اكبر من تاريخ اليوم");
document.getElementById("startdatanoe").value = "";
}
}



var today = new Date();
	thisMonth = today.getMonth()+1;
	thisYear = today.getFullYear();
	unxtoday = today.toLocaleString();
	

        function cal(){
		inputDate = new Date(document.getElementById("stratcreat").value);
		thisInputDateMonth = inputDate.getMonth()+1;
		thisInputDateYear = inputDate.getFullYear();
		unxInput = inputDate.toLocaleString();
		
		var sixmonthPlus = inputDate.setMonth(inputDate.getMonth() + 6);
		    unixSixMonth = sixmonthPlus.toLocaleString();
			
		var dropdtmonth = new Date();
		var pickdtmonth = sixmonthPlus;
		
		var theResult = parseInt((pickdtmonth - dropdtmonth) / (24 * 3600 * 1000));
			
		if(theResult<365){
			alert("لا يسمح بالتسجيل  تاريخ انتهاء البطاقة اقل من 6 اشهر");
			document.getElementById("stratcreat").value = "";
			document.getElementById("numdayscard").value = "";
		
		}	

    }
    
    
    
    function armyy(){
            var specific_datearmyy = new Date(document.getElementById("stratcreatarmyy").value);
            var current_datearmyy = new Date();
            if(current_datearmyy.getTime() > specific_datearmyy.getTime())
            { }
            else
            {
                
                alert("تاريخ الاصدار لا يمكن ان يكون اكبر من تاريخ اليوم");
                document.getElementById("stratcreatarmyy").value = "";
            }

            
    }
</script>

<!-- dddd -->




<script src="{{url('design/js/autousersnu.js')}}" type="text/javascript" ></script>


    <script type="text/javascript">
        $(function(){
    window.history.pushState(null, "", window.location.href);        
    window.onpopstate = function() {
        window.history.pushState(null, "", window.location.href);
    };



    $('.date').datepicker({
        rtl:true,
        format: 'yyyy-mm-dd',
        clearBtn : true,
        todayBtn : true,
        todayHighlight : true,
    });


        

    $("#NID").on("keyup",function(){
        if ($(this).val() != ""){
            var birth_date_year = $(this).val().substring(1,3);
            var birth_date_month = $(this).val().substring(3,5);
            var birth_date_day = $(this).val().substring(5,7);
            var birthDateCen = 19;
            var getGovernorateName = getGovernorateNameById($(this).val().substring(7,9));
            var gender = $(this).val().substring(12,13);
            if (gender  % 2 == 0){
                $("#gender").val("أنثي");
                $("#geder").val("السيدة");
                $("select[name=gender_allowed] option[value=أنثي]").prop("selected",true);
                $("#military_service").parents("div.col-lg-6").hide();
                $("#military_service_date").parents("div.col-lg-6").hide();
                $("#military_img").parents("div.col-lg-6").hide();

            }else{
                $("#gender").val("ذكر");
                $("#geder").val("السيد");
                $(".gggg").css({'display': ''});
                $("select[name=gender_allowed] option[value=ذكر]").prop("selected",true);
                $("#military_service").parents("div.col-lg-6").show();
                $("#military_service_date").parents("div.col-lg-6").show();
                $("#military_img").parents("div.col-lg-6").show();
            }
            if ($(this).val().substring(0,0) === 3){
                birthDateCen = 20;
            }
            $("#governorate").val(getGovernorateName);
            $("#BirthDate").val(birthDateCen.toString() + birth_date_year.toString()+ "-" + birth_date_month.toString()+ "-" + birth_date_day.toString());
        }else{
            $("#BirthDate").val("");
            $("#governorate").val("");
            $("#gender").val("");
            $("#gender_allowed").val("");

        }
    });
         
});

function getGovernorateNameById(code){
    if (code != ""){
        var listOfCountries = [
            {"id" : 14 , "name" : "القليوبيه" },
            {"id" : 27 , "name" : "الاقصر" },
            {"id" : 23 , "name" : "الفيوم" },
            {"id" : 22 , "name" : "بنى سويـف" },
            {"id" : 18 , "name" : "البحيرة" },
            {"id" : 25 , "name" : "اسيوط" },
            {"id" : 12 , "name" : "الدقهلية" },
            {"id" : 13 , "name" : "الشرقية" },
            {"id" : 21 , "name" : "الجيزة" },
            {"id" : 01 , "name" : "القاهرة" },
            {"id" : 02 , "name" : "الأسكندرية" },
            {"id" : 03 , "name" : "بورسعيد" },
            {"id" : 11 , "name" : "دمياط" },
            {"id" : 14 , "name" : "القليوبية" },
            {"id" : 15 , "name" : "كفر الشيخ" },
            {"id" : 16 , "name" : "الغربية" },
            {"id" : 17 , "name" : "المنوفية" },
            {"id" : 19 , "name" : "الإسماعيلية"},
            {"id" : 22 , "name" : "بنى سويف" },
            {"id" : 23 , "name" : "الفيوم" },
            {"id" : 24 , "name" : "المنيا" },
            {"id" : 25 , "name" : "أسيوط" },
            {"id" : 26 , "name" : "سوهاج" },
            {"id" : 27 , "name" : "قنا" },
            {"id" : 28 , "name" : "أسوان" },
            {"id" : 29 , "name" : "الأقصر" },
            {"id" : 32 , "name" : "الوادى الجديد" },
            {"id" : 33 , "name" : "مطروح" },
            {"id" : 04 , "name" : "السويس" },
            {"id" : 34 , "name" : "شمال سيناء" },
            {"id" : 35 , "name" : "جنوب سيناء" },
            {"id" : 31 , "name" : "البحر الأحمر" },
            {"id" : 88 , "name" : "المركز الرئيسى للين تم قيدهم خارج البلاد" }
        ];

        var govName = "";
        $.each(listOfCountries , function(k,v){
            if (v.id == code){
                govName = v.name;
            }
        });
        console.log(govName);
        return govName;
    }
}

function calcDate(date1,date2) {
    var diff = (date1.getTime() - date2.getTime()).toFixed(2);
    var day = 1000 * 60 * 60 * 24;

    var days = diff/day;
    var months = days/31;
    var years = months/12;

    // var message = date2.toDateString();
    // message += " was "
    // var message = Number(days).toFixed(2) + " يوم / ايام  - " 
    // message += Number(months).toFixed(2) + " شهر  - "
    var message = Number(years).toFixed(2) + " سنة "

    if (Number(days).toFixed(2) &&  Number(months).toFixed(2) && Number(years).toFixed(2)){
        return message
    }else{
        return "جاري حساب سنين الخبرة ..";
    }
}

function HasArabicCharacters(text) {
    var arregex = /[\u0600-\u06FF]/;
    return arregex.test(text);
}
    </script>
<script type="text/javascript">

 

var dropdown = document.getElementsByClassName("leftclick-one");
var i;


for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";

  }
  });
}

function limit(element)
{
    var max_chars = 14;

    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}
    
    
function job(element)
{
    var max_chars = 20;

    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}


  $('#NID').on('keyup keydown', updateCount);

function updateCount() {
  $('#textareaname').text('14' - $(this).val().length + ' حرف متبقى') ;

var characterCount = '14' - $(this).val().length;

  if (characterCount < 14) {
    $("#textareaname").css({'color': '#37ea37'});
  }  
    if (characterCount > 1) {
    $("#textareaname").css({'color': 'red'});
  } 
}


$(".nospace").on({
  keydown: function(e) {
    if (e.which === 32)
      return false;
  },
  change: function() {
    this.value = this.value.replace(/\s/g, "");
  }
});

$('.inputtext.ar').keyup(function() {
                if (this.value.match(/[^أ-ي-ء ]/g)) {
                    this.value = this.value.replace(/[^أ-ي-ء ]/g, '');
                     alert ("من فضلك اكتب اللغة العربية فقط");//put any message here!!!
                }
            });
            
</script>
    
    
<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>




<script type="text/javascript">
  $(document).ready(function(){
  var d = new Date();      
        
   function twoDigitDate(d){
      return ((d.getDate()).toString().length == 1) ? "0"+(d.getDate()).toString() : (d.getDate()).toString();
    };
        
    function twoDigitMonth(d){
     	return ((d.getMonth()+1).toString().length == 1) ? "0"+(d.getMonth()+1).toString() : (d.getMonth()+1).toString();
    };    
      
    var today_ISO_date = d.getFullYear()+"-"+twoDigitMonth(d)+"-"+twoDigitDate(d); 
        

       
     var dd_mm_yyyy;
     $("#stratcreat").change( function(){
       	changedDate = $(this).val(); 
        var date = new Date(changedDate);
        dd_mm_yyyy = twoDigitDate(date)+"-"+twoDigitMonth(date)+"-"+date.getFullYear(); 
        $('#textbox').val(dd_mm_yyyy);

        });
        
    });





  $(document).ready(function(){
  var d = new Date();      
        
   function twoDigitDate(d){
      return ((d.getDate()).toString().length == 1) ? "0"+(d.getDate()).toString() : (d.getDate()).toString();
    };
        
    function twoDigitMonth(d){
     	return ((d.getMonth()+1).toString().length == 1) ? "0"+(d.getMonth()+1).toString() : (d.getMonth()+1).toString();
    };    
      
    var today_ISO_date = d.getFullYear()+"-"+twoDigitMonth(d)+"-"+twoDigitDate(d); 
        

       
     var dd_mm_yyyy;
     $("#startdatanoe").change( function(){
       	changedDate = $(this).val(); 
        var date = new Date(changedDate);
        dd_mm_yyyy = twoDigitDate(date)+"-"+twoDigitMonth(date)+"-"+date.getFullYear(); 
        $('#textbox1').val(dd_mm_yyyy);

        });
        
    });
	
	
	
	  $(document).ready(function(){
  var d = new Date();      
        
   function twoDigitDate(d){
      return ((d.getDate()).toString().length == 1) ? "0"+(d.getDate()).toString() : (d.getDate()).toString();
    };
        
    function twoDigitMonth(d){
     	return ((d.getMonth()+1).toString().length == 1) ? "0"+(d.getMonth()+1).toString() : (d.getMonth()+1).toString();
    };    
      
    var today_ISO_date = d.getFullYear()+"-"+twoDigitMonth(d)+"-"+twoDigitDate(d); 
        

       
     var dd_mm_yyyy;
     $("#stratcreatarmyy").change( function(){
       	changedDate = $(this).val(); 
        var date = new Date(changedDate);
        dd_mm_yyyy = twoDigitDate(date)+"-"+twoDigitMonth(date)+"-"+date.getFullYear(); 
        $('#textboxarmy').val(dd_mm_yyyy);

        });
        
    });
</script>


