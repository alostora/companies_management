<html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>خبرة للاتصالات وتقنية المعلومات</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{url('design/admin/site/css/services.css')}}" />
<link rel="stylesheet" href="{{url('design/admin/site/css/navbar.css')}}" />
<link rel="stylesheet" href="{{url('design/admin/site/css/formpage.css')}}">
<script type="text/javascript" src="{{url('design/admin/site/js/jquery-3.4.1.min.js')}}" ></script>
<style>
.texttd.coloraddvacation {background: #4192d7;border-radius: 8px;}
.addvactionside { background:#4192d7;color:#fff;padding: 5px;border-radius: 3px;}
.addvation.dropdownbbmkb{display:block}
</style>
</head>
<body>
<header>
<img src="{{url('design/admin/site/img/header.jpg')}}" class="headerimg" alt="logo">

<div class="infouser">
	<table class="userinfortitle">
	<tbody>
		<tr>
			<td><div class="username2">اسم الموظف: سامح الشلقانى</div></td>
			<td><div class="username2">المسمى الوظيفى: مدير تنفيذى</div></td>
			<td><div class="username2">رقم الوظيفة: 21002</div></td>
		</tr>
	</tbody>
	</table>
</div>
</header>
<menu>
<div id="holdersite">
<div class="infopage"><i class="fa fa-file-text-o"></i> الخدمات والاجراءت </div>
  <table style="width: 100%;"> 
  <td class="tdright" valign="top"> 
<div class="holderrightpc right">

    <button id="clicktwo" class="texttd colormyusers" onClick="parent.location='{{url("myusers")}}'" ><i class="fa fa-users" aria-hidden="true"></i> موظفينى <i class="fa fa-angle-left"></i></button>
    <button id="clickone" class="texttd colorprofile" onClick="parent.location='{{url("profile")}}'"> <img src="{{url('design/admin/site/img/data.png')}}" class="iconesv"> الملف الشخصى <i class="fa fa-angle-left"></i></button>   
		
	<button id="clicktwo" class="texttd coloraddvacation leftclick-one"><i class="fa fa-file-text-o"></i> الخدمات والاجراءت <i class="fa fa-angle-left drop"></i></button>
	<div id="leftdropdown-one" class="addvactiondrop dropdownbbmkb">	
	<ul class="ultext">
	
	<li class="leftclick-one" >طلبات الموارد البشرية</li>
		<div id="leftdropdown-one" style="width: max-content;">	
			<ul class="ultext">
			<li><a href="{{url('addvacation')}}" class="addvactionside"><i class="fa fa-file-text-o"></i> طلب اجازة</a></li>
			<li><a href=""><i class="fa fa-pencil-square"></i> طلب اجازة اختبارية</a></li>
			<li><a href=""><i class="fa fa-files-o"></i> خطاب تعريف وظيفى</a></li>
			<li><a href=""><i class="fa fa-plane"></i> تأشيرة زيارة</a></li>
			<li><a href=""><i class="fa fa-graduation-cap"></i> طلب موافقة دراسية</a></li>
			<li><a href=""><i class="fa fa-undo"></i> طلب تاكيد عن بعد الاجازة</a></li>
			<li><a href=""><i class="fa fa-file-text-o"></i> طلب مستندات</a></li>
			<li><a href=""><i class="fa fa-money"></i> طلب مصاريف دراسية</a></li>
			<li><a href=""><i class="fa fa-heartbeat"></i> طلب اشتراك بنادى صحى</a></li>
			<li><a href=""><i class="fa fa-ticket"></i> طلب تذاكر</a></li>
			</ul>
		</div>	
		
    <li class="leftclick-one" >الطلبات المالية </li>
		<div id="leftdropdown-one" style="display:none;width: max-content;">	
			<ul class="ultext">
				<li><a href=""><i class="fa fa-handshake-o"></i> تمويل الموظفين</a></li>
				<li><a href=""><i class="fa fa-handshake-o"></i> طلب راتب اجازة مقدم</a></li>
				<li><a href=""><i class="fa fa-handshake-o"></i> طلب اجر اضافى</a></li>
			</ul>
		</div>	
		
	<li class="leftclick-one" >  رحلات العمل</li>
			<div id="leftdropdown-one" style="display:none;width: max-content;">	
				<ul class="ultext">
					<li><a href=""><i class="fa fa-handshake-o"></i> طلب مصاريف رحلة</a></li>
					<li><a href=""><i class="fa fa-handshake-o"></i> طلب تأشيرة رحلة عمل</a></li>	
				</ul>
		    </div>	
			
    <li class="texttd leftclick-one" >التأمين الطبى</li>
		<div id="leftdropdown-one" style="display:none;width: max-content;">	
			<ul class="ultext">
				<li><a href=""><i class="fa fa-handshake-o"></i> طلب بطاقة تأمين طبى جديد</a></li>
				<li><a href=""><i class="fa fa-handshake-o"></i> طلب بدل فاقد بطاقة تامين طبى</a></li>
				<li><a href=""><i class="fa fa-handshake-o"></i> طلب الغاء بطاقة تامين طبى</a></li>
			</ul>
		</div>	
		
		
	<li class="leftclick-one" > تعويض مصاريف حكومية</li>
	   <div id="leftdropdown-one" style="display:none;width: max-content;">
		<ul class="ultext">
			<li><a href=""><i class="fa fa-handshake-o"></i> طلب تعويض تجديد اقامة</a></li>
			<li><a href=""><i class="fa fa-handshake-o"></i> طلب تعويض فيزا خروج وعودة</a></li>
			<li><a href=""><i class="fa fa-handshake-o"></i> طلب تعويض فيزا دائمة</a></li>
		</ul>
	  </div>
	
	
	</ul>
	</div>	   
	<button id="clicktwo" onClick="parent.location='{{url("PendingRequests")}}'" class="texttd pendingre"><img src="{{url('design/admin/site/img/touch.png')}}" class="serviceicone"> الطلبات المعلقة <i class="fa fa-angle-left"></i></button>
	  
	<button id="clicktwo" onClick="parent.location='{{url("Vieworders")}}'" class="texttd colorvieordes"><i class="fa fa-file" aria-hidden="true"></i> عرض الطلبات <i class="fa fa-angle-left"></i></button>
	   
	<button id="clicktwo"  class="texttd colorsettingsnotion leftclick-one"><i class="fa fa-gear"></i> اعدادات <i class="fa fa-angle-left drop"></i></button>
	<div id="leftdropdown-one"  class="settingsnotidas dropdownbbmkb">	
	<ul class="ultext">
	<li onClick="parent.location='{{url("settingsdashboard")}}'" class="addvaction side">لوحة بيانتى </li>
	<li onClick="parent.location='{{url("settingsnotifications")}}'" class="lidot notifications"> قائمة التبليغات</li>
	</ul>
	</div>	

</div>
</td> 
 <td class="tdleft" valign="top"> 
<div class="holderrightpc left service"  style="width: 100%;">
<div id="divsortphone-one" class="dropdownone" style="display:block">
    <div class="loadone"> 
	
	
	<div class="holderdropdown">


<form action="" class="">	

<style>
#tableinsertaddvac td, #tableinsert th {
    border: 1px solid #ddd;
    padding: 0;
    text-align: center;
    font-size: 15px;
    font-weight: bold;
    padding-bottom: 7px;
    padding-top: 7px;
}
#tableinsertaddvac tr:nth-child(even) {
    background-color: #f2f2f2;
}
input.inputtext {
    padding: 7px;
    border-radius: 7px;
    border: transparent;
    box-shadow: 0 0 1px 0px black;
    font-size: 15px;
    text-align: center;
    width: 79%;
    outline: none;
}
select.personal.selct{
    padding: 7px;
    border-radius: 7px;
    border: transparent;
    box-shadow: 0 0 1px 0px black;
    font-size: 15px;
    text-align: center;
    width: 79%;
    outline: none;
}
table#tableinsertaddvac {
    width: 100%;
}
#tableinsertaddvac .intd:hover {
    background: #88bce1;
    color: #fff;
}

