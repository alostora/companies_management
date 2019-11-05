<style>
.anotherStyle {
    width: max-content;
    background: #88bce1;
    color: #fff;
    padding: 5px;
    font-size: 22px;
    border-radius: 3px;
    position: absolute;
    left: 15px;
}
.anotherStylemm {
    width: max-content;
    background: #88bce1;
    color: #fff;
    padding: 5px;
    font-size: 22px;
    border-radius: 3px;
    position: absolute;
    left: 15px;
    top: 270px;
}
 .signouticonetextmmm {
    color: #fff;
}
</style>

<link rel="stylesheet" href="{{url('design/css/cv.css')}}" />

    <menu>
        <div id="holdersite">
            
            <div style="background: #49879e;box-shadow: inset 0 0 10px black;direction: ltr;">
                <table style="width: 100%;">
                    <tbody>
                        <tr style="
    background: #358ca7;
">
                            <td class="intd">
                                <div class="holderimg">
                                    <img id="blah" src="{{url('uploads/users/'.$user->id.'/'.$user->userImage)}}" alt="your image" />
                                </div>
                            </td>
                            <td>
                                @if(!empty($user->userJobOrderInfo))
                                <div style="color: #fff;font-size: 35px;text-align: center;">C.V</div>
                                <div style="color: #fff;font-size: 20px;text-align: center;"> No.{{$user->userJobOrderInfo->CV_Code}}</div>
                                @endif
                            </td>
                            <td class="intd" style="direction: rtl;">
                                <div class="holderimg">
                                    <img id="blah" src="{{url('design/img/logo.png')}}" alt="your image" />
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>



 @if(!empty($user->userPersonalInfo))

            <div class="titlrtexthed">البيانات الشخصية 
<div class="anotherStylemm">
    <a href="{{url('logOut')}}">
        <div class="signouticonetextmmm">
            <i class="fa fa-sign-out" aria-hidden="true"></i> خروج
        </div>
    </a>
</div>
            </div>
                <table id="tableinsert" >
                    <tbody>
                        <tr>
                            <td class="intd">اللقب</td>
                            <td class="intd">الاسم الاول</td>
                            <td class="intd">الاسم الثانى</td>
                            <td class="intd">الاسم الثالث</td>
                            <td class="intd">اسم الجد</td>
                            <td class="intd">اسم العائلة</td>
                            
                        </tr>
                        <tr>
                           
<td class="outtd"><input class="inputtext ar nospace" type="text" value="السيد" readonly></td>
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userPersonalInfo->firstName}}" readonly></td>
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userPersonalInfo->lastName}}" required readonly></td>
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userPersonalInfo->fatherName}}" required readonly></td>
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userPersonalInfo->grandFatherName}}" required readonly></td>
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userPersonalInfo->familyName}}" required readonly></td>
                            
                        </tr>
                    </tbody>
                </table>
            
            <table id="tableinsert" >
                <tbody>
                    <tr>
                        <td class="intd">الرقم القومي   </td>
                        <td class="intd">تاريخ الاصدار  </td>
                        <td class="intd">تاريخ الانتهاء </td>
                        <td class="intd">الجنس  </td>
                        <td class="intd">تاريخ الميلاد</td>
                        <td class="intd">الجنسية</td>
                        <td class="intd">الوظيفة الحالية</td>
                    </tr>
                    <tr>
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userPersonalInfo->personalCardNumber}}" readonly></td>
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userPersonalInfo->cardReleaseDate}}" readonly></td>
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userPersonalInfo->cardExpireDate}}" required readonly></td>
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userPersonalInfo->sex}}" required readonly></td>
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userPersonalInfo->birthDay}}" required readonly></td>
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userPersonalInfo->nationality}}" required readonly></td>
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userPersonalInfo->currentJobCard}}" required readonly></td>

                    </tr>
                </tbody>
            </table>
            <br>
            

            <div class="titlrtexthed">الديانة والحالة الاجتماعية</div>
            <table id="tableinsert" >
                <tbody>
                    <tr>
                        <td class="intd">الديانة</td>
                        <td class="intd">الحالة الاجتماعية</td>
                    </tr>
                    <tr>
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userPersonalInfo->religion}}" readonly></td>
                        @if($user->userPersonalInfo->socialStatus == "married")
