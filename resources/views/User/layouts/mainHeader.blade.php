<header>
    <img src="{{url('design/img/header.jpg')}}" class="headerimg" alt="">
    <br>
    <div class="signouticone">
    <a href="{{url('logOut')}}">
        <div class="signouticonetext">
            <i class="fa fa-sign-out" aria-hidden="true"></i> خروج
        </div>
    </a>
    </div>
    @if(\Auth::user()->infoCompleted == true)
            <div class="infouser">
                <table class="userinfortitle">
                    <tbody>
                        <tr>
                           <td><div class="username2">اسم الموظف: {{\Auth::user()->name}}</div></td>
                            <td><div class="username2">المسمى الوظيفى: {{\App\Models\Job::find(\App\Models\JobOrder::where('user_id',\Auth::id())->first()->job_id)->jobName}}</div></td>
                            <td><div class="username2">رقم الوظيفة: 21006</div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    @endif
</header>
<menu>