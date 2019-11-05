<html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>خبرة للاتصالات وتقنية المعلومات</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{url('design/admin/site/css/services.css')}}" />
<link rel="stylesheet" href="{{url('design/admin/site/css/navbar.css')}}" />
<script type="text/javascript" src="{{url('design/admin/site/js/jquery-3.4.1.min.js')}}" ></script>
<style>
.textnavbarpc.f {
    background: green;
    border-radius: 8px;
}



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
  <td class="tdright"> 
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
 <td class="tdleft"> 
<div class="holderrightpc left" >
<div id="divsortphone-one" class="dropdownone" style="display:block">
    <div class="loadone"> 
	
	
	<div class="holderdropdown">

	<div id="leftdropdown-one">
	
	<ul class="ultext">
	<li><a href=""><i class="fa fa-handshake-o"></i> تمويل الموظفين</a></li>
	<li><a href=""><i class="fa fa-handshake-o"></i> طلب راتب اجازة مقدم</a></li>
	<li><a href=""><i class="fa fa-handshake-o"></i> طلب اجر اضافى</a></li>
	</ul>
	</div>
         </div>
	


</div></div>
</div> </td> </table>
</menu>
</center>
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


</script>

<footer>
<div class="footerclass">


</div>


</footer>
</body>
</html>