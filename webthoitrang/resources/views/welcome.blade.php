<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VietNamStyleFashion.com</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('public/frontend/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('public/frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
</head>

<body>
    @if(session('status'))
    <script>
        // Sử dụng JavaScript để hiển thị cửa sổ thông báo
        alert("{{ session('status') }}");
    </script>
    @endif
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">Hỏi đáp</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Trợ giúp</a>
                    <!-- <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a> -->
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="{{URL::to('/')}}" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">VN</span>Fashion</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="{{ URL::to('/tim-kiem/') }}" method="get">
                {{csrf_field()}}

                    <div class="input-group">
                        <input type="text" name="keywords_submit" class="form-control" placeholder="Tìm kiếm sản phẩm">
                        <div class="input-group-append">
                            <!-- <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span> -->

                            <button type="submit" name="search_item" class="input-group-text bg-transparent text-primary"><i class="fas fa-search"></i></button>

                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <!-- <span class="badge">0</span> -->
                </a>
                <a href="{{URL::to('/cart')}}" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <!-- <span class="badge">0</span> -->
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">


            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Danh mục sản phẩm</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Trang phục thời trang <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Trang phục nam</a>
                                <a href="" class="dropdown-item">Trang phục nữ</a>
                                <a href="" class="dropdown-item">Trang phục trẻ em</a>
                            </div>
                        </div> -->
                        @foreach($category as $key => $cate)
                        <a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}" class="nav-item nav-link"> {{($cate->category_name)}}</a>
                        @endforeach
                    </div>
                </nav>
            </div>

            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="{{URL::to('/')}}" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{URL::to('/')}}" class="nav-item nav-link active">Trang chủ</a>
                            <!-- <a href="{{URL::to('/shop')}}" class="nav-item nav-link">Cửa hàng</a> -->
                            <!-- <a href="{{URL::to('/detail')}}" class="nav-item nav-link">Chi tiết sản phẩm</a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="{{URL::to('/news')}}" class="dropdown-item">Bài viết</a>
                                    <!-- <a href="{{URL::to('/')}}" class="dropdown-item">Tin tức</a> -->

                                    <!-- <a href="{{URL::to('/checkout-customer')}}" class="dropdown-item">Thanh toán</a> -->
                                </div>
                            </div>
                            <a href="{{URL::to('/contact')}}" class="nav-item nav-link">Liên hệ</a>
                        </div>

                        @if(session('customer_name'))
                        <div class="navbar-nav ml-auto py-0">
                            <a href="" class="nav-item nav-link">{{ session('customer_name') }}</a>
                            @php
                                $customer_name = session('customer_name');
                            @endphp
                            
                            <a href="{{URL::to('/vieworder-customer/'.$customer_name)}}" class="nav-item nav-link">Xem đơn hàng</a>
                            <a href="{{URL::to('/logout-checkout')}}" class="nav-item nav-link">Đăng xuất</a>
                        </div>

                        @else
                        <div class="navbar-nav ml-auto py-0">
                            <a href="{{URL::to('/login-customer')}}" class="nav-item nav-link">Đăng nhập</a>
                            <a href="{{URL::to('/signup-customer')}}" class="nav-item nav-link">Đăng ký</a>
                        </div>

                        @endif





                    </div>
                </nav>


                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">



                        <div class="carousel-item active" style="height: 410px;">
                            <img class="img-fluid" src="{{asset('public/frontend/img/carousel-11.jpg')}}" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Giảm 10% cho đơn hàng đầu tiên của bạn</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Áo thời trang</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="{{asset('public/frontend/img/carousel-2.jpg')}}" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Giảm 10% cho đơn hàng đầu tiên của bạn</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Giá cả hợp lý</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Mua ngay</a>
                                </div>
                            </div>
                        </div>

                        

                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </div>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="{{URL::to('/')}}" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">VN</span>Fashion</h1>
                </a>
                <p>
                Khám phá bản sắc cá nhân của bạn qua từng sản phẩm tại VN Fashion.
                </p> 
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>33 Ngõ 2, Yên Sở, Hoài Đức, Hà Nội,</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>vnfashion@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Thông tin</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="{{URL::to('/')}}"><i class="fa fa-angle-right mr-2"></i>Trang chủ</a>
                            <!-- <a class="text-dark mb-2" href="{{URL::to('/shop')}}"><i class="fa fa-angle-right mr-2"></i>Our Shop</a> -->
                            <!-- <a class="text-dark mb-2" href="{{URL::to('/detail')}}"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a> -->
                            <a class="text-dark mb-2" href="{{URL::to('/cart')}}"><i class="fa fa-angle-right mr-2"></i>Giỏ hàng</a>
                            <!-- <a class="text-dark mb-2" href="{{URL::to('/checkout')}}"><i class="fa fa-angle-right mr-2"></i>Thanh toán</a> -->
                            <a class="text-dark" href="{{URL::to('/contact')}}"><i class="fa fa-angle-right mr-2"></i>Liên hệ</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Khám phá</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <!-- <a class="text-dark mb-2" href="{{URL::to('/')}}"><i class="fa fa-angle-right mr-2"></i>Home</a> -->
                            <!-- <a class="text-dark mb-2" href="{{URL::to('/shop')}}"><i class="fa fa-angle-right mr-2"></i>Our Shop</a> -->
                            <!-- <a class="text-dark mb-2" href="{{URL::to('/detail')}}"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a> -->
                            <a class="text-dark mb-2" href="{{URL::to('/danh-muc-san-pham/' . 18)}}"><i class="fa fa-angle-right mr-2"></i>Thời trang việt nam</a>
                            <a class="text-dark mb-2" href="{{URL::to('/danh-muc-san-pham/' . 19)}}"><i class="fa fa-angle-right mr-2"></i>Thời trang nam</a>
                            <a class="text-dark" href="{{URL::to('/danh-muc-san-pham/' . 20)}}"><i class="fa fa-angle-right mr-2"></i>Thời trang nữ</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Liên hệ</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Họ tên" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Email" required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">VN Fashion</a>. 
                    <!-- All Rights Reserved. Designed by -->
                    <!-- <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a><br> -->
                    <!-- Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="{{asset('public/frontend/img/payments.png')}}" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('public/frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('public/frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('public/frontend/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('public/frontend/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>

</html>