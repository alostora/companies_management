<!DOCTYPE html>
<html>
<head>
    <title>completePersonal</title>
</head>
<body style="text-align: center;">



<!-- start user accept conditions and choose jobe -->

    <form action="{{url('confirmConditionAndChooseJobe')}}" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{\Auth::id()}}">
        <div>
            <select name="job_id">
                <option value="">choose job ..</option>
                @if(!empty(\App\Models\Job::get()))
                    @foreach(\App\Models\Job::get() as $job)
                    <option value="{{$job->id}}">{{$job->jobName}}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div>
            <input type="submit" value="accept">
        </div>
        <div>
            <a href="{{url('logOut')}}">not accept</a>
        </div>

    </form>




<!--  user accept conditions and choose jobe -->








<!--start completeUserPersonal -->
    <h2>completeUserPersonal</h2>

    @if(count($errors))
      @foreach($errors->all() as $error)
        <div>{{$error}}</div>
      @endforeach
    @endif
    @if(session()->has('success'))
        <div>{{session('success')}}</div>
    @endif
    <form action="{{url('completeUserPersonal')}}" method="post">
        @csrf
        <div>
            <input type="text" name="firstName" placeholder="firstName">
        </div>
        <div>
            <input type="text" name="fatherName"  placeholder="fatherName">
        </div>
        <div>
            <input type="text" name="lastName"  placeholder="lastName">
        </div>
        <div>
            <input type="text" name="grandFatherName" placeholder="grandFatherName">
        </div>
        <div>
            <input type="text" name="familyName" placeholder="familyName">
        </div>




        <div>
            <input type="text" name="personalCardNumber"  placeholder="personalCardNumber">
        </div>
        <div>
            <input type="date" name="cardExpireDate" placeholder="cardExpireDate">
        </div>
        <div>
            <input type="text" name="nationality" placeholder="nationality">
        </div>
        <div>
            <input type="text" name="sex" placeholder="sex">
        </div>




        <div>
            <input type="date" name="birthDay" placeholder="birthDay">
        </div>
        <div>
            <input type="text" name="birthPlace" placeholder="birthPlace">
        </div>
        <div>
            <input type="text" name="religion" placeholder="religion">
        </div>
        <div>
            <input type="text" name="socialStatus" placeholder="socialStatus">
        </div>


        <div>
            <input type="text" name="armyStatus" placeholder="armyStatus">
        </div>
        <div>
            <input type="date" name="armyDate" placeholder="armyDate">
        </div>


        <input type="hidden" name="user_id" value="{{\Auth::id()}}">
        <div>
            <input type="submit" value="completeUserPersonal">
        </div>
    </form>

<!-- end completeUserPersonal -->

