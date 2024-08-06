@extends('layouts.app')
@section('custom-style')
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
@endsection
@section('content')
    <section class="login login_password">
        <div class="container">
            <div class="login__wrapper">
                <div class="login__bg">
                    <img src="{{asset('assets/img/content/login/img1.jpg')}}" class="login__bg__img" alt="">
                    <img class="login__bg__angle" src="{{asset('assets/img/content/login/angle.png')}}" alt="">
                </div>
                <h1 class="h1">סיסמה חדשה</h1>
                <p class="login__desc">ליצור סיסמה חדשה</p>
                <form action="{{route('password.update')}}" onsubmit = "return(password3());" novalidate class="login__form" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input type="hidden" name="email" value="{{ $email ?? old('email') }}">
                    <div class="login__form__password login__form__password1">
                        <button type="button" class="login__form__password__show"></button>
                        <input type="password" required class="login__form__input login__form__input_password" name="password" placeholder="סיסמה חדשה">
                        <span class="login__form__err">שְׁגִיאָה</span>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="login__form__password login__form__password2">
                        <button type="button" class="login__form__password__show"></button>
                        <input type="password" required class="login__form__input login__form__input_password" name="password_confirmation" placeholder="חזור על סיסמה חדשה">
                        <span class="login__form__err">שְׁגִיאָה</span>
                    </div>
                    <button type="submit" class="login__form__submit btn">לאפס את הסיסמה</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('custom-script')
    <script src="{{asset('assets/js/login.js')}}"></script>
@endsection
