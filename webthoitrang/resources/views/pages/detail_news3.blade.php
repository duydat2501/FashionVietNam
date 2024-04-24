@extends('welcome')
@section('content')

<style>
    #header-carousel {
        display: none;
    }
</style>

<div style="margin-top: -100px;">
    <div class="container-fluid py-5">
        <div class="container py-5">

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="mb-4">
                        <a href="#" class="h1 display-5">Điểm danh 5 trang phục truyền thống Việt Nam đặc biệt nhất</a>
                    </div>
                    <div class="position-relative rounded overflow-hidden mb-3">
                        <img src="{{asset('public/frontend/news/img/tin3.png')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                        <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
                            VN Fashion
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06 phút đọc</a>
                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k Lượt xem</a>
                        <a href="#" class="text-dark link-hover me-3"><i class="fa fa-comment-dots"></i> 0 Bình luận</a>
                        <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k Chia sẻ</a>
                    </div>
                    <p class="my-4">
                        Áo dài là trang phục truyền thống của Việt Nam. Nó được coi là biểu tượng đặc trưng của văn hóa và sự thanh lịch của phụ nữ Việt Nam.

                        Áo dài gồm hai phần chính: áo và váy. Áo dài có kiểu dáng ôm sát, tôn lên vẻ đẹp và đường cong của người mặc. Áo thường dài tới đùi hoặc gối, có đường cổ cao và tay dài. Váy dài đến mắt cá chân hoặc thậm chí tới gót chân, mang lại cảm giác trang nhã và nữ tính.
                    </p>
                    <p class="my-4">
                        Trong quá khứ, áo dài được làm từ những chất liệu tự nhiên như lụa, tơ, và vải mỏng. Tuy nhiên, ngày nay, áo dài có thể được làm từ nhiều chất liệu khác nhau như satin, ren, và vải nhung. Áo dài thường được trang trí với những hoa văn, thêu thùa tinh tế và các chi tiết phụ như nút áo, khuy áo và cài áo.

                        Áo dài không chỉ được mặc trong các dịp lễ hội và cưới hỏi, mà còn là trang phục hàng ngày cho nhiều phụ nữ Việt Nam. Nó là biểu tượng của vẻ đẹp truyền thống và cũng đã trở thành biểu tượng của quốc gia.

                        Với sự phát triển của thời trang, áo dài cũng đã có những biến thể hiện đại, vừa giữ được nét truyền thống vừa thể hiện phong cách cá nhân. Áo dài Việt Nam ngày nay có thể có cắt xẻ, phối màu sắc đa dạng và các kiểu dáng mới.

                        Áo dài đã trở thành một biểu tượng độc đáo và đẹp mắt của Việt Nam, góp phần làm nổi bật văn hóa và phong cách truyền thống của quốc gia.
                    </p>

                    <div class="row g-4">
                        <div class="col-6">
                            <div class="rounded overflow-hidden">
                                <img src="{{asset('public/frontend/news/img/tin31.png')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="rounded overflow-hidden">
                                <img src="{{asset('public/frontend/news/img/tin32.png')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <p class="my-4">
                        Trang phục áo bà ba thường được phụ nữ miền Nam mặc trong các dịp lễ hội, như Tết cổ truyền, hội chợ và các buổi dạo chơi. Ngoài ra, áo bà ba cũng là một trang phục phổ biến trong cuộc sống hàng ngày của người dân miền Nam Việt Nam.

                        Áo bà ba mang trong mình nét đẹp truyền thống và phản ánh phong cách sống của người Việt Nam. Đây cũng là một biểu tượng văn hóa độc đáo, góp phần làm nổi bật sự đa dạng và phong phú của trang phục truyền thống Việt Nam.
                    </p>
                    <p class="my-4">
                        Trang phục truyền thống của dân tộc H'Mông bao gồm áo xẻ cổ, váy xòe xếp ly kèm theo xà cạp và mũ đội đầu. Trang phục này được làm từ vải lanh với nhiều màu sắc nổi bật và hoa văn đa dạng, tinh tế.
                    </p>

                    <p class="my-4">
                        Tuy nhiên, do sự phát triển của xã hội hiện đại, áo chàm đang dần bị mai một và ít được sử dụng. Quá trình chế tác phức tạp và thời gian đòi hỏi khiến việc duy trì và phổ biến áo chàm gặp khó khăn. Điều này làm mất đi một phần di sản văn hóa quý giá của các dân tộc vùng núi.

                        Áo chàm mang trong mình giá trị văn hóa sâu sắc và là biểu tượng đặc trưng của các dân tộc thiểu số. Cần đề cao và gìn giữ áo chàm để bảo tồn và truyền dịp cho các thế hệ tương lai, từ đó góp phần bảo vệ và phát huy vẻ đẹp và độc đáo của văn hóa dân tộc Việt Nam
                    </p>
                    <div class="tab-class">
                        <div class="d-flex justify-content-between border-bottom mb-4">
                            <ul class="nav nav-pills d-inline-flex text-center">
                                <!-- <li class="nav-item mb-3">
                                    <h5 class="mt-2 me-3 mb-0">Tags:</h5>
                                </li>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 bg-light rounded-pill active me-2" data-bs-toggle="pill" href="#tab-1">
                                        <span class="text-dark" style="width: 100px;">Sports</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-2">
                                        <span class="text-dark" style="width: 100px;">Magazine</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-3">
                                        <span class="text-dark" style="width: 100px;">Politics</span>
                                    </a>
                                </li> -->
                            </ul>

                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 me-3">Chia sẻ:</h5>
                                <i class="fab fa-facebook-f link-hover btn btn-square rounded-circle border-primary text-dark me-2"></i>
                                <!-- <i class="btn fab bi-twitter link-hover btn btn-square rounded-circle border-primary text-dark me-2"></i> -->
                                <i class="btn fab fa-instagram link-hover btn btn-square rounded-circle border-primary text-dark me-2"></i>
                                <i class="btn fab fa-linkedin-in link-hover btn btn-square rounded-circle border-primary text-dark"></i>
                            </div>
                        </div>
                        <!-- <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show active">
                                <div class="row g-4 align-items-center">
                                    <div class="col-3">
                                        <img src="{{asset('public/frontend/news/img/footer-4.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h3>Amelia Alex</h3>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                            but also the leap into electronic.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane fade show">
                                <div class="row g-4 align-items-center">
                                    <div class="col-3">
                                        <img src="{{asset('public/frontend/news/img/footer-5.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h3>Amelia Alex</h3>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                            but also the leap into electronic.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane fade show">
                                <div class="row g-4 align-items-center">
                                    <div class="col-3">
                                        <img src="{{asset('public/frontend/news/img/footer-6.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h3>Amelia Alex</h3>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                            but also the leap into electronic.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="bg-light rounded my-4 p-4">
                        <h4 class="mb-4">Có thể bạn cũng thích</h4>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center p-3 bg-white rounded">
                                    <img src="{{asset('public/frontend/news/img/tin2.png')}}" class="img-fluid rounded" alt="" style="height: 100px;">
                                    <div class="ms-3">
                                        <a href="{{URL::to('/detail-news2')}}" class="h5 mb-2">TOP 15 cách phối đồ với áo sơ mi form rộng</a>
                                        <p class="text-dark mt-3 mb-0 me-3"><i class="fa fa-clock"></i> 06 phút đọc</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center p-3 bg-white rounded">
                                    <img src="{{asset('public/frontend/news/img/tin1.png')}}" class="img-fluid rounded" alt="" style="height: 100px;">
                                    <div class="ms-3">
                                        <a href="{{URL::to('/detail-news1')}}" class="h5 mb-2">10 cách phối đồ với áo khoác gió bomber nữ</a>
                                        <p class="text-dark mt-3 mb-0 me-3"><i class="fa fa-clock"></i> 06 phút đọc</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light rounded p-4">
                        <h4 class="mb-4">Bình luận</h4>
                        <!-- <div class="p-4 bg-white rounded mb-4">
                            <div class="row g-4">
                                <div class="col-3">
                                    <img src="{{asset('public/frontend/news/img/footer-4.jpg')}}" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-9">
                                    <div class="d-flex justify-content-between">
                                        <h5>James Boreego</h5>
                                        <a href="#" class="link-hover text-body fs-6"><i class="fas fa-long-arrow-alt-right me-1"></i> Reply</a>
                                    </div>
                                    <small class="text-body d-block mb-3"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-white rounded mb-0">
                            <div class="row g-4">
                                <div class="col-3">
                                    <img src="{{asset('public/frontend/news/img/footer-4.jpg')}}" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-9">
                                    <div class="d-flex justify-content-between">
                                        <h5>James Boreego</h5>
                                        <a href="#" class="link-hover text-body fs-6"><i class="fas fa-long-arrow-alt-right me-1"></i> Reply</a>
                                    </div>
                                    <small class="text-body d-block mb-3"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                    </p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="bg-light rounded p-4 my-4">
                        <h4 class="mb-4">Để lại bình luận</h4>
                        <form action="#">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control py-3" placeholder="Tên đầy đủ">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control py-3" placeholder="Địa chỉ email">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" name="textarea" id="" cols="30" rows="7" placeholder="Viết bình luận của bạn tại đây"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="form-control btn btn-primary py-3" type="button">Gửi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="p-3 rounded border">
                                <div class="input-group w-100 mx-auto d-flex mb-4">
                                    <input type="search" class="form-control p-3" placeholder="Từ khóa" aria-describedby="search-icon-1">
                                    <span id="search-icon-1" class="btn btn-primary input-group-text p-3"><i class="fa fa-search text-white"></i></span>
                                </div>
                                <h4 class="mb-4">Danh mục bài viết</h4>
                                <div class="row g-2">
                                    <div class="col-12">
                                        <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                            Trang phục truyền thống
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                            Bí quyết Phối màu
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                            Phụ kiện Thời trang
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                            Làm đẹp và Thời trang
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                            Phong cách cá nhân
                                        </a>
                                    </div>
                                    <div class="col-12">
                                        <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3 mb-4">
                                            Thời trang Mùa Xuân - 2024
                                        </a>
                                    </div>
                                </div>
                                <!-- <h4 class="my-4">Stay Connected</h4>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <a href="#" class="w-100 rounded btn btn-primary d-flex align-items-center p-3 mb-2">
                                            <i class="fab fa-facebook-f btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">13,977 Fans</span>
                                        </a>
                                        <a href="#" class="w-100 rounded btn btn-danger d-flex align-items-center p-3 mb-2">
                                            <i class="fab fa-twitter btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">21,798 Follower</span>
                                        </a>
                                        <a href="#" class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-2">
                                            <i class="fab fa-youtube btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">7,999 Subscriber</span>
                                        </a>
                                        <a href="#" class="w-100 rounded btn btn-dark d-flex align-items-center p-3 mb-2">
                                            <i class="fab fa-instagram btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">19,764 Follower</span>
                                        </a>
                                        <a href="#" class="w-100 rounded btn btn-secondary d-flex align-items-center p-3 mb-2">
                                            <i class="bi-cloud btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">31,999 Subscriber</span>
                                        </a>
                                        <a href="#" class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-4">
                                            <i class="fab fa-dribbble btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white">37,999 Subscriber</span>
                                        </a>
                                    </div>
                                </div> -->
                                <h4 class="my-4">Tin tức phổ biến</h4>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="{{asset('public/frontend/news/img/avt1.png')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                    </div>
                                                    <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Thời trang</p>
                                                    <a href="#" class="h6">
                                                        10+ Cách phối đồ với áo len tay dài CỰC XINH mùa thu đông
                                                    </a>
                                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Tháng 12, 2023</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="{{asset('public/frontend/news/img/avt2.png')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                    </div>
                                                    <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Thời trang</p>
                                                    <a href="#" class="h6">
                                                        Áo polo có túi: Must-have-item của những anh chàng thanh lịch, bảnh bao
                                                    </a>
                                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Tháng 12, 2023</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="{{asset('public/frontend/news/img/avt3.png')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                    </div>
                                                    <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Trung niên</p>
                                                    <a href="#" class="h6">
                                                        Áo polo trung niên - Phong cách đơn giản, thanh lịch nhất xu hướng 2023
                                                    </a>
                                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Tháng 12, 2023</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="{{asset('public/frontend/news/img/avt4.png')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                    </div>
                                                    <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Làm đẹp</p>
                                                    <a href="#" class="h6">
                                                        TOP 15+ kiểu tóc xoăn bé trai đáng yêu và siêu sành điệu
                                                    </a>
                                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Tháng 12, 2023</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a href="#" class="link-hover btn border border-primary rounded-pill text-dark w-100 py-3 mb-4">Xem thêm</a>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-bottom my-3 pb-3">
                                            <h4 class="mb-0">Tags Thịnh hành</h4>
                                        </div>
                                        <ul class="nav nav-pills d-inline-flex text-center mb-4">
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">xu hướng</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">phối hợp</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">đánh giá</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">phụ kiện</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">màu sắc</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">bền vững</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">làm đẹp</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">trải nghiệm</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="position-relative banner-2">
                                            <img src="{{asset('public/frontend/news/img/tin23.png')}}" class="img-fluid w-100 rounded" alt="">
                                            <div class="text-center banner-content-2">
                                                <h6 class="mb-2">Áo Khoác Gió Nam Thông Minh Trượt Nước</h6>
                                                <!-- <p class="text-white mb-2">News & Magazine WP Theme</p> -->
                                                <a href="#" class="btn btn-primary text-white px-4">Xem sản phẩm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->


<!-- Single Product Start -->

<!-- Single Product End -->




<script src="{{asset('public/frontend/news/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('public/frontend/news/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('public/frontend/news/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('public/frontend/news/js/main.js')}}"></script>

@endsection