<!-- start completeUserCommunication -->

    <h2>completeUserCommunication</h2>

    @if(count($errors))
      @foreach($errors->all() as $error)
        <div>{{$error}}</div>
      @endforeach
    @endif
    @if(session()->has('success'))
        <div>{{session('success')}}</div>
    @endif
    <form action="{{url('completeUserCommunication')}}" method="post">
        @csrf
        <div>
            <input type="text" name="firstMobile" placeholder="firstMobile">
        </div>
        <div>
            <input type="text" name="secondMobile" placeholder="secondMobile">
        </div>
        <div>
            <input type="text" name="landPhone" placeholder="landPhone">
        </div>
        
        <h1>العنوان الحالى</h1>
        <div>
            <input type="text" name="governoment[]" placeholder="governoment">
        </div>
        <div>
            <input type="text" name="city[]" placeholder="city">
        </div>
        <div>
            <input type="text" name="referenecePersoneName[]" placeholder="referenecePersoneName">
        </div>
        <div>
            <input type="text" name="referenecePersoneMobile[]" placeholder="referenecePersoneMobile">
        </div>
        <div>
            <input type="text" name="compeleteAdress[]" placeholder="compeleteAdress">
        </div>
        <div>
            <input type="hidden" name="adressStatus[]" value="current">
        </div>

        <h1>العنوان الدائم</h1>
        <div>
            <input type="text" name="governoment[]" placeholder="governoment">
        </div>
        <div>
            <input type="text" name="city[]" placeholder="city">
        </div>
        <div>
            <input type="text" name="referenecePersoneName[]" placeholder="referenecePersoneName">
        </div>
        <div>
            <input type="text" name="referenecePersoneMobile[]" placeholder="referenecePersoneMobile">
        </div>
        <div>
            <input type="text" name="compeleteAdress[]" placeholder="compeleteAdress">
        </div>
        <div>
            <input type="hidden" name="adressStatus[]" value="past">
        </div>

        <div>
            <input type="submit" value="submit user communicate">
        </div>
    </form>

 <!-- start completeUserCurrentAdress -->




 <!-- start completeUserEducation  -->

    <h2>completeUserEducation</h2>

    @if(count($errors))
      @foreach($errors->all() as $error)
        <div>{{$error}}</div>
      @endforeach
    @endif
    @if(session()->has('success'))
        <div>{{session('success')}}</div>
    @endif
    <form action="{{url('completeUserEducation')}}" method="post">
        @csrf



        <h3>user education</h3>
        <div>
            <input type="text" name="qualificationType[]" placeholder="qualificationType">
        </div>
        <div>
            <input type="text" name="specialization[]" placeholder="specialization">
        </div>
        <div>
            <input type="text" name="educationGrading[]" placeholder="educationGrading">
        </div>
        <div>
            <input type="text" name="handGraduation[]" placeholder="handGraduation">
        </div>
        <div>
            <input type="date" name="graduationDate[]" placeholder="graduationDate">
        </div>


        <h3>user courses</h3>
        <div>
            <input type="text" name="courseName[]" placeholder="courseName">
        </div>
        <div>
            <input type="text" name="handGraduation1[]" placeholder="handGraduation">
        </div>
        <div>
            <input type="date" name="joinDate[]" placeholder="joinDate">
        </div>
        <div>
            <input type="date" name="endDate[]" placeholder="endDate">
        </div>
        <div>
            <input type="text" name="courseGrading[]" placeholder="courseGrading">
        </div>


        <h3>user language</h3>
        <div>
            <input type="text" name="langName[]" placeholder="langName">
        </div>
        <div>
            <input type="text" name="write[]" placeholder="write">
        </div>
        <div>
            <input type="text" name="read[]" placeholder="read">
        </div>
        <div>
            <input type="text" name="speak[]" placeholder="speak">
        </div>
        <div>
            <input type="text" name="printSpeed[]" placeholder="printSpeed">
        </div>
        <div>
            <input type="text" name="understandingSpeed[]" placeholder="understandingSpeed">
        </div>



        
        <div>
            <input type="submit" value="completeUserEducation">
        </div>
    </form>

 


