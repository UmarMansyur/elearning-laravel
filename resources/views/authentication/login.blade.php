@extends('layouts.index')
@section('content')
<section class="auth d-flex">
  <div class="auth-left bg-main-50 flex-center p-24">
    <img src="/assets/images/thumbs/auth.svg" alt="auth" class="img-fluid" style="max-width: 600px;">
  </div>
  <div class="auth-right py-40 px-24 flex-center flex-column">
    <div class="auth-right__inner mx-auto w-100">
      <a href="index.html" class="auth-right__logo">
        <img src="/assets/images/logo/logo.svg" alt="">
      </a>
      <h2 class="mb-8">Selamat Datang! &#128075;</h2>
      <p class="text-gray-600 text-15 mb-32">
        Silahkan masuk untuk melanjutkan!
      </p>
      @if($errors->any())
      <div class="alert alert-danger">
        <div class="d-flex gap-8">
          <i class="ph ph-x-circle-fill text-24 text-danger"></i>
          <span class="text-15">
            {{ $errors->first() }}
          </span>
        </div>
      </div>
      @endif
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-24">
          <label for="username" class="form-label mb-8 h6">NISN/NUPTK</label>
          <div class="position-relative">
            <input type="text" class="form-control py-11 ps-40" id="username" name="username" placeholder="NISN/NUPTK">
            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex">
              <i class="ph ph-user"></i>
            </span>
          </div>
        </div>
        <div class="mb-24">
          <label for="current-password" class="form-label mb-8 h6">Password</label>
          <div class="position-relative">
            <input type="password" class="form-control py-11 ps-40" id="current-password" name="password" placeholder="Password">
            <button type="button" class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash" id="#current-password"></button>
            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex">
              <i class="ph ph-lock"></i>
            </span>
          </div>
        </div>
        <div class="mb-32 flex-between flex-wrap gap-8">
          <div class="form-check mb-0 flex-shrink-0">
            <input class="form-check-input flex-shrink-0 rounded-4" type="checkbox" value="" id="remember">
            <label class="form-check-label text-15 flex-grow-1" for="remember">Ingat Saya</label>
          </div>
          <a href="forgot-password.html" class="text-main-600 hover-text-decoration-underline text-15 fw-medium">
            Forgot Password?
          </a>
        </div>
        <button type="submit" class="btn btn-main rounded-pill w-100">Sign In</button>
      </form>
    </div>
  </div>
</section>
@endsection