<td class="outtd"><input class="inputtext ar nospace" type="text" value="متزوج" readonly></td>
                        @elseif($user->userPersonalInfo->socialStatus == "widowed")
<td class="outtd"><input class="inputtext ar nospace" type="text" value="ارمل" readonly></td>
                        @elseif($user->userPersonalInfo->socialStatus == "single")
<td class="outtd"><input class="inputtext ar nospace" type="text" value="اعزب" readonly></td>
                        @elseif($user->userPersonalInfo->socialStatus == "divorced")
<td class="outtd"><input class="inputtext ar nospace" type="text" value="مطلق" readonly></td>
                        @endif
                    </tr>
                </tbody>
            </table>



 <br>
            <div class="titlrtexthed">الموقف من التجنيد</div>
            <table id="tableinsert" >
                <tbody>
                    <tr>
                        <td class="intd">الحالة</td>
                        <td class="intd">تاريخ انهاء الخدمة</td>
                    </tr>

                    <tr>
                        @if($user->userPersonalInfo->armyStatus == "wanted")
<td class="outtd"><input class="inputtext ar nospace" type="text" value="مطلوب للتجنيد" readonly></td>
                        @elseif($user->userPersonalInfo->armyStatus == "notWanted")
<td class="outtd"><input class="inputtext ar nospace" type="text" value="اعفاء نهائي" readonly></td>
                        @elseif($user->userPersonalInfo->armyStatus == "delayed")
<td class="outtd"><input class="inputtext ar nospace" type="text" value="مؤجل" readonly></td>
                        @elseif($user->userPersonalInfo->armyStatus == "done")
<td class="outtd"><input class="inputtext ar nospace" type="text" value="ادي الخدمة العسكرية" readonly></td>
                        @endif
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userPersonalInfo->armyDate}}" readonly></td>
                    </tr>
                </tbody>
            </table>
