@extends('frontend.layouts.app')
@section('title', 'Blog')

@section('custom-style')
    <link rel="stylesheet" href="{{asset('assets/css/blog.css')}}">
@endsection

@section('content')
    <!-- Breadcrumb Starts Here -->
    <div class="py-0 section--bg-white">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb pb-0 mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="fs-6 text-secondary">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('blog') }}" class="fs-6 text-secondary">Blog</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb Ends Here -->

<section class="blog">
    <div class="container">
        <div class="blog__top">
            <h1 class="h1">בלוג</h1>
            <form action="" novalidate class="search">
                <button type="submit" class="search__btn"></button>
                <input type="text" class="search__input" placeholder="לחפש" >

            </form>
        </div>
        <div class="blog__list">
            <a class="blog__item">
                <div class="blog__item__img">
                    <img src="{{asset('assets/img/content/1.jpg')}}" alt="">
                </div>
                <div class="blog__item__info">
                    <h3 class="h3">לורם איפסום היה</h3>
                    <p class="blog__item__desc">Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע היה טקסט הדמה הסטנדרטי </p>
                    <p class="blog__item__date">2 במאי 2022</p>
                </div>
            </a>
            <a class="blog__item">
                <div class="blog__item__img">
                    <img src="{{asset('assets/img/content/1.jpg')}}" alt="">
                </div>
                <div class="blog__item__info">
                    <h3 class="h3">לורם איפסום היה</h3>
                    <p class="blog__item__desc">Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע היה טקסט הדמה הסטנדרטי </p>
                    <p class="blog__item__date">2 במאי 2022</p>
                </div>
            </a>
            <a class="blog__item">
                <div class="blog__item__img">
                    <img src="{{asset('assets/img/content/1.jpg')}}" alt="">
                </div>
                <div class="blog__item__info">
                    <h3 class="h3">לורם איפסום היה</h3>
                    <p class="blog__item__desc">Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע היה טקסט הדמה הסטנדרטי </p>
                    <p class="blog__item__date">2 במאי 2022</p>
                </div>
            </a>
            <a class="blog__item">
                <div class="blog__item__img">
                    <img src="{{asset('assets/img/content/1.jpg')}}" alt="">
                </div>
                <div class="blog__item__info">
                    <h3 class="h3">לורם איפסום היה</h3>
                    <p class="blog__item__desc">Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע היה טקסט הדמה הסטנדרטי </p>
                    <p class="blog__item__date">2 במאי 2022</p>
                </div>
            </a>
            <a class="blog__item">
                <div class="blog__item__img">
                    <img src="{{asset('assets/img/content/1.jpg')}}" alt="">
                </div>
                <div class="blog__item__info">
                    <h3 class="h3">לורם איפסום היה</h3>
                    <p class="blog__item__desc">Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע היה טקסט הדמה הסטנדרטי </p>
                    <p class="blog__item__date">2 במאי 2022</p>
                </div>
            </a>
            <a class="blog__item">
                <div class="blog__item__img">
                    <img src="{{asset('assets/img/content/1.jpg')}}" alt="">
                </div>
                <div class="blog__item__info">
                    <h3 class="h3">לורם איפסום היה</h3>
                    <p class="blog__item__desc">Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע היה טקסט הדמה הסטנדרטי </p>
                    <p class="blog__item__date">2 במאי 2022</p>
                </div>
            </a>
            <a class="blog__item">
                <div class="blog__item__img">
                    <img src="{{asset('assets/img/content/1.jpg')}}" alt="">
                </div>
                <div class="blog__item__info">
                    <h3 class="h3">לורם איפסום היה</h3>
                    <p class="blog__item__desc">Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע היה טקסט הדמה הסטנדרטי </p>
                    <p class="blog__item__date">2 במאי 2022</p>
                </div>
            </a>
            <a class="blog__item">
                <div class="blog__item__img">
                    <img src="{{asset('assets/img/content/1.jpg')}}" alt="">
                </div>
                <div class="blog__item__info">
                    <h3 class="h3">לורם איפסום היה</h3>
                    <p class="blog__item__desc">Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע היה טקסט הדמה הסטנדרטי </p>
                    <p class="blog__item__date">2 במאי 2022</p>
                </div>
            </a>
            <a class="blog__item">
                <div class="blog__item__img">
                    <img src="{{asset('assets/img/content/1.jpg')}}" alt="">
                </div>
                <div class="blog__item__info">
                    <h3 class="h3">לורם איפסום היה</h3>
                    <p class="blog__item__desc">Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע היה טקסט הדמה הסטנדרטי </p>
                    <p class="blog__item__date">2 במאי 2022</p>
                </div>
            </a>
            <a class="blog__item">
                <div class="blog__item__img">
                    <img src="{{asset('assets/img/content/1.jpg')}}" alt="">
                </div>
                <div class="blog__item__info">
                    <h3 class="h3">לורם איפסום היה</h3>
                    <p class="blog__item__desc">Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע היה טקסט הדמה הסטנדרטי </p>
                    <p class="blog__item__date">2 במאי 2022</p>
                </div>
            </a>
            <a class="blog__item">
                <div class="blog__item__img">
                    <img src="{{asset('assets/img/content/1.jpg')}}" alt="">
                </div>
                <div class="blog__item__info">
                    <h3 class="h3">לורם איפסום היה</h3>
                    <p class="blog__item__desc">Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע היה טקסט הדמה הסטנדרטי </p>
                    <p class="blog__item__date">2 במאי 2022</p>
                </div>
            </a>
            <a class="blog__item">
                <div class="blog__item__img">
                    <img src="{{asset('assets/img/content/1.jpg')}}" alt="">
                </div>
                <div class="blog__item__info">
                    <h3 class="h3">לורם איפסום היה</h3>
                    <p class="blog__item__desc">Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע היה טקסט הדמה הסטנדרטי </p>
                    <p class="blog__item__date">2 במאי 2022</p>
                </div>
            </a>
        </div>
        <div class="blog__navigation">
            <div class="blog__navigation__list">
                <a href="" class="prev"></a>
                <span class="current">1</span>
                <a href="">2</a>
                <a href="">3</a>
                <a href="">4</a>
                <a href="" class="next"></a>
            </div>
        </div>
    </div>
</section>
@endsection
@section('custom-script')
@endsection