<!-- start completeUserIncurance --> 


    <h2>completeUserIncurance</h2>

    @if(count($errors))
      @foreach($errors->all() as $error)
        <div>{{$error}}</div>
      @endforeach
    @endif
    @if(session()->has('success'))
        <div>{{session('success')}}</div>
    @endif
    <form action="{{url('completeUserIncurance')}}" method="post">
        @csrf
        <div>
            <input type="text" name="insuranceStatus" placeholder="insuranceStatus">
        </div>
        <div>
            <input type="text" name="insuranceOffice" placeholder="insuranceOffice">
        </div>
        <div>
            <input type="text" name="insuranceNumber" placeholder="insuranceNumber">
        </div>
        


        <input type="hidden" name="user_id" value="{{\Auth::id()}}">
        <div>
            <input type="submit" value="completeUserIncurance">
        </div>
    </form>

 <!-- end completeUserIncurance -->



 <!-- start completeUserWork --> 


    <h2>completeUserWork</h2>

    @if(count($errors))
      @foreach($errors->all() as $error)
        <div>{{$error}}</div>
      @endforeach
    @endif
    @if(session()->has('success'))
        <div>{{session('success')}}</div>
    @endif
    <form action="{{url('completeUserWork')}}" method="post">
        @csrf

        <div>
            <input type="text" name="companyName[]" placeholder="companyName">
        </div>

        <div>
            <input type="text" name="managerName[]" placeholder="managerName">
        </div>


        
        <div>
            <input type="date" name="startWork[]" placeholder="startWork">
        </div>
        <div>
            <input type="date" name="endWork[]" placeholder="endWork">
        </div>
        <div>
            <input type="text" name="salary[]" placeholder="salary">
        </div>
        <div>
            <input type="text" name="missions[]" placeholder="missions">
        </div>
        <div>
            <input type="text" name="position[]" placeholder="position">
        </div>
        <div>
            <input type="text" name="managerPhone[]" placeholder="managerPhone">
        </div>
        <div>
            <input type="text" name="reasonForLeaving[]" placeholder="reasonForLeaving">
        </div>
        

        <div>
            <input type="submit" value="completeUserWork">
        </div>
    </form>

 <!-- end completeUserWork -->





 <!-- start completeUserPartner --> 


    <h2>completeUserPartner</h2>

    @if(count($errors))
      @foreach($errors->all() as $error)
        <div>{{$error}}</div>
      @endforeach
    @endif
    @if(session()->has('success'))
        <div>{{session('success')}}</div>
    @endif
    <form action="{{url('completeUserPartner')}}" method="post">
        @csrf
        <div>
            <input type="text" name="partnerName[]" placeholder="partnerName">
        </div>
        <div>
            <input type="text" name="personalCardNumber[]" placeholder="personalCardNumber">
        </div>
        <div>
            <input type="text" name="relativeRelation[]" placeholder="relativeRelation">
        </div>
        <div>
            <input type="date" name="birthDate[]" placeholder="birthDate">
        </div>
        
        

        <div>
            <input type="submit" value="completeUserPartner">
        </div>
    </form>

 <!-- end completeUserPartner -->




 <!-- start completeUserEmergencyFriends --> 


    <h2>completeUserEmergencyFriends</h2>

    @if(count($errors))
      @foreach($errors->all() as $error)
        <div>{{$error}}</div>
      @endforeach
    @endif
    @if(session()->has('success'))
        <div>{{session('success')}}</div>
    @endif
    <form action="{{url('completeUserEmergencyFriends')}}" method="post">
        @csrf
        <div>
            <input type="text" name="friendName[]" placeholder="friendName">
        </div>
        <div>
            <input type="text" name="friendWork[]" placeholder="friendWork">
        </div>
        <div>
            <input type="text" name="friendMobile[]" placeholder="friendMobile">
        </div>
        
        
        

        <div>
            <input type="submit" value="completeUserEmergencyFriends">
        </div>
    </form>
 <!-- end completeUserEmergencyFriends -->


    <hr>
    <a href="#">
        <?php date_default_timezone_set('Africa/Cairo'); ?>
        @if(\App\User::where('id',Auth::id())->with('userInterViewEmployer')->first()->userInterViewEmployer->interviewDate == date('Y-m-d'))
        @if(\App\User::where('id',Auth::id())->with('userInterViewEmployer')->first()->userInterViewEmployer->interviewTime <= date("H:i"))
            <h2>{{date("H:i")}} <span>---</span> {{strtotime(date("H:i")) + (60*60)}}</h2>
            <h2>{{\App\User::where('id',Auth::id())->with('userInterViewEmployer')->first()->userInterViewEmployer->interviewTime}}</h2>
            @endif
        @endif
        <hr>
        {{date('Y-m-d')}}
        <hr>
        
    </a>
    <hr>


</body>
</html>