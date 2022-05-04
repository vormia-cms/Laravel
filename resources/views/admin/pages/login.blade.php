{{--Extend the Layout--}}
@extends('admin.layouts.log')

{{-- Content --}}
@section('content')
    <form action="#">
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" class="form-control form-control-xl" placeholder="Username">
            <div class="form-control-icon">
                <i class="bi bi-person"></i>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" class="form-control form-control-xl" placeholder="Password">
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
        </div>
        <div class="form-check form-check-lg d-flex align-items-end">
            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                Keep me logged in
            </label>
        </div>
        <a href="{{ url('/vrm/dashboard') }}" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</a>
    </form>
@endsection

{{-- Section About --}}
@section('about')
    <h1 class="auth-title">Log in.</h1>
    <p class="auth-subtitle mb-2">To access the vormia awesomeness, kindly login first.</p>
@endsection

{{-- Section Next --}}
@section('next')
    <div class="text-center mt-5 text-lg fs-4">
        <p class="forgot-pass"><a class="font-bold" href="#">Forgot password?</a>.</p>
    </div>
@endsection