button.busub:hover {
    background: #71d371;;
}
</style>
		
	        <table id="tableinsertaddvac" class="optionBoxaddvac">
            <tbody>
                <tr>
                    <td class="intd">نوع الاجازة</td>
                    <td class="intd">السبب</td>
                    <td class="intd">تاريخ البداية</td>
                    <td class="intd">تاريخ الانتهاء</td>
					
	

                </tr>
                <tr class="blockcours">
			
                    <td class="outtd">
                        <select class="personal selct" name="write[]" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')">
                    		<option value="">اختر ...</option>
							<option value="" selected>نوع الاجازة</option>
							<option value="اجازة بدون راتب" > اجازة بدون راتب</option>
							<option value="اجازة الاعمال التطوعية" > اجازة الاعمال التطوعية</option>
							<option value="اجازة حج" > اجازة حج</option>
							<option value="اجازة مرضية"> اجازة مرضية</option>
							<option value="اجازة مولود جديد"> اجازة مولود جديد</option>
							<option value="اجازة نصف يوم"> اجازة نصف يوم</option>
							<option value="اجازة نقل" > اجازة نقل</option>
							<option value="اجازة وفاة قريب"> اجازة وفاة قريب</option>
							<option value="بدل راحة" > بدل راحة</option>
                    	</select><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext ar" type="text" name="handGraduation1[]" placeholder="السبب" value="" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
                    <td class="outtd">
                        <input class="inputtext" id="drop_dateadvac" type="date" required  onchange="caladvac()" name="joinDate[]" placeholder="تاريخ الالتحاق" value=""  required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>

		                <td class="outtd">
                        <input class="inputtext" id="pick_dateadvac" type="date" required  onchange="caladvac()" name="joinDate[]" placeholder="تاريخ الالتحاق" value=""  required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
				
                </tr>
            </tbody>
        </table>	
		
		
		        <table id="tableinsertaddvac" class="optionBoxaddvac">
            <tbody>
                <tr>
                   <td class="intd">ملاحظات</td>
					<td class="intd">مدة الاجازة</td>
                  

                </tr>
                <tr class="blockcours">
			
                    <td class="outtd">
                        <input class="inputtext ar" type="text" id="drop_date" onchange="cal()" name="endDate[]" placeholder="ملاحظات" value="" required oninvalid="this.setCustomValidity('برجاء ملء هذا الحقل')" oninput="setCustomValidity('')"><span class="message"><div id="arrow"></div></span>
                    </td>
					
       
  	                <td><input value="0"  class="inputtext" id="numdays2advac" readonly> يوم</td>
					
                </tr>
            </tbody>
        </table>
