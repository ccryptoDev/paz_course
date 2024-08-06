@extends('frontend.layouts.app')
@section('title', 'User Login')

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
                <h1 class="h1">התחברות</h1>

                <div class="login__form__wrapper">
                    <div>
                        <a class="login__form__link" href="{{route('user.register')}}">הירשם</a>
                        <span>אין לך חשבון?</span>
                    </div>
                </div>

                {{-- <form action="{{ route('user.check', 'home') }}" onsubmit = "return(validate());" novalidate class="login__form" method="POST"> --}}
                <form action="{{ route('user.check', 'home') }}" novalidate class="login__form" method="POST">
                    @csrf
                    <div class="login__form__login">
                        <input type="text" required class="login__form__input login__form__input_login  @error('email') login__form__error @enderror" name="email"
                               placeholder="אימייל" value="{{old('email')}}">
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

                    <div class="login__form__password">
                        <button type="button" class="login__form__password__show"></button>
                        <input type="password" required class="login__form__input login__form__input_password  @error('password') login__form__error @enderror"
                               name="password" placeholder="סיסמה">
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

                    <div class="login__form__wrapper">
                        <div class="checkbox">
                            <label class="custom-checkbox">
                                <input required type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <p><span>זכור אותי</span></p>
                            </label>
                            <span class="login__form__err">שְׁגִיאָה</span>
                        </div>
                        <a class="login__form__link" href="{{route('password.request')}}">שכחת את הסיסמא?</a>
                    </div>
                    <button type="submit" class="login__form__submit btn">התחברות</button>
                    <p class="login__form__or"><span>or</span></p>
                    <a href="{{ url('auth/google') }}" class="login__form__google btn">Sign in with Google</a>
                </form>
            </div>
        </div>
    </section>
@endsection


@section('custom-script')
    <script src="{{asset('assets/js/login.js')}}"></script>
@endsection
