<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Website giới thiệu về tôi và các dự án của tôi.">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>@yield("title")</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <!-- Header -->
  <header>
    <div class="logo"><img src="{{ asset('logo/LOGO.svg')}}" alt="Logo"></div>
    <nav>
      <ul>
        <li><a href="{{ route('index')}}">Trang chủ</a></li>
        <li><a href="{{ route('about')}}">Giới thiệu</a></li>
        <li><a href="{{ route('article')}}">Bài viết</a></li>
        <li><a href="{{ route('contact.index')}}">Liên hệ</a></li>
      </ul>
    </nav>
    <div class="right">
      <input type="text" placeholder="Tìm kiếm">
      <select>
        <option value="vn">Tiếng Việt</option>
        <option value="en">English</option>
      </select>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
  <!-- Footer -->
  <footer>
    <div class="contact-info">
      <p>Điện thoại: 0123456789</p>
      <p>Email: info@example.com</p>
    </div>
    <div class="social-icons">
      <a href="#"><img class="icon" src="{{ asset('logo/facebook.png')}}" alt="Facebook"></a>
      <a href="#"><img class="icon" src="{{ asset('logo/twitter.png')}}" alt="Twitter"></a>
    </div>
    <div class="terms">
      <a href="#">Chính sách bảo mật</a> | <a href="#">Điều khoản sử dụng</a>
    </div>
  </footer>
</body>

</html>