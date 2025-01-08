@extends('template')

@section('title', 'Bài viết')

@section('content')
<div class="blog-section">
  <h1>Bài viết mới nhất</h1>
  <div class="blog-grid">
    @for ($i = 0; $i < 100; $i++)
      <div class="blog-card">
        <img src="{{ asset('image/image.jpg')}}" alt="Bài viết 1">
        <h3><a href="#" class="blog-title">Tiêu đề bài viết {{ $i + 1 }}</a></h3>
        <p>Mô tả bài viết {{ $i + 1 }}...</p>
        <a href="#" class="read-more">Đọc thêm</a>
      </div>
    @endfor
  </div>
</div>
@endsection