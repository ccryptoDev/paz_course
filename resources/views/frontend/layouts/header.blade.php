<header class="header">
    @if( request()->is('blog') || request()->is('master-practitioner') )
        <div class="header__bg">
            <picture class="header__bg__img">
                <source media="(max-width: 1024px)" srcset="{{asset('assets/img/template/headerBgMb.svg')}}">
                <source media="(min-width: 1025px)" srcset="{{asset('assets/img/template/headerBg.svg')}}">
                <img alt="" src="{{asset('assets/img/template/headerBg.svg')}}" alt="">
            </picture>
        </div>
    @endif
    <nav class="nav">
        <div class="container">
            <div class="nav__wrapper">
                <div class="nav__logo">
                    <a href="{{ route('home') }}" class="nav__logo__link">
                        <img class="nav__logo__link__img" src="{{asset('assets/img/template/logo.svg')}}">
                        <img class="nav__logo__link__img nav__logo__link__img_mb" src="{{asset('assets/img/template/logo_light.svg')}}">
                    </a>
                </div>
                <div class="nav__menu">
                    <ul class="nav__menu__list">
                        <li class="nav__menu__item">
                            <a href="{{ route('contact') }}" class="nav__menu__item__link">צור קשר</a>
                        </li>
                        <li class="nav__menu__item">
                            <a href="{{ route('blog') }}" class="nav__menu__item__link">בלוג</a>
                        </li>
                        <li class="nav__menu__item">
                            <div class="course-dropdown user-image" id="courseDropdown">
                                <a href="{{route('studentdashboard')}}" onclick="toggleCourseDropdown(event)" class="nav__menu__item__link">קורסים</a>
                                <div class="course-dropdown-content">
                                    <a href="" class="nav__menu__item__link">קורס דמיון מודרך</a>
                                    <a href="" class="nav__menu__item__link">קורס NLP פרקטישינר</a>
                                    <a href="" class="nav__menu__item__link">קורס NLP מאסטר</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav__menu__item">
                            <a href="{{ route('about') }}" class="nav__menu__item__link">אודות</a>
                        </li>
                    </ul>
                </div>
                <div class="nav__buttons">
                    @if(request()->session()->get('studentLogin'))
                        <div class="dropdown user-image" id="imageDropdown">
                            <a href="{{route('studentdashboard')}}" onclick="toggleDropdown(event)" class="logged">
                                <img src="{{asset('uploads/users/'.request()->session()->get('image'))}}" alt="User Profile" />
                            </a>
                            <div class="dropdown-content">
                                <a href="{{route('studentdashboard')}}">Dashboard</a>
                                <a href="{{route('student_profile')}}">Profile</a>
                                <a href="{{route('user.logout')}}" class="text-danger">Logout</a>
                            </div>
                        </div>
                        <input type="hidden" name="user_name" value="{{ auth()->user()->name }}">
                    @else
                        <a class="nav__profile" href="{{ route('user.login') }}"><span>התחברות</span></a>
                    @endif
                    <a class="btn" href="">להתחיל</a>
                    {{-- @if (Auth::check())
                        <p>Authenticated</p>
                    @else
                        <p>Not Authenticated</p>
                    @endif --}}
                </div>
                <button class="nav__burger_link"></button>
                <button class="nav__burger_close"></button>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-xl navbar-light bg-transparent" style="display: none;">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('frontend/dist/images/logo/logo.png')}}" alt="Logo" class="img-fluid" />
            </a>
            <button class="menu-icon-container">
                <span class="menu-icon"></span>
            </button>
            <!-- Navbar Item -->
            <div class="collapse navbar-collapse d-none d-xl-block d-none d-xl-block" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('searchCourse')}}">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}">Admin</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center justify-content-between rightContent">
                    <form class="header__Search-form" id="searchForm">
                        <button type="button" class="border-0 bg-transparent header__Search-button"
                            onclick="openSearch()">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="9.19522" cy="9.19518" r="7.61714" stroke="#35343E" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round"></circle>
                                <path d="M15.0493 15.4866L18.3493 18.778" stroke="#35343E" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        <div id="myOverlay" class="overlay">
                            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                            <div class="overlay-content">
                                <div>
                                    <input type="text" placeholder="Search.." name="search" />
                                    <button type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="#ffff" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-search">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <a href="{{route('cart')}}" class="cart-nav border-0 bg-transparent mx-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2.87778 2.51099L2.77634 2.50038C2.40716 2.48688 2.07562 2.74796 2.01087 3.12209L2.00026 3.22354C1.98676 3.59272 2.24784 3.92426 2.62197 3.98901L4.13098 4.25L5.04551 15.1457L5.06443 15.3095C5.24843 16.5519 6.31708 17.486 7.58988 17.486H18.5019L18.6662 17.4808C19.8626 17.4044 20.8545 16.4996 21.0291 15.2978L21.9781 8.73941L21.9945 8.58877C22.0819 7.38969 21.132 6.349 19.9089 6.349H5.81198L5.57725 3.54727L5.55956 3.43641C5.49112 3.14809 5.25673 2.92273 4.95778 2.87099L2.87778 2.51099ZM7.47394 15.9797C6.97867 15.9255 6.58258 15.5277 6.54028 15.0207L5.93798 7.849H19.9089L19.997 7.85548C20.3128 7.90242 20.5409 8.19769 20.4936 8.52465L19.5446 15.0826L19.5208 15.1998C19.4005 15.6584 18.985 15.986 18.5019 15.986H7.58988L7.47394 15.9797ZM5.90828 20.5853C5.90828 19.7492 6.58595 19.0703 7.42228 19.0703C8.25849 19.0703 8.93728 19.7491 8.93728 20.5853C8.93728 21.4216 8.25838 22.0993 7.42228 22.0993C6.58606 22.0993 5.90828 21.4215 5.90828 20.5853ZM17.1597 20.5853C17.1597 19.7491 17.8385 19.0703 18.6747 19.0703C19.5109 19.0703 20.1897 19.7491 20.1897 20.5853C20.1897 21.4216 19.5108 22.0993 18.6747 22.0993C17.8386 22.0993 17.1597 21.4216 17.1597 20.5853ZM17.6484 10.795C17.6484 10.3808 17.3126 10.045 16.8984 10.045H14.1254L14.0236 10.0518C13.6575 10.1015 13.3754 10.4153 13.3754 10.795C13.3754 11.2092 13.7112 11.545 14.1254 11.545H16.8984L17.0001 11.5382C17.3662 11.4885 17.6484 11.1747 17.6484 10.795Z"
                                fill="#35343E"></path>
                        </svg>
                        <span class="badge bg-primary">{{ count((array) session('cart')) }}</span>
                        <span class="visually-hidden">Items Added</span>
                    </a>
                    @if(request()->session()->get('studentLogin'))
                    <div class="dropdown user-image ms-3" id="imageDropdown">
                        <a href="{{route('studentdashboard')}}" onclick="toggleDropdown(event)">
                            <img src="{{asset('uploads/users/'.request()->session()->get('image'))}}"
                                alt="Student Profile" height="48" width="48"/>
                        </a>
                        <div class="dropdown-content">
                            <a href="{{route('studentdashboard')}}">Dashboard</a>
                            <a href="{{route('student_profile')}}">Profile</a>
                            <a href="{{route('user.logout')}}" class="text-danger">Logout</a>
                        </div>
                    </div>
                    @else
                    <a href="{{route('user.login')}}" class="button button--text">Sign in</a>
                    <a href="{{route('user.register')}}" class="button button--dark">Sign Up</a>
                    @endif
                </div>
            </div>

            {{-- Mobile Navbar --}}
            <div class="navbar-mobile">
                <div>
                    <div class="navbar-mobile__top">
                        <a href="index.html">
                            <img src="{{asset('frontend/dist/images/logo/logo.png')}}" alt="brand"
                                class="img-fluid" />
                        </a>
                        <div>
                            <a href="{{ route('cart') }}" class="cart-nav">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.87778 2.51099L2.77634 2.50038C2.40716 2.48688 2.07562 2.74796 2.01087 3.12209L2.00026 3.22354C1.98676 3.59272 2.24784 3.92426 2.62197 3.98901L4.13098 4.25L5.04551 15.1457L5.06443 15.3095C5.24843 16.5519 6.31708 17.486 7.58988 17.486H18.5019L18.6662 17.4808C19.8626 17.4044 20.8545 16.4996 21.0291 15.2978L21.9781 8.73941L21.9945 8.58877C22.0819 7.38969 21.132 6.349 19.9089 6.349H5.81198L5.57725 3.54727L5.55956 3.43641C5.49112 3.14809 5.25673 2.92273 4.95778 2.87099L2.87778 2.51099ZM7.47394 15.9797C6.97867 15.9255 6.58258 15.5277 6.54028 15.0207L5.93798 7.849H19.9089L19.997 7.85548C20.3128 7.90242 20.5409 8.19769 20.4936 8.52465L19.5446 15.0826L19.5208 15.1998C19.4005 15.6584 18.985 15.986 18.5019 15.986H7.58988L7.47394 15.9797ZM5.90828 20.5853C5.90828 19.7492 6.58595 19.0703 7.42228 19.0703C8.25849 19.0703 8.93728 19.7491 8.93728 20.5853C8.93728 21.4216 8.25838 22.0993 7.42228 22.0993C6.58606 22.0993 5.90828 21.4215 5.90828 20.5853ZM17.1597 20.5853C17.1597 19.7491 17.8385 19.0703 18.6747 19.0703C19.5109 19.0703 20.1897 19.7491 20.1897 20.5853C20.1897 21.4216 19.5108 22.0993 18.6747 22.0993C17.8386 22.0993 17.1597 21.4216 17.1597 20.5853ZM17.6484 10.795C17.6484 10.3808 17.3126 10.045 16.8984 10.045H14.1254L14.0236 10.0518C13.6575 10.1015 13.3754 10.4153 13.3754 10.795C13.3754 11.2092 13.7112 11.545 14.1254 11.545H16.8984L17.0001 11.5382C17.3662 11.4885 17.6484 11.1747 17.6484 10.795Z"
                                        fill="#35343E"></path>
                                </svg>
                                {{-- <span class="badge bg-primary">2</span> --}}
                                <span class="badge bg-primary">{{ count((array) session('cart')) }}</span>
                                <span class="visually-hidden">Items Added</span>
                            </a>
                            <button class="navbar-mobile--cross">
                                <svg width="20" height="19" viewBox="0 0 20 19" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5967 4.59668L5.40429 13.7891" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5.40332 4.59668L14.5957 13.7891" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="navbar-mobile__menu">
                        <ul class="navbar-mobile__menu-list">
                            <li class="active navbar-mobile__menu-item">
                                <a href="{{route('home')}}">
                                    <span class="navbar-mobile__menu-link"> Home</span>
                                </a>
                            </li>
                            <li class="navbar-mobile__menu-item">
                                <a href="{{route('searchCourse')}}">
                                    <span class="navbar-mobile__menu-link"> Courses </span>
                                </a>
                            </li>
                            <li class="navbar-mobile__menu-item">
                                <a href="{{route('about')}}">
                                    <span class="navbar-mobile__menu-link"> About </span>
                                </a>
                            </li>
                            <li class="navbar-mobile__menu-item">
                                <a href="#">
                                    <span class="navbar-mobile__menu-link"> Pages </span>
                                    <span class="navbar-mobile__menu-dropicon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-chevron-right">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </span>
                                </a>
                                <ul class="navbar-mobile__menu-dropmenu">
                                    <li><a href="{{route('searchCourse')}}">Courses</a></li>
                                    <li><a href="{{route('student_profile')}}">Student Profile</a></li>
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </li>
                            <li class="navbar-mobile__menu-item">
                                <a href="{{route('contact')}}">
                                    <span class="navbar-mobile__menu-link"> Contact </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nav-mobile__footer">
                    <ul class="social-icons social-icons--outline justify-content-center">
                        <li>
                            <a href="#">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.9507 5.29205C17.9086 4.33564 17.7539 3.67812 17.5324 3.10836C17.3038 2.50359 16.9522 1.96213 16.4915 1.51201C16.0414 1.05489 15.4963 0.699691 14.8986 0.474702C14.3255 0.253147 13.6714 0.0984842 12.715 0.0563159C11.7515 0.0105764 11.4456 0 9.00174 0C6.55791 0 6.25202 0.0105764 5.29204 0.0527447C4.33563 0.0949129 3.67811 0.249713 3.1085 0.471131C2.50358 0.699691 1.96213 1.05132 1.51201 1.51201C1.05489 1.96213 0.699827 2.50716 0.474701 3.10493C0.253147 3.67812 0.098484 4.33207 0.0563158 5.28848C0.0105764 6.25203 0 6.55792 0 9.00176C0 11.4456 0.0105764 11.7515 0.0527446 12.7115C0.0949128 13.6679 0.249713 14.3254 0.471267 14.8952C0.699827 15.4999 1.05489 16.0414 1.51201 16.4915C1.96213 16.9486 2.50715 17.3038 3.10493 17.5288C3.67811 17.7504 4.33206 17.905 5.28861 17.9472C6.24845 17.9895 6.55448 17.9999 8.99831 17.9999C11.4421 17.9999 11.748 17.9895 12.708 17.9472C13.6644 17.905 14.3219 17.7504 14.8916 17.5288C16.1012 17.0611 17.0577 16.1047 17.5254 14.8952C17.7468 14.322 17.9016 13.6679 17.9437 12.7115C17.9859 11.7515 17.9965 11.4456 17.9965 9.00176C17.9965 6.55792 17.9929 6.25203 17.9507 5.29205ZM16.3298 12.6411C16.2911 13.5202 16.1434 13.9949 16.0203 14.3114C15.7179 15.0956 15.0955 15.7179 14.3114 16.0204C13.9949 16.1434 13.5168 16.2911 12.6411 16.3297C11.6917 16.372 11.407 16.3824 9.00531 16.3824C6.60365 16.3824 6.31534 16.372 5.36937 16.3297C4.4903 16.2911 4.01559 16.1434 3.69913 16.0204C3.3089 15.8761 2.9537 15.6476 2.66539 15.3487C2.3665 15.0568 2.13794 14.7052 1.99372 14.315C1.87065 13.9985 1.72299 13.5202 1.68439 12.6447C1.64209 11.6953 1.63165 11.4104 1.63165 9.00876C1.63165 6.60709 1.64209 6.31878 1.68439 5.37295C1.72299 4.49387 1.87065 4.01917 1.99372 3.7027C2.13794 3.31234 2.3665 2.95727 2.66896 2.66883C2.9607 2.36994 3.31233 2.14138 3.7027 1.99729C4.01917 1.87422 4.49744 1.72656 5.37294 1.68783C6.32235 1.64566 6.60722 1.63508 9.00875 1.63508C11.414 1.63508 11.6987 1.64566 12.6447 1.68783C13.5238 1.72656 13.9985 1.87422 14.3149 1.99729C14.7052 2.14138 15.0604 2.36994 15.3487 2.66883C15.6476 2.96071 15.8761 3.31234 16.0203 3.7027C16.1434 4.01917 16.2911 4.49731 16.3298 5.37295C16.372 6.32236 16.3826 6.60709 16.3826 9.00876C16.3826 11.4104 16.372 11.6917 16.3298 12.6411Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M9.00188 4.37744C6.44912 4.37744 4.37793 6.44849 4.37793 9.00139C4.37793 11.5543 6.44912 13.6253 9.00188 13.6253C11.5548 13.6253 13.6258 11.5543 13.6258 9.00139C13.6258 6.44849 11.5548 4.37744 9.00188 4.37744ZM9.00188 12.0008C7.34578 12.0008 6.00244 10.6576 6.00244 9.00139C6.00244 7.34515 7.34578 6.00195 9.00188 6.00195C10.6581 6.00195 12.0013 7.34515 12.0013 9.00139C12.0013 10.6576 10.6581 12.0008 9.00188 12.0008Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M14.8876 4.19521C14.8876 4.79133 14.4043 5.27469 13.808 5.27469C13.2119 5.27469 12.7285 4.79133 12.7285 4.19521C12.7285 3.59894 13.2119 3.11572 13.808 3.11572C14.4043 3.11572 14.8876 3.59894 14.8876 4.19521Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.9955 18.0002V17.9994H18V11.3979C18 8.16841 17.3047 5.68066 13.5292 5.68066C11.7142 5.68066 10.4962 6.67666 9.99896 7.62091H9.94646V5.98216H6.3667V17.9994H10.0942V12.0489C10.0942 10.4822 10.3912 8.96716 12.3315 8.96716C14.2432 8.96716 14.2717 10.7552 14.2717 12.1494V18.0002H17.9955Z"
                                        fill="currentColor"></path>
                                    <path d="M0.296875 5.98291H4.02888V18.0002H0.296875V5.98291Z"
                                        fill="currentColor">
                                    </path>
                                    <path
                                        d="M2.1615 0C0.96825 0 0 0.96825 0 2.1615C0 3.35475 0.96825 4.34325 2.1615 4.34325C3.35475 4.34325 4.323 3.35475 4.323 2.1615C4.32225 0.96825 3.354 0 2.1615 0V0Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18 1.73137C17.3306 2.025 16.6174 2.21962 15.8737 2.31412C16.6388 1.85737 17.2226 1.13962 17.4971 0.2745C16.7839 0.69975 15.9964 1.00013 15.1571 1.16775C14.4799 0.446625 13.5146 0 12.4616 0C10.4186 0 8.77387 1.65825 8.77387 3.69113C8.77387 3.98363 8.79862 4.26487 8.85938 4.53262C5.7915 4.383 3.07687 2.91263 1.25325 0.67275C0.934875 1.22513 0.748125 1.85738 0.748125 2.538C0.748125 3.816 1.40625 4.94887 2.38725 5.60475C1.79437 5.5935 1.21275 5.42138 0.72 5.15025C0.72 5.1615 0.72 5.17613 0.72 5.19075C0.72 6.984 1.99912 8.4735 3.6765 8.81662C3.37612 8.89875 3.04875 8.93812 2.709 8.93812C2.47275 8.93812 2.23425 8.92463 2.01038 8.87512C2.4885 10.3365 3.84525 11.4109 5.4585 11.4457C4.203 12.4279 2.60888 13.0196 0.883125 13.0196C0.5805 13.0196 0.29025 13.0061 0 12.969C1.63462 14.0231 3.57188 14.625 5.661 14.625C12.4515 14.625 16.164 9 16.164 4.12425C16.164 3.96112 16.1584 3.80363 16.1505 3.64725C16.8829 3.1275 17.4982 2.47837 18 1.73137Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.0427 0.885481C16.8137 1.09312 17.4216 1.70094 17.6291 2.47204C18.0148 3.88048 17.9999 6.81629 17.9999 6.81629C17.9999 6.81629 17.9999 9.73713 17.6293 11.1457C17.4216 11.9167 16.8138 12.5246 16.0427 12.7321C14.6341 13.1029 8.99996 13.1029 8.99996 13.1029C8.99996 13.1029 3.38048 13.1029 1.95721 12.7174C1.18611 12.5098 0.57829 11.9018 0.37065 11.1309C0 9.73713 0 6.80146 0 6.80146C0 6.80146 0 3.88048 0.37065 2.47204C0.578153 1.70108 1.20094 1.07829 1.95707 0.870787C3.36565 0.5 8.99983 0.5 8.99983 0.5C8.99983 0.5 14.6341 0.5 16.0427 0.885481ZM11.8913 6.80154L7.20605 9.50006V4.10303L11.8913 6.80154Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg width="9" height="18" viewBox="0 0 9 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.3575 2.98875H9.00075V0.12675C8.71725 0.08775 7.74225 0 6.60675 0C4.2375 0 2.6145 1.49025 2.6145 4.22925V6.75H0V9.9495H2.6145V18H5.82V9.95025H8.32875L8.727 6.75075H5.81925V4.5465C5.82 3.62175 6.069 2.98875 7.3575 2.98875Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

</header>
