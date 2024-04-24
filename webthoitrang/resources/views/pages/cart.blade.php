@extends('welcome')
@section('content')

<style>
    #header-carousel {
        display: none;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Lấy phần tử cần thêm lớp
        var element = document.querySelector('.col-lg-3.d-none.d-lg-block a.btn');

        // Thêm lớp vào phần tử nếu nó tồn tại
        if (element) {
            element.classList.add('shadow-none', 'd-flex', 'align-items-center', 'justify-content-between', 'bg-primary', 'text-white', 'w-100');
        }
    });
</script>
<!-- Cart Start -->

<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Size</th>
                        <th>Màu sắc</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <?php
                    $content = Cart::content();
                    ?>
                    @foreach($content as $v_content)

                    <tr>
                        <td class="align-middle" style="">
                            <img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" alt="" style="width: 50px;"> {{$v_content->name}}
                            <span>{{$v_content->sizes}}</span>
                            <span>{{$v_content->colors}}</span>
                        </td>
                        <td class="align-middle">{{number_format($v_content->price).' '.'VNĐ'}}</td>
                        <td class="align-middle">{{$v_content->options->sizes}}</td>
                        <td class="align-middle">{{$v_content->options->colors}}</td>

                        <td class="align-middle">

                            <form action="{{URL::to('/update-cart-quantity')}}" method="post">
                                {{csrf_field(URL::to('/update-cart-quantity'))}}
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" name="cart_quantity" value="{{$v_content->qty}}" style="width: ">
                                    <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart">
                                    <div></div>
                                    <input type="submit" class="btn btn-sm btn-primary btn-plus" value="update" name="update_qty" class="" style="width: 62px;">
                                </div>
                            </form>
                        </td>
                        <td class="align-middle"><?php
                                                    $subtotal = $v_content->price * $v_content->qty;
                                                    echo number_format($subtotal) . ' ' . 'VNĐ';
                                                    ?></td>
                        <td class="align-middle">
                            <a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}" title="Delete" data-toggle="tooltip" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-5" action="">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Mã giảm giá">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Nhập mã giảm giá</button>
                    </div>
                </div>
            </form>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Giỏ hàng</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Tổng tiền</h6>
                        <h6 class="font-weight-medium">{{Cart::subtotal().' '.'VNĐ'}}</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Phí vận chuyển</h6>
                        <h6 class="font-weight-medium">Miễn phí</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Tổng hóa đơn</h5>
                        <h5 class="font-weight-bold">{{Cart::subtotal().' '.'VNĐ'}}</h5>
                    </div>


                    <?php
                    $customer_id = Session::get('customer_id');
                    if ($customer_id != null) {
                    ?>
                        <?php

                        if (Cart::subtotal() == 0) {
                        ?>
                            <a href="">
                                <!-- <button class="btn btn-block btn-primary my-3 py-3">Vui lòng thêm sản phẩm vào giỏ hàng!</button> -->
                            </a>
                        <?php
                        } else {
                        ?>
                            <a href="{{ URL::to('/checkout') }}">
                                <button class="btn btn-block btn-primary my-3 py-3">Tiến hành thanh toán</button>
                            </a>
                        <?php
                        }
                        ?>

                    <?php
                    } else {
                    ?>
                        <a href="{{ URL::to('/login-checkout') }}">
                            <button class="btn btn-block btn-primary my-3 py-3">Vui lòng đăng nhập!</button>
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->

@endsection