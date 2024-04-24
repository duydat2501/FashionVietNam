@extends('welcome')
@section('content')

<style>
    #header-carousel {
        display: none;
    }


</style>


<head>

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>

    <div class="container order">
        <div class="row">
        </div>
        <div class="container-xl order_customer">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2>ĐƠN MUA HÀNG</h2>
                            </div>
                            <!-- <div class="col-sm-4">
                            <form action="{{ URL::to('/tim-kiem-manageorder') }}" class="header_search" method="post">
                                {{csrf_field()}}
                                
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm theo mã hóa đơn" name="keywords_submit">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                                
                            </form>
                        </div> -->
                        </div>

                        <div class="row">
                            <div class="col-12 text-left">
                                <h7 class="tm-block-title d-inline-block" style="color: red;">
                                    <?php
                                    $message = Session::get('message');
                                    if ($message) {
                                        echo $message;
                                        Session::put('message', null);
                                    }
                                    ?>
                                </h7>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Mã hóa đơn</th>
                                    <!-- <th>Tổng giá tiền</th> -->
                                    <th>Tình trạng</th>
                                    <!-- <th>Hoàn thành</th>
                                <th>Đã hủy</th> -->
                                    <!-- <th>Tình trạng đơn hàng</th> -->
                                    <th>Ngày đặt hàng</th>
                                    <th>Xem đơn</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($manage_order as $key => $ord)
                                <tr>
                                    <td>{{$ord-> order_code}}</td>

                                    <td>
                                        <?php if ($ord->order_status == 1) echo "Chờ xác nhận";
                                        else if ($ord->order_status == 2) echo 'Giao hàng thành công';
                                        else echo 'Đơn hàng bị hủy'; ?>
                                    </td>

                                    <td>{{ $ord-> created_at}}</td>
                                    <td>
                                        <a href="{{URL::to('/viewdetails-order-customer/'.$ord->order_code)}}" class="edit" title="View" data-toggle="tooltip">Xem chi tiết đơn hàng</a>

                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                        <br>
                        <div class="clearfix">
                            <div class="hint-text"><b>1</b> trên tổng <b>1</b> trang</div>
                            <ul class="pagination">
                                <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                <li class="page-item active"><a href="#" class="page-link" style="z-index: 3;">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- order mobile -->


    <!--  -->
</body>

</html>

@endsection