@extends('frontend.layouts.app')
@section('custom-style')
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
@endsection
@section('content')
    <section class="login">
        <div class="container">
            <div class="login__wrapper">
                <div class="login__bg">
                    <img src="{{asset('assets/img/content/login/img.jpg')}}" class="login__bg__img" alt="">
                    <img class="login__bg__angle" src="{{asset('assets/img/content/login/angle.png')}}" alt="">
                </div>

                <h1 class="h1">הירשם</h1>

                <form onsubmit = "return(signUp());" novalidate  action="{{route('user.store', 'user.login')}}" class="login__form" method="POST">
                    @csrf
                    <div class="login__form__login">
                        <input type="text" required 
                            class="login__form__input login__form__input_login @error('name') login__form__error @enderror" 
                            name="name" value="{{old('name')}}" placeholder="שֵׁם">
                        <span class="login__form__err">שֵׁם</span>
                        @if($errors->has('name'))
                            <small class="d-block text-danger">{{$errors->first('name')}}</small>
                        @endif
                    </div>
                    {{-- @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror --}}

                    <div class="login__form__login">
                        <input type="text" required 
                            class="login__form__input login__form__input_login @error('email') login__form__error @enderror" 
                            name="email" value="{{old('email')}}" placeholder="אימייל">
                        <span class="login__form__err">שְׁגִיאָה</span>
                        @if($errors->has('email'))
                            <small class="d-block text-danger">{{$errors->first('email')}}</small>
                        @endif
                    </div>
                    {{-- @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror --}}

                    <div class="login__form__password login__form__password1">
                        <button type="button" class="login__form__password__show"></button>
                        <input type="password" required class="login__form__input login__form__input_password @error('password')login__form__error @enderror" name="password" placeholder="סיסמה">
                        <span class="login__form__err">שְׁגִיאָה</span>
                        @if($errors->has('password'))
                            <small class="d-block text-danger">{{$errors->first('password')}}</small>
                        @endif
                    </div>
                    {{-- @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror --}}

                    <div class="login__form__password login__form__password2">
                        <button type="button" class="login__form__password__show"></button>
                        <input type="password" required class="login__form__input login__form__input_password" name="password_confirmation" placeholder="סיסמה">
                        <span class="login__form__err">שְׁגִיאָה</span>
                    </div>

                    <button type="submit" class="login__form__submit btn">הירשם</button>

                    <div class="login__form__wrapper">
                        <a class="login__form__link" href="{{route('user.login')}}">התחברות</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('custom-script')
    <script src="{{asset('assets/js/login.js')}}"></script>
@endsection
