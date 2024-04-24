@extends('welcome')
@section('content')

<!-- Featured Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Sản phẩm chất lượng</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Miễn phí giao hàng</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Đổi trả trong 14 ngày</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Hỗ trợ 24/7</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->


<!-- Categories Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <!-- <p class="text-right">15 Sản phẩm</p> -->
                
                <a href="{{URL::to('/danh-muc-san-pham/' . 19)}}" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" src="{{asset('public/frontend/img/cat-1.jpg')}}" alt="">
                </a>
                <h5 class="font-weight-semi-bold m-0">Thời trang cho nam</h5>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <!-- <p class="text-right">15 Sản phẩm</p> -->
                <a href="{{URL::to('/danh-muc-san-pham/' . 20)}}" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" src="{{asset('public/frontend/img/cat-2.jpg')}}" alt="">
                </a>
                <h5 class="font-weight-semi-bold m-0">Thời trang cho nữ</h5>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <!-- <p class="text-right">15 Products</p> -->
                <a href="{{URL::to('/danh-muc-san-pham/' . 25)}}" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" src="{{asset('public/frontend/img/cat-3.jpg')}}" alt="">
                </a>
                <h5 class="font-weight-semi-bold m-0">Thời trang cho bé</h5>
            </div>
        </div>
        
        
        <!-- <div class="col-lg-4 col-md-6 pb-1">
            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <p class="text-right">15 Products</p>
                <a href="" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" src="{{asset('public/frontend/img/cat-6.jpg')}}" alt="">
                </a>
                <h5 class="font-weight-semi-bold m-0">Giày dép</h5>
            </div>
        </div> -->
    </div>
</div>
<!-- Categories End -->


<!-- Offer Start -->
<div class="container-fluid offer pt-5">
    <div class="row px-xl-5">
        <div class="col-md-6 pb-4">
            <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                <img src="{{asset('public/frontend/img/offer-1.png')}}" alt="">
                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase text-primary mb-3">Giảm 20% cho tất cả đơn hàng</h5>
                    <h1 class="mb-4 font-weight-semi-bold">Bộ sưu tập mùa xuân</h1>
                    <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Mua ngay</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 pb-4">
            <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                <img src="{{asset('public/frontend/img/offer-2.png')}}" alt="">
                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase text-primary mb-3">Giảm 20% cho tất cả đơn hàng</h5>
                    <h1 class="mb-4 font-weight-semi-bold">Bộ sưu tập mùa đông</h1>
                    <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Mua ngay</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->

<!-- Products Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Thời trang đặc sắc Việt Nam</span></h2>
    </div>

    <div class="row px-xl-5 pb-3">
        @foreach($all_product as $key => $product)
        @if($product->category_id == 18)

        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" style="width: 300px; height: 300px;">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <!-- <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" style="text-decoration: none;">
                    </a> -->
                    <h6 class="text-truncate mb-3"> {{($product->product_name)}}</h6>

                    <div class="d-flex justify-content-center">
                        <h6>{{number_format($product->product_price).' '.'VNĐ'}}</h6>
                        <h6 class=
                        "text-muted ml-2"><del>{{number_format($product->product_price  + 25000).' '.'VNĐ'}}</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Xem chi tiết</a>
                    <!-- <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ hàng</a> -->
                </div>
            </div>
        </div>

        @endif
        @endforeach
    </div>

</div>
<!-- Products End -->


<!-- Subscribe Start -->
<!-- <div class="container-fluid bg-secondary my-5">
        <div class="row justify-content-md-center py-5 px-xl-5">
            <div class="col-md-6 col-12 py-5">
                <div class="text-center mb-2 pb-2">
                    <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Stay Updated</span></h2>
                    <p>Amet lorem at rebum amet dolores. Elitr lorem dolor sed amet diam labore at justo ipsum eirmod duo labore labore.</p>
                </div>
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-4" placeholder="Email Goes Here">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
<!-- Subscribe End -->


<!-- Products Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Thời trang nữ</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        @foreach($all_product as $key => $product)
        @if($product->category_id == 20)
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" style="width: 300px; height: 300px;">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3"> {{($product->product_name)}}</h6>
                    <div class="d-flex justify-content-center">
                        <h6>{{number_format($product->product_price).' '.'VNĐ'}}</h6>
                        <h6 class="text-muted ml-2"><del>{{number_format($product->product_price + 25000).' '.'VNĐ'}}</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Xem chi tiết</a>
                    <!-- <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ hàng</a> -->
                </div>
            </div>
        </div>
        @endif
        @endforeach



    </div>
</div>
<!-- Products End -->


<!-- Vendor Start -->
<!-- <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="vendor-item border p-4">
                        <img src="{{asset('public/frontend/img/vendor-1.jpg')}}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{asset('public/frontend/img/vendor-2.jpg')}}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{asset('public/frontend/img/vendor-3.jpg')}}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{asset('public/frontend/img/vendor-4.jpg')}}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{asset('public/frontend/img/vendor-5.jpg')}}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{asset('public/frontend/img/vendor-6.jpg')}}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{asset('public/frontend/img/vendor-7.jpg')}}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{asset('public/frontend/img/vendor-8.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Vendor End -->




@endsection