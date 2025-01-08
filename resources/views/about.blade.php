@extends('template')

@section('title', 'Về chúng tôi') <!-- Tiêu đề trang này sẽ là "Về chúng tôi" -->

@section('content')
  <!-- Content Section -->
  <section class="hero" style="background: url({{ asset('image/hero.jpg')}}) no-repeat center center/cover">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="section-title">Giới thiệu về chúng tôi</h1>
          <p class="intro-text">Chào mừng bạn đến với trang web của chúng tôi! Chúng tôi là một công ty chuyên cung cấp các giải pháp tốt nhất cho nhu cầu kinh doanh của bạn.</p>
          <p>Đội ngũ của chúng tôi bao gồm những chuyên gia đam mê, luôn nỗ lực hết mình để mang lại kết quả xuất sắc cho khách hàng.</p>
          <p>Hãy thoải mái khám phá trang web của chúng tôi và tìm hiểu thêm về các dịch vụ mà chúng tôi cung cấp.</p>
          <a href="{{ url('/') }}" class="btn btn-primary">Quay lại trang chủ</a>
        </div>
      </div>
    </div>
  </section>
@endsection
