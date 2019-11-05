@if(count($errors))
	@foreach($errors->all() as $error)
      	<div class="errormessage">{{$error}}</div>
	@endforeach
@endif
@if(session()->has('success'))
	<div class="sucssesmessage">{{session('success')}}</div>
@endif
<div id="holdersite">
    <div class="infopage"><i class="fa fa-gear"></i> نموذج طلب وظيفى : معلومات الزوج/الزوجة</div>
    <br>


    <form action="{{url('completeUserPartner')}}" method="post">
        @csrf
        <div class="titlrtexthed">معلومات الزوج/الزوجة</div>


        <table id="tableinsert" class="optionBoxpartner">
            <tbody>
                <tr>
                    <td class="intd">الاسم</td>
                    <td class="intd">الرقم القومي</td>
                    <td class="intd">تاريخ الميلاد</td>
                    <td class="intd">نوع العلاقة</td>
                </tr>
                <tr class="blockpartner">
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="partnerName[]" placeholder="الاسم" value="" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext" type="number" id="NID"  onkeydown="limit(this);" onkeyup="limit(this);" name="personalCardNumber[]" placeholder="الرقم القومي" value="" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')">
                    </td>
                    <td class="outtd">
                        <input class="inputtext" id="BirthDate" type="text" name="birthDate[]" placeholder="تاريخ الميلاد" value="" required readonly oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')">
                    </td>
                    <td class="outtd">
                        <select class="personal selct" name="relativeRelation[]" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')">
                            <option value="">اختر ...</option>
                            <option value="husband">زوج</option>
                            <option value="wife">زوجة</option>
                            <!--<option value="son">ابن</option>
                            <option value="daughter">ابنة</option>-->
                        </select><span class="message"><div id="arrow"></div></span>
                    </td>
                     <!--<td> <span class="addpartner addbuttton"><i class="fa fa-plus" aria-hidden="true"></i></span></td>-->
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
$('.addpartner').click(function() {
    $('.blockpartner:last').after('<tr class="blockpartner"><td class="outtd"><input class="inputtext ar" type="text" name="partnerName[]" placeholder="اسم الشريك" value="" required ><span class="message"><div id="arrow"></div></span></td><td class="outtd"><input class="inputtext" type="number" name="NID" id="NID" value=""  onkeydown="limit(this);" onkeyup="limit(this);" required><span class="message"><div id="arrow"></div></span><div id="textareaname"></div></td><td class="outtd"><select class="personal selct" name="relativeRelation[]" required ><option value="">اختر ...</option><option value="husband">زوج</option><option value="wife">زوجة</option><option value="son">ابن</option><option value="daughter">ابنة</option></select><span class="message"><div id="arrow"></div></span></td><td class="outtd"><input class="inputtext" type="text" name="birthDate[]" id="BirthDate"  readonly required><span class="message"><div id="arrow"></div></span></td><td class="remove"><span class="closetr"><i class="fa fa-trash" aria-hidden="true"></i> </span></div></td></tr>');
});
$('.optionBoxpartner').on('click','.remove',function() {
    $(this).parent().remove();
});

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

    </script>

    <footer>
        <div class="footerclass">
        </div>
    </footer>

    <!-- hosam work -->
    <script>

            var refuseJobForm = document.getElementById('refuseJobForm');
            var suggestjobForm = document.getElementById('suggestjobForm');
            var interviewForm = document.getElementById('interviewForm');

            function refusedForm(){

                refuseJobForm.style.display = "block";
                suggestjobForm.style.display = "none";
            };

            function suggestForm(){

                refuseJobForm.style.display = "none";
                suggestjobForm.style.display = "block";
            };

            function interviewFormm(){
                interviewForm.style.display = "block";
            };

    </script>
  <script type="text/javascript" src="http://41.33.3.104/hr/public/design/js/autousersnu.js"></script>

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
                $("select[name=gender_allowed] option[value=أنثي]").prop("selected",true);
                $("#military_service").parents("div.col-lg-6").hide();
                $("#military_service_date").parents("div.col-lg-6").hide();
                $("#military_img").parents("div.col-lg-6").hide();

            }else{
                $("#gender").val("ذكر");
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
