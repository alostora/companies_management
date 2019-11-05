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
                <img src="{{url('design/img/logo.png')}}" class="logoimg">
                <form id="login" action="{{url('doRegister')}}" method="post">
                  @csrf

                  @if(count($errors))
                        @foreach($errors->all() as $error)
                          <div class="errormessage">{{$error}}</div>
                        @endforeach
                    @endif
                    @if(session()->has('success'))
                      <div class="sucssesmessage">{{session('success')}}</div>
                    @endif
                  
                    <br>
                    <div class="input-holder">
                      <table style="width: 100%;">
                        <td> <input class="logintext" type="text" placeholder="الاسم" name="name"></td>
                      <td><i class="fa fa-user icon"></i></td>
                    </table>
                    </div><br>
                    
                    
                    <div class="input-holder">
                      <table style="width: 100%;">
                       <td>  <input class="logintext" type="email" placeholder="البريد الالكترونى" name="email"></td>
                      <td><i class="fa fa-envelope" aria-hidden="true"></i></td>
                    </table>
                    </div><br>
                    
                    
                     <div class="input-holder">
                       <table style="width: 100%;">
                        <td><input class="logintext" type="password" placeholder="كلمة المرور" name="password"></td>
                      <td><i class="fa fa-lock"></i></td>
                    </table>
                    </div> <br>
                    
                    
                       <div class="input-holder">
                         <table style="width: 100%;">
                            <td><input class="logintext" type="password" placeholder="تاكيد كلمة المرور" name="confirmPassword"></td>
                          <td><i class="fa fa-lock"></i></td>
                        </table>
                      </div> 
                  <br>
                  <input class="sendlogin regi" value="تسجيل" type="submit">


                </form>
                <div class="alreadyuser">
                    <a href="{{url('login')}}" class="resetpass">امللك حساب بالفعل</a>
                </div>
            </div>
        </center>
    </menu>
</body>
</html>



<script type="text/javascript">
  
/*setTimeout(function () {
   window.location.href = "blog.html"; 
}, 1000); */


</script>