@extends('welcome')
@section('content')
<style>
    #header-carousel {
        display: none;
    }
</style>

<!-- Checkout Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <form class="needs-validation was-validated" action="{{URL::to('/save-checkout-customer')}}" method="post">
            {{csrf_field()}}
            <div class="col-lg-12">
                <div class="mb-4">

                    <h4 class="font-weight-semi-bold mb-4">Thông tin thanh toán</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Tên khách hàng</label>
                            <input class="form-control" type="text" placeholder="John" name="shipping_name">
                        </div>
                        <!-- <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" placeholder="Doe">
                        </div> -->
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="example@email.com" name="shipping_email">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Số điện thoại</label>
                            <input class="form-control" type="text" placeholder="+123 456 789" name="shipping_phone">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" type="text" placeholder="123 Street" name="shipping_address">
                        </div>
                        <!-- <div class="col-md-6 form-group">
                            <label>Address Line 2</label>
                            <input class="form-control" type="text" placeholder="123 Street">
                        </div> -->
                        <div class="col-md-6 form-group">
                            <label>Quốc gia</label>
                            <select class="custom-select" name="shipping_country">
                                <option value="Argentina">Argentina</option>
                                <option value="Australia">Australia</option>
                                <option value="Belgium">Bỉ</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Canada">Canada</option>
                                <option value="Chile">Chile</option>
                                <option value="China">Trung Quốc</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Dominican Republic">Cộng hòa Dominicana</option>
                                <option value="Egypt">Egypt</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Fiji">Fiji</option>
                                <option value="France">Pháp</option>
                                <option value="Germany">Đức</option>
                                <option value="Ghana">Ghana</option>
                                <option value="India">Ấn Độ</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Italy">Ý</option>
                                <option value="Japan">Nhật Bản</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Netherlands">Hà Lan</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Palau">Palau</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Russia">Nga</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Korea">Hàn Quốc</option>
                                <option value="Spain">Tây Ban Nha</option>
                                <option value="Sweden">Thụy Điển</option>
                                <option value="Switzerland">Thụy Sĩ</option>
                                <option value="Thailand">Thái Lan</option>
                                <option value="Tonga">Tonga</option>
                                <option value="UK">Anh</option>
                                <option value="USA" selected>Hoa Kỳ</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Việt Nam</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Thành phố</label>
                            <input class="form-control" type="text" name="shipping_city" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Tiểu bang</label>
                            <input class="form-control" type="text" name="shipping_state" placeholder="New York">
                        </div>

                        <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input class="form-control" type="text" name="shipping_zipcode" placeholder="123">
                        </div>
                        <!-- <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="newaccount">
                                <label class="custom-control-label" for="newaccount">Create an account</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="shipto">
                                <label class="custom-control-label" for="shipto"  data-toggle="collapse" data-target="#shipping-address">Ship to different address</label>
                            </div>
                        </div> -->
                    </div>

                </div>
                <!-- <div class="collapse mb-4" id="shipping-address">
                    <h4 class="font-weight-semi-bold mb-4">Shipping Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" placeholder="John">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" placeholder="Doe">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" placeholder="+123 456 789">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 1</label>
                            <input class="form-control" type="text" placeholder="123 Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 2</label>
                            <input class="form-control" type="text" placeholder="123 Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Country</label>
                            <select class="custom-select">
                                <option selected>United States</option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" type="text" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" type="text" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input class="form-control" type="text" placeholder="123">
                        </div>
                    </div>
                </div> -->

            </div>
            <div class="col-lg-12">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Tổng hóa đơn</h4>
                    </div>
                    <?php
                    $content = Cart::content();
                    // echo '<pre>';
                    // print_r($content);
                    // echo '</pre>';
                    ?>

                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Sản phẩm</h5>
                        @foreach($content as $v_content)

                        <div class="d-flex justify-content-between">
                            <img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" alt="" style="width: 50px;">
                            <p>{{$v_content->name}}</p>
                            <p>{{$v_content->qty}}</p>
                            <p>{{$v_content->options->sizes}}</p>
                            <p>{{$v_content->options->colors}}</p>
                            <p>{{number_format($v_content->price).' '.'VNĐ'}}</p>
                        </div>
                        @endforeach
                        <br>
                        <hr class="mt-0">
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
                    </div>
                </div>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Phương thức thanh toán</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment_option" value="2" required id="COD">
                                <label class="custom-control-label" for="COD">Thanh toán khi nhận hàng</label>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Direct Check</label>
                            </div>
                        </div>
                        <div class="">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                            </div>
                        </div> -->
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <button type="submit" name="send_order" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Đặt hàng</button>
                    </div>
                </div>
            </div>


        </form>
    </div>
</div>
<!-- Checkout End -->

@endsection