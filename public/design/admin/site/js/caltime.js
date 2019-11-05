function GetDays1(){var dropdt = new Date(document.getElementById("drop_date1").value);
var pickdt = new Date(document.getElementById("pick_date1").value);return parseInt((dropdt - pickdt) / (24 * 3600 * 1000)); }
function cal1(){if(document.getElementById("drop_date1")){
document.getElementById("numdays21").value=GetDays1();}  
var dateStart1 = new Date(document.getElementById("drop_date1").value);
var dateEnd1 = new Date(document.getElementById("pick_date1").value);
if(30 > GetDays1()){alert("يجب ان لا تقل المده عن شهر");
document.getElementById("numdays21").value = "";
document.getElementById("drop_date1").value = "";}
var specific_date1 = new Date(document.getElementById("pick_date1").value);
var current_date1 = new Date();
if(current_date1.getTime() < specific_date1.getTime()){alert("التاريخ اكبر من تاريخ اليوم");
document.getElementById("drop_date1").value = "";
document.getElementById("pick_date1").value = "";
document.getElementById("numdays21").value = "";
}}


function GetDays2(){var dropdt = new Date(document.getElementById("drop_date2").value);
var pickdt = new Date(document.getElementById("pick_date2").value);return parseInt((dropdt - pickdt) / (24 * 3600 * 1000)); }
function cal2(){if(document.getElementById("drop_date2")){
document.getElementById("numdays22").value=GetDays2();}  
var dateStart2 = new Date(document.getElementById("drop_date2").value);
var dateEnd2 = new Date(document.getElementById("pick_date2").value);
if(30 > GetDays2()){alert("يجب ان لا تقل المده عن شهر");
document.getElementById("numdays22").value = "";
document.getElementById("drop_date2").value = "";}
var specific_date2 = new Date(document.getElementById("pick_date2").value);
var current_date2 = new Date();
if(current_date2.getTime() < specific_date2.getTime()){alert("التاريخ اكبر من تاريخ اليوم");
document.getElementById("drop_date2").value = "";
document.getElementById("pick_date2").value = "";
document.getElementById("numdays22").value = "";
}}

function GetDays3(){var dropdt = new Date(document.getElementById("drop_date3").value);
var pickdt = new Date(document.getElementById("pick_date3").value);return parseInt((dropdt - pickdt) / (24 * 3600 * 1000)); }
function cal3(){if(document.getElementById("drop_date3")){
document.getElementById("numdays23").value=GetDays3();}  
var dateStart3 = new Date(document.getElementById("drop_date3").value);
var dateEnd3 = new Date(document.getElementById("pick_date3").value);
if(30 > GetDays3()){alert("يجب ان لا تقل المده عن شهر");
document.getElementById("numdays23").value = "";
document.getElementById("drop_date3").value = "";}
var specific_date3 = new Date(document.getElementById("pick_date3").value);
var current_date3 = new Date();
if(current_date3.getTime() < specific_date3.getTime()){alert("التاريخ اكبر من تاريخ اليوم");
document.getElementById("drop_date3").value = "";
document.getElementById("pick_date3").value = "";
document.getElementById("numdays23").value = "";
}}

function GetDays4(){var dropdt = new Date(document.getElementById("drop_date4").value);
var pickdt = new Date(document.getElementById("pick_date4").value);return parseInt((dropdt - pickdt) / (24 * 3600 * 1000)); }
function cal4(){if(document.getElementById("drop_date4")){
document.getElementById("numdays24").value=GetDays4();}  
var dateStart4 = new Date(document.getElementById("drop_date4").value);
var dateEnd4 = new Date(document.getElementById("pick_date4").value);
if(30 > GetDays4()){alert("يجب ان لا تقل المده عن شهر");
document.getElementById("numdays24").value = "";
document.getElementById("drop_date4").value = "";}
var specific_date4 = new Date(document.getElementById("pick_date4").value);
var current_date4 = new Date();
if(current_date4.getTime() < specific_date4.getTime()){alert("التاريخ اكبر من تاريخ اليوم");
document.getElementById("drop_date4").value = "";
document.getElementById("pick_date4").value = "";
document.getElementById("numdays24").value = "";
}}	


function GetDays5(){var dropdt = new Date(document.getElementById("drop_date5").value);
var pickdt = new Date(document.getElementById("pick_date5").value);return parseInt((dropdt - pickdt) / (24 * 3600 * 1000)); }
function cal5(){if(document.getElementById("drop_date5")){
document.getElementById("numdays25").value=GetDays5();}  
var dateStart5 = new Date(document.getElementById("drop_date5").value);
var dateEnd5 = new Date(document.getElementById("pick_date5").value);
if(30 > GetDays5()){alert("يجب ان لا تقل المده عن شهر");
document.getElementById("numdays25").value = "";
document.getElementById("drop_date5").value = "";}
var specific_date5 = new Date(document.getElementById("pick_date5").value);
var current_date5 = new Date();
if(current_date5.getTime() < specific_date5.getTime()){alert("التاريخ اكبر من تاريخ اليوم");
document.getElementById("drop_date5").value = "";
document.getElementById("pick_date5").value = "";
document.getElementById("numdays25").value = "";
}}


function GetDays6(){var dropdt = new Date(document.getElementById("drop_date6").value);
var pickdt = new Date(document.getElementById("pick_date6").value);return parseInt((dropdt - pickdt) / (24 * 3600 * 1000)); }
function cal6(){if(document.getElementById("drop_date6")){
document.getElementById("numdays26").value=GetDays6();}  
var dateStart6 = new Date(document.getElementById("drop_date6").value);
var dateEnd6 = new Date(document.getElementById("pick_date6").value);
if(30 > GetDays6()){alert("يجب ان لا تقل المده عن شهر");
document.getElementById("numdays26").value = "";
document.getElementById("drop_date6").value = "";}
var specific_date6 = new Date(document.getElementById("pick_date6").value);
var current_date6 = new Date();
if(current_date6.getTime() < specific_date6.getTime()){alert("التاريخ اكبر من تاريخ اليوم");
document.getElementById("drop_date6").value = "";
document.getElementById("pick_date6").value = "";
document.getElementById("numdays26").value = "";
}}

function GetDays7(){var dropdt = new Date(document.getElementById("drop_date7").value);
var pickdt = new Date(document.getElementById("pick_date7").value);return parseInt((dropdt - pickdt) / (24 * 3600 * 1000)); }
function cal7(){if(document.getElementById("drop_date7")){
document.getElementById("numdays27").value=GetDays7();}  
var dateStart7 = new Date(document.getElementById("drop_date7").value);
var dateEnd7 = new Date(document.getElementById("pick_date7").value);
if(30 > GetDays7()){alert("يجب ان لا تقل المده عن شهر");
document.getElementById("numdays27").value = "";
document.getElementById("drop_date7").value = "";}
var specific_date7 = new Date(document.getElementById("pick_date7").value);
var current_date7 = new Date();
if(current_date7.getTime() < specific_date7.getTime()){alert("التاريخ اكبر من تاريخ اليوم");
document.getElementById("drop_date7").value = "";
document.getElementById("pick_date7").value = "";
document.getElementById("numdays27").value = "";
}}