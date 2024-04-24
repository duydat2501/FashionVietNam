<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="{{asset('https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap')}}" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('public/frontend/login/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{asset('public/frontend/login/css/owl.carousel.min.css')}}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('public/frontend/login/css/bootstrap.min.css')}}">

  <!-- Style -->
  <link rel="stylesheet" href="{{asset('public/frontend/login/css/style.css')}}">

  <title>Login</title>
</head>

<body>

  @if(session('status'))
  <script>
    // Sử dụng JavaScript để hiển thị cửa sổ thông báo
    alert("{{ session('status') }}");
  </script>
  @endif

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('public/frontend/login/images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <h3>Đăng nhập</h3>
                <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form method="POST" class="my-login-validation" novalidate="" action="{{URL::to('/login-customer-login')}}">
                {{csrf_field()}}

                <div class="form-group first">
                  <label for="Email">Email</label>
                  <!-- <input type="text" class="form-control" id=""> -->
                  <input id="email" type="email" class="form-control" name="email_account" required autofocus>
                </div>
                <div class="form-group last mb-4">
                  <label for="password">Mật khẩu</label>
                  <!-- <input type="password" class="form-control" id=""> -->
                  <input id="password" type="password" class="form-control" name="password_account" required data-eye>


                </div>

                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Ghi nhớ mật khẩu</span>
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Quên mật khẩu</a></span>
                </div>

                <input type="submit" value="Đăng nhập" class="btn btn-block btn-primary">

                <span class="d-block text-left my-4 text-muted"><a href="{{URL::to('/signup-customer')}}">Chưa có tài khoản? Đăng ký</a></span>


                <!-- <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div> -->
              </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


  <script src="{{asset('public/frontend/login/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('public/frontend/login/js/popper.min.js')}}"></script>
  <script src="{{asset('public/frontend/login/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/frontend/login/js/main.js')}}"></script>
</body>

</html>