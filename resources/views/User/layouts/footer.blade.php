


<!-- start hosam work -->
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



    <script>
        function printPage() {      
            window.print();
        }
    </script>
  <!-- end hosam work -->




<!-- start main site work -->

<!--------- script for upload image ----------->


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
       function GetDays(){
                var dropdt = new Date(document.getElementById("endcreat").value);
                var pickdt = new Date(document.getElementById("stratcreat").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }


        function cal(){
           if(document.getElementById("stratcreat")){
            document.getElementById("numdayscard").value=GetDays();
        }  
        if(GetDays() < 180){
           alert("لا يسمح بالتسجيل  تاريخ انتهاء البطاقة اقل من 6 اشهر");
           document.getElementById("stratcreat").value = "";
           document.getElementById("endcreat").value = "";
           document.getElementById("numdayscard").value = "";
        }   
        var  dateEnd  = new Date(document.getElementById("stratcreat").value);
        var dateStart = new Date(document.getElementById("endcreat").value);


        if(Date.parse(dateStart) < Date.parse(dateEnd)){
            alert("تاريخ الانتهاء اقل من تاريخ الالتحاق");
            document.getElementById("numdayscard").value = "";
            document.getElementById("stratcreat").value = "";
            document.getElementById("endcreat").value = "";
            
        } 
        

var specific_date = new Date(document.getElementById("stratcreat").value);
var current_date = new Date();
if(current_date.getTime() > specific_date.getTime())
{

}
else
{
alert("التاريخ اكبر من تاريخ اليوم");
document.getElementById("stratcreat").value = "";
document.getElementById("endcreat").value = "";
document.getElementById("numdayscard").value = "";
}

    }
</script>
 
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
                $("select[name=gender_allowed] option[value=أنثي]").prop("selected",true);
                $("#military_service").parents("div.col-lg-6").hide();
                $("#military_service_date").parents("div.col-lg-6").hide();
                $("#military_img").parents("div.col-lg-6").hide();

            }else{
                $("#gender").val("ذكر");
                $(".gggg").css({'display': 'inline-table'});
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


<!-- end main site work -->





  <footer>
      <div class="footerclass">
      </div>
  </footer>
</body>
</html>

    
  