@extends('admin_layout')
@section('admin_content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="tm-block-title d-inline-block">Khách hàng</h2>
        </div>
    </div>
</div>

<head>


    <style>
        body {
            color: #566787;
            font-family: 'Roboto', sans-serif;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            min-width: 1000px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 10px;
            margin: 0 0 10px;
            min-width: 100%;
        }

        .table-title h2 {
            margin: 8px 0 0;
            font-size: 22px;
        }

        .search-box {
            position: relative;
            float: right;
        }

        .search-box input {
            height: 34px;
            border-radius: 20px;
            padding-left: 35px;
            border-color: #ddd;
            box-shadow: none;
        }

        .search-box input:focus {
            border-color: #3FBAE4;
        }

        .search-box i {
            color: #a0a5b1;
            position: absolute;
            font-size: 19px;
            top: 8px;
            left: 10px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child {
            width: 130px;
        }

        table.table td a {
            color: #a0a5b1;
            display: inline-block;
            margin: 0 5px;
        }

        table.table td a.view {
            color: #03A9F4;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #E34724;
        }

        table.table td i {
            font-size: 19px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 95%;
            width: 30px;
            height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 30px !important;
            text-align: center;
            padding: 0;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 6px;
            font-size: 95%;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Danh sách khách hàng</h2>
                        </div>

                        <div class="col-sm-4">
                            <form action="{{ URL::to('/tim-kiem-customer') }}" class="header_search" method="get">
                                {{csrf_field()}}
                                <!-- <div class="search-box"> -->
                                <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm theo tên, email, phone..." name="keywords_submit">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </form>
                        </div>
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
                                <th>#</th>
                                <th>Tên khách hàng</th>
                                <th>Email khách hàng</th>
                                
                                
                                <th>Password</th>
                                <th>Phone</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($all_customer as $key => $cus)
                            <tr>
                                <td> {{ $cus-> customer_id}}</td>
                                <td> {{$cus-> customer_name}}</td>
                                <td> {{ $cus-> customer_email}}</td>
                                
                                <td> {{ $cus-> customer_password}}</td>
                                <td>{{ $cus-> customer_phone}}</td>
                                

                                
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="clearfix">
                        <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                        <ul class="pagination">
                            <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
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
</body>

</html>
@endsection