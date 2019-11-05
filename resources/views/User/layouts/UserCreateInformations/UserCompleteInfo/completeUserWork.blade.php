@if(count($errors))
	@foreach($errors->all() as $error)
      	<div class="errormessage">{{$error}}</div>
	@endforeach
@endif
@if(session()->has('success'))
	<div class="sucssesmessage">{{session('success')}}</div>
@endif
<div id="holdersite">
    <div class="infopage"><i class="fa fa-gear"></i> نموذج طلب وظيفى : معلومات الخبرات السابقة</div>
    <br>


    <form action="{{url('completeUserWork')}}" method="post">
        @csrf       

        <div class="titlrtexthed">الخبرات السابقة إبتداء بآخر وظيفة</div>
        <div class="optionBoxcompany">
         
        <table id="tableinsert">
            <tbody>
                <tr>
                    <td class="intd">اسم الشركة</td>
                    <td class="intd">اسم المدير</td>
                    <td class="intd">تاريخ بدأ العمل</td>
                    <td class="intd">تاريخ نهاء العمل</td>
                    <td class="intd">مدة العمل</td>
                    <td class="intd">الراتب</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" onchange="callastrule()" name="companyName[]" placeholder="اسم الشركة" value=""  oninput="setCustomValidity('')">
                    </td>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" onchange="callastrule()"  name="managerName[]" placeholder="اسم المدير" value="" oninput="setCustomValidity('')">
                    </td>
                    <td class="outtd">
                        <input id="laststarwork" onchange="callastwork()" class="inputtext" type="date" name="startWork[]" placeholder="تاريخ بدأ العمل" value="" oninput="setCustomValidity('')">
                    </td>
                    <td class="outtd">
                        <input id="lastendwork" onchange="callastwork()"  class="inputtext" type="date" name="endWork[]" placeholder="تاريخ نهاء العمل" value="" oninput="setCustomValidity('')">
                    </td>
                    <td><input value="0" name="workDuration[]" class="inputtext"  onchange="callastrule()"  id="numdays2lastendwork" readonly> يوم
                    </td>
                    <td class="outtd">
                        <input class="inputtext" type="number" onchange="callastrule()"  name="salary[]" placeholder="الراتب" value="" oninput="setCustomValidity('')">
                    </td>
                    <td>
                        <span class="addcompany addbuttton"><i class="fa fa-plus" aria-hidden="true"></i></span>
                    </td>
                </tr>
            </tbody>
        </table>
     



        <table id="tableinsert"  class="blockcompany">
            <tbody>
                <tr>
                    <td class="intd">المسمي الوظيفي</td>
                    <td class="intd">هاتف المدير</td>
                    <td class="intd">سبب ترك العمل</td>
      
                </tr>
                <tr>
                    
                    <td class="outtd">
                        <input class="inputtext ar" type="text" onchange="callastrule()"  name="position[]" placeholder="المسمي الوظيفي" value="" oninput="setCustomValidity('')">
                    </td>
                    <td class="outtd">
                        <input onkeydown="phone(this);" onkeyup="phone(this);" onchange="callastrule()"  class="inputtext" type="number" name="managerPhone[]" placeholder="هاتف المدير" value="" oninput="setCustomValidity('')">
                    </td>
                    <td class="outtd">
                        <select class="personal selct" onchange="callastrule()"  name="reasonForLeaving[]" placeholder="سبب ترك العمل" value="" oninput="setCustomValidity('')">
                        <option value="">اختر..</option>
                            <option value="السبب الاول">dfgdfg</option>
                            <option value="السبب الاول">dddfgdfgdddd</option>
                            <option value="السبب الاول">ddddfgdfgddd</option>
                            <option value="السبب الاول">ddddfgdddd</option>
                        </select>
                    </td>
        

                </tr>
            </tbody>
        </table>
            
                    <table id="tableinsert"  class="blockcompany">
            <tbody>
                <tr>
    
                    <td class="intd">المهام الوظيفيى</td>
                </tr>
                <tr>
                    

       <td class="outtd"><input class="inputtext ar" type="text" name="missions[]" placeholder="المهام الوظيفيىة" value="" ></td>

                </tr>
            </tbody>
        </table>
        <br>
        </div>



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
    
   
    
        function  callastrule(){
        $(".inputtext").prop('required',true);
        }
    
    
    function GetDayswork(){
                var dropdt = new Date(document.getElementById("lastendwork").value);
                var pickdt = new Date(document.getElementById("laststarwork").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }


        function callastwork (){
           if(document.getElementById("laststarwork")){
            document.getElementById("numdays2lastendwork").value=GetDayswork();
        }  
            
        var dateStartwork = new Date(document.getElementById("lastendwork").value);
        var dateEndwork = new Date(document.getElementById("laststarwork").value);


        if(Date.parse(dateStartwork) < Date.parse(dateEndwork)){

            alert("تاريخ الانتهاء اقل من تاريخ الالتحاق");
            document.getElementById("laststarwork").value = "";
            document.getElementById("lastendwork").value = "";
            document.getElementById("numdays2lastendwork").value = "";
        } 
        
        var specific_datework = new Date(document.getElementById("laststarwork").value);
        var current_datework = new Date();
        if(current_datework.getTime() < specific_datework.getTime())
        {
            alert("تاريخ بدا العمل اكبر من تاريخ اليوم");
            document.getElementById("laststarwork").value = "";
            document.getElementById("lastendwork").value = "";
            document.getElementById("numdays2lastendwork").value = "";
        }

    }
    
    
    
    function GetDayswork1(){
                var dropdt = new Date(document.getElementById("lastendwork1").value);
                var pickdt = new Date(document.getElementById("laststarwork1").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }


        function callastwork1 (){
           if(document.getElementById("laststarwork1")){
            document.getElementById("numdays2lastendwork1").value=GetDayswork1();
        }  
            
        var dateStartwork1 = new Date(document.getElementById("lastendwork1").value);
        var dateEndwork1 = new Date(document.getElementById("laststarwork1").value);


        if(Date.parse(dateStartwork1) < Date.parse(dateEndwork1)){

            alert("تاريخ الانتهاء اقل من تاريخ الالتحاق");
            document.getElementById("laststarwork1").value = "";
            document.getElementById("lastendwork1").value = "";
            document.getElementById("numdays2lastendwork1").value = "";
        } 
        
        var specific_datework1 = new Date(document.getElementById("laststarwork1").value);
        var current_datework1 = new Date();
        if(current_datework1.getTime() < specific_datework1.getTime())
        {
            alert("تاريخ بدا العمل اكبر من تاريخ اليوم");
            document.getElementById("laststarwork1").value = "";
            document.getElementById("lastendwork1").value = "";
            document.getElementById("numdays2lastendwork1").value = "";
        }

    }




    function GetDayswork2(){
                var dropdt = new Date(document.getElementById("lastendwork2").value);
                var pickdt = new Date(document.getElementById("laststarwork2").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }


        function callastwork2 (){
           if(document.getElementById("laststarwork2")){
            document.getElementById("numdays2lastendwork2").value=GetDayswork2();
        }  
            
        var dateStartwork2 = new Date(document.getElementById("lastendwork2").value);
        var dateEndwork2 = new Date(document.getElementById("laststarwork2").value);


        if(Date.parse(dateStartwork2) < Date.parse(dateEndwork2)){

            alert("تاريخ الانتهاء اقل من تاريخ الالتحاق");
            document.getElementById("laststarwork2").value = "";
            document.getElementById("lastendwork2").value = "";
            document.getElementById("numdays2lastendwork2").value = "";
        } 
        
        var specific_datework2 = new Date(document.getElementById("laststarwork2").value);
        var current_datework2 = new Date();
        if(current_datework2.getTime() < specific_datework2.getTime())
        {
            alert("تاريخ بدا العمل اكبر من تاريخ اليوم");
            document.getElementById("laststarwork2").value = "";
            document.getElementById("lastendwork2").value = "";
            document.getElementById("numdays2lastendwork2").value = "";
        }

    }
    
    
    
    
        function GetDayswork3(){
                var dropdt = new Date(document.getElementById("lastendwork3").value);
                var pickdt = new Date(document.getElementById("laststarwork3").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }


        function callastwork3 (){
           if(document.getElementById("laststarwork3")){
            document.getElementById("numdays2lastendwork3").value=GetDayswork3();
        }  
            
        var dateStartwork3 = new Date(document.getElementById("lastendwork3").value);
        var dateEndwork3 = new Date(document.getElementById("laststarwork3").value);


        if(Date.parse(dateStartwork3) < Date.parse(dateEndwork3)){

            alert("تاريخ الانتهاء اقل من تاريخ الالتحاق");
            document.getElementById("laststarwork3").value = "";
            document.getElementById("lastendwork3").value = "";
            document.getElementById("numdays2lastendwork3").value = "";
        } 
        
        var specific_datework3 = new Date(document.getElementById("laststarwork3").value);
        var current_datework3 = new Date();
        if(current_datework3.getTime() < specific_datework3.getTime())
        {
            alert("تاريخ بدا العمل اكبر من تاريخ اليوم");
            document.getElementById("laststarwork3").value = "";
            document.getElementById("lastendwork3").value = "";
            document.getElementById("numdays2lastendwork3").value = "";
        }

    }
    
    
    
    
        function GetDayswork4(){
                var dropdt = new Date(document.getElementById("lastendwork4").value);
                var pickdt = new Date(document.getElementById("laststarwork4").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }


        function callastwork4 (){
           if(document.getElementById("laststarwork4")){
            document.getElementById("numdays2lastendwork4").value=GetDayswork4();
        }  
            
        var dateStartwork4 = new Date(document.getElementById("lastendwork4").value);
        var dateEndwork4 = new Date(document.getElementById("laststarwork4").value);


        if(Date.parse(dateStartwork4) < Date.parse(dateEndwork4)){

            alert("تاريخ الانتهاء اقل من تاريخ الالتحاق");
            document.getElementById("laststarwork4").value = "";
            document.getElementById("lastendwork4").value = "";
            document.getElementById("numdays2lastendwork4").value = "";
        } 
        
        var specific_datework4 = new Date(document.getElementById("laststarwork4").value);
        var current_datework4 = new Date();
        if(current_datework4.getTime() < specific_datework4.getTime())
        {
            alert("تاريخ بدا العمل اكبر من تاريخ اليوم");
            document.getElementById("laststarwork4").value = "";
            document.getElementById("lastendwork4").value = "";
            document.getElementById("numdays2lastendwork4").value = "";
        }

    }
    
    
    
        function GetDayswork5(){
                var dropdt = new Date(document.getElementById("lastendwork5").value);
                var pickdt = new Date(document.getElementById("laststarwork5").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }


        function callastwork5 (){
           if(document.getElementById("laststarwork5")){
            document.getElementById("numdays2lastendwork5").value=GetDayswork5();
        }  
            
        var dateStartwork5 = new Date(document.getElementById("lastendwork5").value);
        var dateEndwork5 = new Date(document.getElementById("laststarwork5").value);


        if(Date.parse(dateStartwork5) < Date.parse(dateEndwork5)){

            alert("تاريخ الانتهاء اقل من تاريخ الالتحاق");
            document.getElementById("laststarwork5").value = "";
            document.getElementById("lastendwork5").value = "";
            document.getElementById("numdays2lastendwork5").value = "";
        } 
        
        var specific_datework5 = new Date(document.getElementById("laststarwork5").value);
        var current_datework5 = new Date();
        if(current_datework5.getTime() < specific_datework5.getTime())
        {
            alert("تاريخ بدا العمل اكبر من تاريخ اليوم");
            document.getElementById("laststarwork5").value = "";
            document.getElementById("lastendwork5").value = "";
            document.getElementById("numdays2lastendwork5").value = "";
        }

    }
</script>

    <script type="text/javascript">
var counterwork =0;
        $('.addcompany').click(function() {

    if(counterwork == 0){
        counterwork = counterwork+1;
    }else if(counterwork>0){
        counterwork++;
    }

            $('.blockcompany:last').after('<div><span class="closetrcompany remove" style="top: 23px;float: left;"><i class="fa fa-trash" aria-hidden="true"></i> </span><br><div class="line text"></div><table id="tableinsert" ><tbody><tr><td class="intd">اسم الشركة</td><td class="intd">اسم المدير</td><td class="intd">تاريخ بدأ العمل</td><td class="intd">تاريخ نهاء العمل</td><td>مدة العمل</td><td class="intd">الراتب</td></tr><tr><td class="outtd"><input class="inputtext ar" type="text" name="companyName[]" placeholder="اسم الشركة" value=""  required></td><td class="outtd"><input class="inputtext ar" type="text" name="managerName[]" placeholder="اسم المدير" value="" required></td><td class="outtd"><input class="inputtext" id="laststarwork'+counterwork+'" onchange="callastwork'+counterwork+'()" type="date" name="startWork[]" placeholder="تاريخ بدأ العمل" value="" required></td><td class="outtd"><input class="inputtext" id="lastendwork'+counterwork+'" onchange="callastwork'+counterwork+'()" type="date" name="endWork[]" placeholder="تاريخ انهاء العمل" value="" required></td><td><input value="0"  class="inputtext" id="numdays2lastendwork'+counterwork+'" name="workDuration[]" readonly required> يوم</td><td class="outtd"><input class="inputtext ar" type="text" name="salary[]" placeholder="الراتب" value="" required></td></tr></tbody></table><table id="tableinsert"><tbody><tr><td class="intd">المسمي الوظيفي</td><td class="intd">هاتف المدير</td><td class="intd">سبب ترك العمل</td></tr><tr><td class="outtd"><input class="inputtext ar" type="text" name="position[]" placeholder="المسمي الوظيفي" value="" required></td><td class="outtd"><input class="inputtext" type="number" name="managerPhone[]" onkeydown="phone(this);" onkeyup="phone(this);" placeholder="هاتف المدير" value="" required></td><td class="outtd"><select class="personal selct" name="reasonForLeaving[]" required><option value="">اختر ...</option><option value="good">1</option></select></td></tr></tbody></table><table id="tableinsert"><tbody><tr><td class="intd">المهام الوظيفيى</td></tr><tr><td class="outtd"><input class="inputtext ar" type="text" name="missions[]" placeholder="المهام الوظيفيىة" value="" required></td></tr></tbody></table><br></div></div>');

});
        
        



$('.optionBoxcompany').on('click','.remove',function() {
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


<!------  تاريخ بدا العمل  -------->



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
    
    
    
    
    function phone(element)
    {
        var max_chars = 11;

        if(element.value.length > max_chars) {
            element.value = element.value.substr(0, max_chars);
        }
    }
    
            

</script>