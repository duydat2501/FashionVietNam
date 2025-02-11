@extends('welcome')
@section('content')

<style>
    #header-carousel {
        display: none;
    }
    
</style>

<div class="container-xl vieworder_customer">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2 style="margin-top:25px ; margin-bottom: 20px">Chi tiết đơn hàng</h2>
                    </div>

                </div>

                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Thứ tự</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tổng tiền</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $total_price = 0;
                        $i = 0;
                        @endphp
                        @foreach($manage_details_order as $key => $details)
                        <tr>
                            <td>
                                @php
                                $i++;
                                @endphp
                                {{$i}}
                            </td>
                            <td>{{$details->product_name}}</td>
                            <td>
                                <img src="{{ asset('public/uploads/product/'.$details->product_image) }}" height="100" width="100" alt="">
                            </td>

                            <td>
                                <input type="" disabled value="{{$details->product_sales_quantity}}" name="product_sales_quantity">
                            </td>
                            <td>{{number_format($details->product_price).' '.'VNĐ'}}</td>
                            <td>{{number_format($details->product_sales_quantity * $details->product_price).' '.'VNĐ'}}</td>
                        </tr>
                        @php
                        $total_price += $details->product_sales_quantity * $details->product_price;
                        @endphp
                        @endforeach

                    <tfoot>
                        <tr>
                            <td colspan="5"><strong>Tổng đơn hàng:</strong></td>
                            <td><strong>{{number_format($total_price).' '.'VNĐ'}}</strong></td>
                        </tr>
                    </tfoot>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>


@endsection