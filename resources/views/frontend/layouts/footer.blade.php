<footer class="footer">
    <div class="container">
        <div class="footer__logo">
            <a href="" class="footer__logo__link"><img src="{{asset('assets/img/template/logo_light.svg')}}" alt=""></a>
        </div>
        <div class="footer__wrapper">
            <a href="" class="btn">להתחיל</a>
            <div class="footer__menu">
                <ul class="footer__menu__list">
                    <li class="footer__menu__item">
                        <a href="{{ route('contact') }}" class="footer__menu__item__link">צור קשר</a>
                    </li>
                    <li class="footer__menu__item">
                        <a href="{{ route('blog') }}" class="footer__menu__item__link">בלוג</a>
                    </li>
                    <li class="footer__menu__item">
                        <a href="{{ route('about') }}" class="footer__menu__item__link">אודות</a>
                    </li>
                </ul>
            </div>
            @if(request()->session()->get('studentLogin'))
            <a class="footer__profile logged" href="{{ route('studentdashboard') }}"><span>My Account</span></a>
            @else
            <a class="footer__profile" href="{{ route('user.login') }}"><span>התחברות</span></a>
            @endif
        </div>
        <div class="footer__bottom">
            <p class="footer__copyright">© 2023 Paz Courses</p>
            <div class="footer__menu">
                <ul class="footer__menu__list">
                    <li class="footer__menu__item">
                        <a href="" class="footer__menu__item__link">תנאים והגבלות</a>
                    </li>
                    <li class="footer__menu__item">
                        <a href="" class="footer__menu__item__link">מדיניות הפרטיות</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
