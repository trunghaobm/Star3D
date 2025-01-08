@extends('template')

@section('title')
  Trang Chủ - Website Của Tôi
@endsection

@section('content')
  <!-- Hero Section -->
  <section class="hero" style="background: url({{ asset('image/hero.jpg')}}) no-repeat center center/cover">
    <h1>Chào mừng đến với Website của tôi</h1>
    <p>Khám phá các dự án và bài viết của tôi</p>
    <a href="#" class="cta">Tìm hiểu thêm</a>
  </section>

  <!-- Content Section -->
  <section class="content">
    <div class="card">
      <img src="{{ asset('image/image.jpg')}}" alt="Post 1">
      <h2>Bài viết 1</h2>
      <a href="#">Read More</a>
    </div>
    <div class="card">
      <img src="{{ asset('image/image.jpg')}}" alt="Post 2">
      <h2>Bài viết 2</h2>
      <a href="#">Read More</a>
    </div>
    <div class="card">
      <img src="{{ asset('image/image.jpg')}}" alt="Post 3">
      <h2>Bài viết 3</h2>
      <a href="#">Read More</a>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact">
    <h2>Liên hệ</h2>

    <!-- Contact Form -->
    <form action="mailto:example@example.com" method="post" enctype="text/plain">
      <input type="text" name="name" placeholder="Tên của bạn">
      <input type="email" name="email" placeholder="Email của bạn">
      <textarea name="message" placeholder="Tin nhắn của bạn"></textarea>
      <button type="submit">Gửi</button>
    </form>
  </section>
@endsection