@endif
            
            
            
        @if(!empty($user->userEducationInfo))
 <br>
            <div class="titlrtexthed">الشهادات العلمية</div>
            <table id="tableinsert" >
                <tbody>
                    <tr>
                        <td class="intd">المؤهل الدراسى</td>
                        <td class="intd">التخصص </td>
                        <td class="intd">التقدير</td>
                        <td class="intd">جهة التخرج</td>
                        <td class="intd">تاريخ التخرج</td>
                    </tr>
                    
            @foreach($user->userEducationInfo as $key=>$edu)    
                    <tr>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$edu->qualificationType}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$edu->specialization}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$edu->educationGrading}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$edu->handGraduation}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$edu->graduationDate}}" readonly></td>
                    </tr>
                @endforeach
                    
                </tbody>
            </table>
            @endif

            
            @if(count($user->userCoursesInfo))
 <br>
            <div class="titlrtexthed">الدورات التدريبية</div>
            <table id="tableinsert" >
                <tbody>
                    <tr>
                        <td class="intd">اسم الدورة التدريبية</td>
                        <td class="intd">الجهة العلمية</td>
                        <td class="intd">تاريخ الالتحاق</td>
                        <td class="intd">تاريخ الانتهاء</td>
                        <td class="intd">مدة الدورة التدريبية</td>
                        <td class="intd">التقدير</td>
                    </tr>
                    
                @foreach($user->userCoursesInfo as $key=>$cours)
                    <tr>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$cours->courseName}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$cours->handGraduation}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$cours->joinDate}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$cours->endDate}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$cours->courseDuration}} يوم" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$cours->courseGrading}}" readonly></td>
                        
                    </tr>
                @endforeach
                    
                </tbody>
            </table>
            @endif

            
            @if(count($user->userLanguage))
 <br>
            <div class="titlrtexthed">اللغات</div>
            <table id="tableinsert" >
                <tbody>
                    <tr>
                        <td class="intd"> اللغة</td>
                        <td class="intd">مستوى الكتابة</td>
                        <td class="intd">مستوى القراءة</td>
                        <td class="intd">مستوى التحدث</td>
                    </tr>
                    
                @foreach($user->userLanguage as $lang)
                    <tr>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$lang->langName}}" readonly></td>
                        @if($lang->write == "good")
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="جيد" readonly></td>
                        @elseif($lang->write == "veryGood")
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="جيد جدا" readonly></td>
                        @elseif($lang->write == "excellent")
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="ممتاز" readonly></td>
                        @endif
                        @if($lang->read == "good")
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="جيد" readonly></td>
                        @elseif($lang->read == "veryGood")
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="جيد جدا" readonly></td>
                        @elseif($lang->read == "excellent")
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="ممتاز" readonly></td>
                        @endif
                        @if($lang->speak == "good")
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="جيد" readonly></td>
                        @elseif($lang->speak == "veryGood")
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="جيد جدا" readonly></td>
                        @elseif($lang->speak == "excellent")
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="ممتاز" readonly></td>
                        @endif
                    </tr>
                @endforeach
                    
                </tbody>
            </table>
            @endif


            @if(!empty($user->userEmergencyFriendsInfo))
 <br>
               
            <div class="titlrtexthed">اشخاص يمكن الرجوع اليهم فى حالة الطوارئ (لا قدر الله)</div>
            <table id="tableinsert" >
                <tbody>
                    <tr>
                        <td class="intd">الاسم </td>
                        <td class="intd">الوظيفة</td>
                        <td class="intd">الهاتف</td>
                        <td class="intd">العنوان</td>
                    </tr>
                     @foreach($user->userEmergencyFriendsInfo as $key=>$friend)
                    <tr>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$friend->friendName}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$friend->friendWork}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$friend->friendMobile}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$friend->friendAdress}}" readonly></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                
            @endif

            @if(count($user->userPartnerInfo))
 <br>
            <div class="titlrtexthed">معلومات الزوج/الزوجة</div>
            <table id="tableinsert" >
                <tbody>
                    <tr>
                        <td class="intd"> الاسم</td>
                        <td class="intd">الرقم القومي</td>
                        <td class="intd">تاريخ الميلاد</td>
                        <td class="intd">نوع العلاقة</td>
                    </tr>
                    
                    @foreach($user->userPartnerInfo as $key=>$partner)
                    <tr>
            <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$partner->partnerName}}" readonly></td>
            <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$partner->personalCardNumber}}" readonly></td>
            <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$partner->birthDate}}" readonly></td>
                        @if($partner->relativeRelation == "wife")
            <td class="outtd"><input class="inputtext ar nospace" type="text" value="زوجة" readonly></td>
                        @elseif($partner->relativeRelation == "husband")
            <td class="outtd"><input class="inputtext ar nospace" type="text" value="زوج" readonly></td>
                        @endif
                    </tr>
            @endforeach
                    
                </tbody>
            </table>
            @endif

            
            @if(!empty($user->userWorkInfo))
            @if(!empty($user->userWorkInfo[0]->companyName))
            <div class="titlrtexthed">الخبرات السابقة إبتداء بآخر وظيفة</div>
            @foreach($user->userWorkInfo as $key=>$work)
            <table id="tableinsert" >
                <tbody>
                    <tr>
                        <td class="intd">اسم الشركة</td>
                        <td class="intd">المسمي الوظيفي</td>
                        <td class="intd">تاريخ بدأ العمل</td>
                        <td class="intd">تاريخ انهاء العمل  </td>
                        <td class="intd">مدة العمل</td>
                    </tr>
                    <tr>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$work->companyName}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$work->position}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$work->startWork}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$work->endWork}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$work->workDuration}} يوم" readonly></td>
                    </tr>

                </tbody>
            </table>
            <table id="tableinsert" >
                <tbody>
                    <tr>
                        <td class="intd">الراتب</td>
                        <td class="intd">المهام الوظيفيى</td>
                        <td class="intd">سبب ترك العمل</td>
                        <td class="intd">اسم المدير</td>
                        <td class="intd">هاتف المدير</td>
                    </tr>
                    <tr>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$work->salary}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$work->missions}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$work->reasonForLeaving}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$work->managerName}}" readonly></td>
                        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$work->managerPhone}}" readonly></td>
                    </tr>
                </tbody>
            </table>
            @endforeach
            @endif
            @endif


 <br>
            <div class="titlrtexthed">العنوان المؤقت</div>
            <table id="tableinsert" >
                <tbody>
                    <tr>
                        <td class="intd">المحافظة</td>
                        <td class="intd">المدينة</td>
                        <td class="intd"> العنوان بالكامل</td>
                    </tr>
                    @if(!empty($user->userAdressInfo))
                    @foreach($user->userAdressInfo as $key=>$adress)
                        @if($adress->adressStatus == "current")
                        <tr>
        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$adress->governoment}}" readonly></td>
        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$adress->city}}" readonly></td>
        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$adress->compeleteAdress}}" readonly></td>
                        </tr>
                        @endif
                    @endforeach
                    @endif
                </tbody>
            </table>
            <br>


            <div class="titlrtexthed">العنوان الدائم</div>
            <table id="tableinsert" >
                <tbody>
                <tr>
                    <td class="intd">المحافظة</td>
                    <td class="intd">المدينة</td>
                    <td class="intd"> العنوان بالكامل</td>
                </tr>
                     @if(!empty($user->userAdressInfo))
                    @foreach($user->userAdressInfo as $key=>$adress)
                        @if($adress->adressStatus == "past")
                        <tr>
        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$adress->governoment}}" readonly></td>
        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$adress->city}}" readonly></td>
        <td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$adress->compeleteAdress}}" readonly></td>
                        </tr>
                        @endif
                    @endforeach
                    @endif
                </tbody>
            </table> <br>




            <div class="titlrtexthed">معلومات التأمين</div>
            <table id="tableinsert" >
                <tbody>
                <tr>
                    <td class="intd">حالة التأمين</td>
                    @if(!empty($user->userIncuranceInfo) && $user->userIncuranceInfo->insuranceStatus != "havent")
                    <td class="intd">مكتب التأمين</td>
                    <td class="intd">الرقم التأميني</td>
                    @endif
                </tr>
                    @if(!empty($user->userIncuranceInfo))
                        <tr>
                            @if($user->userIncuranceInfo->insuranceStatus == "havent")
