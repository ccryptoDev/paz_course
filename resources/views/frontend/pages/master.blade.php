@extends('frontend.layouts.app')
@section('title', 'Master')

@section('custom-style')
    <link rel="stylesheet" href="{{asset('assets/css/master.css')}}">
@endsection

@section('content')
<section class="master">
    <div class="container">
        <h1 class="h1">קורס מאסטר בדימיון מודרך ותת המודע</h1>
        <div class="master__wrapper">
            <div class="master__info">
                <ul class="content__accordion">
                    <li class="content__accordion__item">
                        <p class="content__accordion__item__title">תכל'ס הדמיון מודרך הזה, זה היפנוזה?</p>
                        <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                    </li>
                    <li class="content__accordion__item">
                        <p class="content__accordion__item__title">ומה זה מאפשר לי לעשות?</p>
                        <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>

                    </li>
                    <li class="content__accordion__item">
                        <p class="content__accordion__item__title">במה זה שונה מכל מה שלמדתי בקורס NLP?</p>
                        <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                    </li>
                    <li class="content__accordion__item">
                        <p class="content__accordion__item__title">יותר מהר ממה שלמדתי ב-NLP?</p>
                        <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                    </li>
                    <li class="content__accordion__item">
                        <p class="content__accordion__item__title">חזק! כמה זמן הקורס הזה?</p>
                        <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                    </li>
                    <li class="content__accordion__item">
                        <p class="content__accordion__item__title">אוי, זה לא עמוס מידי?</p>
                        <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                    </li>
                    <li class="content__accordion__item">
                        <p class="content__accordion__item__title">ובסוף הקורס אדע לקחת אדם ולפתור לו בעיות באמצעות הדמיון המודרך הזה...?</p>
                        <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                    </li>
                    <li class="content__accordion__item">
                        <p class="content__accordion__item__title">מקבלים תעודה בסוף?</p>
                        <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                    </li>
                    <li class="content__accordion__item">
                        <p class="content__accordion__item__title">מדהים! אני יכול להצטרף</p>
                        <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                    </li>
                    <li class="content__accordion__item">
                        <p class="content__accordion__item__title">אפשר להציץ בסילבוס?</p>
                        <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                    </li>
                </ul>
            </div>
            <div class="master__img">
                <div class="photo photo_angle">
                    <img src="{{asset('assets/img/template/photoOrangeAngle.svg')}}" alt="" class="photo__shape">
                    <div class="photo__wrapper">
                        <img src="{{asset('assets/img/content/about/img1.jpg')}}" class="photo__img" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content__wrapper content__wrapper_orange">
            <div class="content__list">
                <div class="content__item">
                    <div class="content__item__img">
                        <img src="{{asset('assets/img/content/master/1.svg')}}" alt="">
                    </div>
                    <div class="content__item__info">
                        <h3 class="h3">עקרונות ה"לא מודע"</h3>
                        <p>הנחות היסוד של ה"לא מודע"</p>
                    </div>
                </div>
                <div class="content__item">
                    <div class="content__item__img">
                        <img src="{{asset('assets/img/content/master/2.svg')}}" alt="">
                    </div>
                    <div class="content__item__info">
                        <h3 class="h3">שבירות תבנית</h3>
                        <p>אפשרויות שונות לשבירת תבנית ויצירת סטייט של רגיעה</p>
                    </div>
                </div>
                <div class="content__item">
                    <div class="content__item__img">
                        <img src="{{asset('assets/img/content/master/3.svg')}}" alt="">
                    </div>
                    <div class="content__item__info">
                        <h3 class="h3">הבניית סקריפטים</h3>
                        <p>העקרונות מאחורי בניית סקריפט עוצמתי של דמיון מודרך</p>
                    </div>
                </div>
                <div class="content__item">
                    <div class="content__item__img">
                        <img src="{{asset('assets/img/content/master/4.svg')}}" alt="">
                    </div>
                    <div class="content__item__info">
                        <h3 class="h3">סקריפטים</h3>
                        <p>סקריפטים שונים להשפעות שונות על ה"לא מודע"</p>
                    </div>
                </div>
                <div class="content__item">
                    <div class="content__item__img">
                        <img src="{{asset('assets/img/content/master/5.svg')}}" alt="">
                    </div>
                    <div class="content__item__info">
                        <h3 class="h3">רגרסיה</h3>
                        <p>הזכרות מסיטואציות מהעבר באמצעות ה"לא מודע"</p>
                    </div>
                </div>
            </div>
            <div class="content__list">
                <div class="content__item">
                    <div class="content__item__img">
                        <img src="{{asset('assets/img/content/master/6.svg')}}" alt="">
                    </div>
                    <div class="content__item__info">
                        <h3 class="h3">ראפור היפנוטי (ללא אמצעים ותהליכים היפנוטיים)</h3>
                        <p>יצירת ראפור עמוק להשפעה מתקדמת</p>
                    </div>
                </div>
                <div class="content__item">
                    <div class="content__item__img">
                        <img src="{{asset('assets/img/content/master/7.svg')}}" alt="">
                    </div>
                    <div class="content__item__info">
                        <h3 class="h3">Full body catalepsy</h3>
                        <p>יצירת "הקשייה" בכל הגוף באמצעות דימיון מודרך עד כדי הישענות בין שני כסאות</p>
                    </div>
                </div>
                <div class="content__item">
                    <div class="content__item__img">
                        <img src="{{asset('assets/img/content/master/8.svg')}}" alt="">
                    </div>
                    <div class="content__item__info">
                        <h3 class="h3">דימיון מודרך מתקדם</h3>
                        <p>השפעות מתקדמות דרך ה"לא מודע"- שינוי מטאבוליזם, לחץ דם, אמונות וכו'</p>
                    </div>
                </div>
                <div class="content__item">
                    <div class="content__item__img">
                        <img src="{{asset('assets/img/content/master/9.svg')}}" alt="">
                    </div>
                    <div class="content__item__info">
                        <h3 class="h3">Pain paradigm</h3>
                        <p>לפתור ולשכך כאב באמצעות ה"לא מודע".</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="master__btn">
            <a href="" class="btn">להתחיל</a>
        </div>
    </div>
</section>
@endsection
@section('custom-script')
@endsection
