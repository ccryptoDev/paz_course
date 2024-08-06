@extends('frontend.layouts.app')
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
                <h1 class="h1">לאפס את הסיסמה</h1>
                <p class="login__desc">הזן את האימייל שלך ואנו נשלח לך קישור לאיפוס הסיסמה שלך</p>
                <form onsubmit="return(password1());" novalidate action="{{route('password.email')}}" name="loginForm"
                      class="login__form" method="POST">
                    @csrf
                    <div class="login__form__login">
                        <input type="text" required class="login__form__input login__form__input_login @error('email') login__form__error @enderror" name="email"
                               placeholder="אימייל" value="{{old('email')}}">
                        <span class="login__form__err">אימייל</span>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <button type="submit" class="login__form__submit btn">התחברות</button>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('custom-script')
    <script src="{{asset('assets/js/login.js')}}"></script>
@endsection
