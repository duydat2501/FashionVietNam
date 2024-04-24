
@extends('welcome')
@section('content')

<style>
        #header-carousel{
        display: none;
    }
</style>
    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Liên hệ nếu có bất kỳ thắc mắc nào</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Họ tên" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Chủ đề" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" placeholder="Lời nhắn" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Gửi lời nhắn</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <h5 class="font-weight-semi-bold mb-3">Liên lạc</h5>
                <p>
                    
                Chúng tôi luôn sẵn lòng lắng nghe và hỗ trợ bạn mọi lúc. Hãy cảm thấy thoải mái liên hệ với chúng tôi để chia sẻ ý kiến, đặt câu hỏi hoặc biết thêm về sản phẩm và dịch vụ của chúng tôi. Đội ngũ chăm sóc khách hàng của chúng tôi sẽ nhanh chóng đáp lại và giúp bạn có trải nghiệm mua sắm trực tuyến thú vị và thuận tiện nhất.
                </p>
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Trụ sở 1</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>33 Ngõ 2, Yên Sở, Hoài Đức, Hà Nội</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>vnfashion@example.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+022 345 67890</p>
                </div>
                <div class="d-flex flex-column">
                    <h5 class="font-weight-semi-bold mb-3">Trụ sở 2</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>50 Ngõ 5, Yên Sở, Hoài Đức, Hà Nội</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>vnfashion_support@example.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+044 345 67890</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection