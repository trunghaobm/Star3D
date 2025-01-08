@extends('template')

@section('title', 'Liên hệ với chúng tôi')

@section('content')

@if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

<div class="contact-container">
    <h2>Liên hệ với chúng tôi</h2>
    <p>Hãy để lại lời nhắn và chúng tôi sẽ phản hồi sớm nhất có thể!</p>

    <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
        @csrf
        <div class="form-group">
            <label for="name">Họ và tên</label>
            <input type="text" id="name" name="name" placeholder="Nhập họ và tên" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Nhập email của bạn" required>
        </div>

        <div class="form-group">
            <label for="message">Lời nhắn</label>
            <textarea id="message" name="message" rows="5" placeholder="Nhập lời nhắn của bạn" required></textarea>
        </div>

        <button type="submit" class="submit-btn">Gửi</button>
    </form>
</div>
@endsection
