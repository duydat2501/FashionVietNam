<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('public/frontend/login/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('public/frontend/login/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/login/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('public/frontend/login/css/style.css')}}">

    <title>Đăng ký</title>
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
                                <h3>Đăng ký</h3>
                                <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                            </div>
                            <form method="post" class="my-login-validation" novalidate="" action="{{ URL::to('/add-customer') }}">
                                {{csrf_field()}}

                                <div class="form-group first">
                                    <label for="username">Tên người dùng</label>
                                    <input type="text" class="form-control" id="username" name="customer_name">
                                </div>

                                <div class="form-group">

                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" id="Email" name="customer_email">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="text" class="form-control" id="" name="customer_phone">
                                </div>

                                <div class="form-group">

                                    <label for="Password">Mật khẩu</label>
                                    <input type="password" class="form-control" id="Password" name="customer_password">
                                </div>

                                <div class="form-group">
                                    <label for="repass">Nhập lại mật khẩu</label>
                                    <input type="password" class="form-control" id="" name="repass">
                                </div>





                                <!-- <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password">
                                </div> -->

                                <div style="margin-top: 20px;"></div>

                                <input type="submit" value="Đăng ký" class="btn btn-block btn-primary">

                                <span class="d-block text-left my-4 text-muted"><a href="{{URL::to('/login-customer')}}">Đã có tài khoản? Đăng nhập</a></span>


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