<td class="outtd"><input class="inputtext ar nospace" type="text" value="غير مؤمن علية" readonly></td>
                            @elseif($user->userIncuranceInfo->insuranceStatus == "haveAndWork")
<td class="outtd"><input class="inputtext ar nospace" type="text" value="غير مؤمن علية ويعمل" readonly></td>
                            @elseif($user->userIncuranceInfo->insuranceStatus == "haveAndNotWork")
<td class="outtd"><input class="inputtext ar nospace" type="text" value="غير مؤمن علية ولايعمل" readonly></td>
                            @endif
                            @if(!empty($user->userIncuranceInfo) && $user->userIncuranceInfo->insuranceStatus != "havent")
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userIncuranceInfo->insuranceOffice}}" readonly></td>
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userIncuranceInfo->insuranceNumber}}" readonly></td>
                            @endif
                        </tr>
                    @endif     
                </tbody>
            </table>            
            
            




@if(!empty($user->userCommunicationInfo))
            <br>
            <div class="titlrtexthed">معلومات الاتصال</div>
            <table id="tableinsert" >
                <tbody>
                <tr>
                    <td class="intd">الهاتف الاول</td>
                    <td class="intd">الهاتف الثاني</td>
                </tr>
                    
                        <tr>
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userCommunicationInfo->firstMobile}}" readonly></td>
<td class="outtd"><input class="inputtext ar nospace" type="text" value="{{$user->userCommunicationInfo->secondMobile}}" readonly></td>

                        </tr>
                         
                </tbody>
            </table>
            @endif
            <br>


        <br>
        <center>
            <button class="butoncv" onclick="printPage()" style="color:white;background-color:green;border-radius: 5px;width: 150px;height:30px;padding:3px;">Print this page</button>
        </center>
        
   
    <script>
        function printPage() {      
            window.print();
        }
    </script>
            
            
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>User Information</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>-->
