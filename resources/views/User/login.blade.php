<html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>خبرة للاتصالات وتقنية المعلومات</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{url('design/css/login.css')}}" />

</head>
<body>
  <menu>
    <center>
      <div id="alldiv">
        <img src="{{url('design/img/logo.png')}}" class="logoimg"><br><br><br><br>


        <form id="login" action="{{url('doLogin')}}" method="post">
          @csrf
          @if(count($errors))
                @foreach($errors->all() as $error)
                  <div class="errormessage">{{$error}}</div>
                @endforeach
            @endif
            @if(session()->has('success'))
                <div class="sucssesmessage">{{session('success')}}</div>
            @endif

            <div class="input-holder">
                  <table style="width: 100%;">
                      <td>
                          <input class="logintext" type="email" placeholder="البريد الالكتروني" name="email">
                      </td>
                      <td>
                        <i class="fa fa-user icon"></i>
                      </td>
                  </table>
                </div>
                <br>
                <br>
                <div class="input-holder">
                    <table style="width: 100%;">
                        <td>
                            <input class="logintext" type="password" placeholder="كلمة المرور" name="password">
                        </td>
                        <td>
                            <i class="fa fa-lock"></i>
                        </td>
                    </table>
                </div>
                <br>
                <a href="" class="resetpass">استعاده الرقم السرى</a>
                <br>
                <button class="sendlogin newuserdiv2">دخول</button>
        </form>
        <a href="{{url('register')}}" class="url">انشاء حساب مستخدم جديد</a>
      </div>
    </center>
  </menu>
</body>
</html>