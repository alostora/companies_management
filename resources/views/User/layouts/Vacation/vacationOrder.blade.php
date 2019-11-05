
<div class="infopage"><i class="fa fa-file-text-o"></i> الخدمات والاجراءت </div>
<table style="width: 100%;"> 

  	<td class="tdright" valign="top"> 
	  	@include('User/layouts/leftsidebar')
	</td> 
 	<td class="tdleft" valign="top">

		<div class="holderrightpc left service" >
			<div id="divsortphone-one" class="dropdownone" style="display:block">
			    <div class="loadone"> 
					
					<div class="holderdropdown">


						<form action="" class="">
							
							<div class="textsendpage">
								<div class="holderinput reso">
									<select id="reason"   name="Reason">
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
									</select>
								</div>
							</div>

							<div class="textsendpage">
								<div class="holderinput reso">
									<select id="reason" name="Reason">
										<option value="">السبب </option>
									</select>
								</div>
							</div>

							<div class="textsendpage">
								<div class="holderinput date">	
									تاريخ البداية 
									<input type="date" class="dateinput" name="startdate" placeholder="تاريخ البداية">
									<i class="fa fa-calendar" aria-hidden="true"></i>
								</div>
							</div>


							<div class="textsendpage">	
								<div class="holderinput date">
									تاريخ النهاية 
									<input type="date" class="dateinput" name="enddate" placeholder="تاريخ النهاية">
									<i class="fa fa-calendar" aria-hidden="true"></i>
								</div>
							</div>


							<div class="textsendpage">	
								<div class="holderinput text">
									<input type="text" class="infoinput" name="info" placeholder="ملاحظات">
								</div>
							</div>

							<!-- <div class="textsendpage">	
								<select name="usermang" id="usermang" class="selectpicker form-control"   data-live-search="true" data-live-search="true"  oninvalid="alert('رجاء اختر نوع الاجازة');" required  data-hide-disabled="true" style="width:100%">
									<option value="" selected> الموظف المكلف</option>
								</select>
							</div>

							<div class="textsendpage">	
								<select name="enddate" id="enddate" class="selectpicker form-control"   data-live-search="true" data-live-search="true"  oninvalid="alert('رجاء اختر نوع الاجازة');" required  data-hide-disabled="true" style="width:100%">
									<option value="" selected>اسم السياق</option>
								</select>
							</div> -->

							<button type="submit" class="busub">تاكيد الطلب</button>
						</form>	

			        </div>

				</div>
			</div>
		</div> 
	</td> 


</table>