<br>

<center>
<button type="submit" class="busub">تاكيد الطلب</button>
</center>

</form>	

<script type="text/javascript">
       function GetDaysadvac(){
                var dropdt = new Date(document.getElementById("pick_dateadvac").value);
                var pickdt = new Date(document.getElementById("drop_dateadvac").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }


        function caladvac(){
 	       if(document.getElementById("drop_dateadvac")){
            document.getElementById("numdays2advac").value=GetDaysadvac();
        }  
			
		var dateStartadvac = new Date(document.getElementById("pick_dateadvac").value);
		var dateEndadvac = new Date(document.getElementById("drop_dateadvac").value);


		if(Date.parse(dateStartadvac) < Date.parse(dateEndadvac)){
			alert("تاريخ الانتهاء اقل من تاريخ الالتحاق");
			document.getElementById("numdays2advac").value = "";
			document.getElementById("drop_dateadvac").value = "";
			
		} 
		
var specific_dateadvac = new Date(document.getElementById("drop_dateadvac").value);
var current_dateadvac = new Date();
if(current_dateadvac.getTime() < specific_dateadvac.getTime())
{
			alert("التاريخ اكبر من تاريخ اليوم");
document.getElementById("drop_dateadvac").value = "";
document.getElementById("pick_dateadvac").value = "";
document.getElementById("numdays2advac").value = "";
}
    }
</script>


         </div>
	


</div></div>
</div> </td> </table>
</menu>
</center>
<script>$(".addvactiondrop").css("display","block");</script>
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
$('.inputtext.ar').keyup(function() {
                if (this.value.match(/[^أ-ي-ء ]/g)) {
                    this.value = this.value.replace(/[^أ-ي-ء ]/g, '');
                     alert ("من فضلك اكتب اللغة العربية فقط");//put any message here!!!
                }
            });

</script>

<footer>
<div class="footerclass">


</div>


</footer>
</body>
</html>