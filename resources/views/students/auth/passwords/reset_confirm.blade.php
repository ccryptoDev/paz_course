@extends('layouts.app')
@section('custom-style')
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
@endsection
@section('content')
    <section class="login login_green login_password">
        <div class="container">
            <div class="login__wrapper">
                <div class="login__bg">
                    <img src="{{asset('assets/img/content/login/img1.jpg')}}" class="login__bg__img" alt="">
                    <img class="login__bg__angle" src="{{asset('assets/img/content/login/angle1.png')}}" alt="">
                </div>
                <h1 class="h1">איפוס הסיסמה בהצלחה!</h1>
                <a class="login__form__submit btn" href="{{route('login')}}">התחבר עכשיו</a>
            </div>
        </div>
    </section>
@endsection
