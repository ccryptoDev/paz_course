@extends('frontend.layouts.app')

@section('title', 'Home')

@section('custom-style')
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
@endsection

@section('content')

    <section class="div1">
        <div class="container">
            <div class="div1__wrapper">
                <div class="div1__info">
                    <h1 class="h1">רתויב הבוטה המרופטלפהמ דומלל לחתה</h1>
                    <div class="div1__desc">
                        Lorem Ipsum הוא פשוט טקסט דמה של תעשיית הדפוס והקביעה. זה היה הטוב ביותר בתעשייה.
                    </div>
                    <div class="btn__wrapper">
                        <a href="" class="btn">להתחיל</a>
                    </div>
                </div>
                <div class="div1__img">
                    <div class="photo photo_yellow_left">
                        <img src="{{ asset('assets/img/template/photoYellowLeft.svg') }}" alt=""
                            class="photo__shape">
                        <div class="photo__wrapper">
                            <video autoplay="" muted="" class="photo__img"
                                src="{{ asset('assets/img/content/index/Testata-Beige.mp4') }}" type="video/mp4"
                                loop="true"></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="div2">
        <div class="container">
            <div class="div2__wrapper">
                <div class="div2__img">
                    <div class="photo photo_orange_bottom">
                        <img src="{{ asset('assets/img/template/photoOrangeBottom.svg') }}" alt=""
                            class="photo__shape">
                        <div class="photo__wrapper">
                            <img src="{{ asset('assets/img/content/index/Rectangle1254.jpg') }}" alt=""
                                class="photo__img">
                        </div>
                    </div>
                </div>
                <div class="div2__info">
                    <h2 class="h2">למה הקורסים שלי</h2>
                    <div class="div2__desc">
                        Lorem Ipsum הוא פשוט טקסט דמה של תעשיית הדפוס והקביעה. זה היה הטוב ביותר בתעשייה.
                    </div>
                    <div class="div2__list">
                        <div class="div2__item">
                            <div class="div2__item__img">
                                <img src="{{ asset('assets/img/content/index/1_1.svg') }}" alt="">
                            </div>
                            <div class="div2__item__info">
                                <h3 class="h3">כלים להעצמת מורים</h3>
                                <p>עם אקדמיית Khan, מורים יכולים לזהות פערים בהבנת התלמידים שלהם, להתאים את ההוראה ולעמוד על
                                    הצרכים של כל תלמיד.</p>
                            </div>
                        </div>
                        <div class="div2__item">
                            <div class="div2__item__img">
                                <img src="{{ asset('assets/img/content/index/1_2.svg') }}" alt="">
                            </div>
                            <div class="div2__item__info">
                                <h3 class="h3">תוכן מהימן</h3>
                                <p>ספריית האימון והשיעורים האמינים של אקדמיית Khan, שנוצרה על ידי מומחים, מכסה מתמטיקה,
                                    מדעים ועוד. תמיד בחינם ללומדים ולמורים.</p>
                            </div>
                        </div>
                        <div class="div2__item">
                            <div class="div2__item__img">
                                <img src="{{ asset('assets/img/content/index/1_3.svg') }}" alt="">
                            </div>
                            <div class="div2__item__info">
                                <h3 class="h3">למידה מותאמת אישית</h3>
                                <p>התלמידים מתאמנים בקצב שלהם, ממלאים תחילה פערים בהבנתם ואז מאיצים את הלמידה שלהם.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="div3">
        <div class="container">
            <div class="div3__top">
                <h2 class="h2">הקורסים שלי</h2>
                <p>Lorem Ipsum הוא פשוט טקסט דמה של תעשיית הדפוס והקביעה. זה היה הטוב ביותר בתעשייה.</p>
            </div>
            <div class="div3__list owl-carousel">
                <div class="div3__item">
                    <div class="div3__item__img">
                        <img src="{{ asset('assets/img/content/1.jpg') }}" alt="">
                    </div>
                    <div class="div3__item__btn">
                        <a href="" class="btn div3__item__btn__link">ללמוד 'יותר</a>
                    </div>
                    <div class="div3__item__info">
                        <h3 class="h3">לורם איפסום היה</h3>
                        <p>Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע</p>
                    </div>
                </div>
                <div class="div3__item">
                    <div class="div3__item__img">
                        <img src="{{ asset('assets/img/content/1.jpg') }}" alt="">
                    </div>
                    <div class="div3__item__btn">
                        <a href="" class="btn div3__item__btn__link">ללמוד 'יותר</a>
                    </div>
                    <div class="div3__item__info">
                        <h3 class="h3">לורם איפסום היה</h3>
                        <p>Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע</p>
                    </div>
                </div>
                <div class="div3__item">
                    <div class="div3__item__img">
                        <img src="{{ asset('assets/img/content/1.jpg') }}" alt="">
                    </div>
                    <div class="div3__item__btn">
                        <a href="" class="btn div3__item__btn__link">ללמוד 'יותר</a>
                    </div>
                    <div class="div3__item__info">
                        <h3 class="h3">לורם איפסום היה</h3>
                        <p>Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע</p>
                    </div>
                </div>
                <div class="div3__item">
                    <div class="div3__item__img">
                        <img src="{{ asset('assets/img/content/1.jpg') }}" alt="">
                    </div>
                    <div class="div3__item__btn">
                        <a href="" class="btn div3__item__btn__link">ללמוד 'יותר</a>
                    </div>
                    <div class="div3__item__info">
                        <h3 class="h3">לורם איפסום היה</h3>
                        <p>Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע</p>
                    </div>
                </div>
                <div class="div3__item">
                    <div class="div3__item__img">
                        <img src="{{ asset('assets/img/content/1.jpg') }}" alt="">
                    </div>
                    <div class="div3__item__btn">
                        <a href="" class="btn div3__item__btn__link">ללמוד 'יותר</a>
                    </div>
                    <div class="div3__item__info">
                        <h3 class="h3">לורם איפסום היה</h3>
                        <p>Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="div4">
        <div class="container">
            <div class="div4__wrapper">
                <div class="div4__info">
                    <h2 class="h2">איך זה עובד?</h2>
                    <div class="div4__desc">
                        Lorem Ipsum הוא פשוט טקסט דמה של תעשיית הדפוס והקביעה. זה היה הטוב ביותר בתעשייה.
                    </div>
                    <ul>
                        <li>Lorem Ipsum היה טקסט הדמה הסטנדרטי של ה</li>
                        <li>Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע</li>
                        <li>Lorem Ipsum היה טקסט הדמה הסטנדרטי של ה</li>
                        <li>Lorem Ipsum היה טקסט הדמה הסטנדרטי של התעשייה מאז שנות ה-1500, כאשר לא ידוע</li>
                        <li>Lorem Ipsum היה טקסט הדמה הסטנדרטי של ה</li>
                    </ul>
                    <div>
                        <a href="" class="btn">להתחיל</a>
                    </div>
                </div>
                <div class="div4__img">
                    <div class="photo photo_green photo_animation">
                        <div class="photo__wrapper">
                            <img src="{{ asset('assets/img/content/index/Rectangle1253.jpg') }}" alt=""
                                class="photo__img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="div5">
        <div class="container">
            <h2 class="h2">חוות דעת של לקוחות</h2>
            <div class="div5__btn">
                <div class="owl-nav">
                    <button type="button" class="owl-prev"></button>
                    <button type="button" class="owl-next"></button>
                </div>
            </div>
            <div class="div5__list owl-carousel">
                <div class="div5__item">
                    <div class="div5__item__info">
                        <p class="div5__item__title">ג'ניפר פיצג'רלד</p>
                        <p class="div5__item__title1">סטוּדֶנט</p>
                        <p class="div5__item__desc">“בפגישה הראשונה, ניהלתי שיחות אמיתיות על נושאים עסקיים קריטיים, עם
                            קבוצה קטנה ואצורת מאוד של עמיתים שהבינה את הלחץ של להיות מנכ"ל של עסק הנתמך על ידי הון סיכון”.
                        </p>
                    </div>
                    <div class="div5__item__img">
                        <img src="{{ asset('assets/img/content/index/Rectangle12525.png') }}" alt="">
                    </div>
                </div>
                <div class="div5__item">
                    <div class="div5__item__info">
                        <p class="div5__item__title">ג'ניפר פיצג'רלד</p>
                        <p class="div5__item__title1">סטוּדֶנט</p>
                        <p class="div5__item__desc">“בפגישה הראשונה, ניהלתי שיחות אמיתיות על נושאים עסקיים קריטיים, עם
                            קבוצה קטנה ואצורת מאוד של עמיתים שהבינה את הלחץ של להיות מנכ"ל של עסק הנתמך על ידי הון סיכון”.
                        </p>
                    </div>
                    <div class="div5__item__img">
                        <img src="{{ asset('assets/img/content/index/Rectangle12525.png') }}" alt="">
                    </div>
                </div>
                <div class="div5__item">
                    <div class="div5__item__info">
                        <p class="div5__item__title">ג'ניפר פיצג'רלד</p>
                        <p class="div5__item__title1">סטוּדֶנט</p>
                        <p class="div5__item__desc">“בפגישה הראשונה, ניהלתי שיחות אמיתיות על נושאים עסקיים קריטיים, עם
                            קבוצה קטנה ואצורת מאוד של עמיתים שהבינה את הלחץ של להיות מנכ"ל של עסק הנתמך על ידי הון סיכון”.
                        </p>
                    </div>
                    <div class="div5__item__img">
                        <img src="{{ asset('assets/img/content/index/Rectangle12525.png') }}" alt="">
                    </div>
                </div>
                <div class="div5__item">
                    <div class="div5__item__info">
                        <p class="div5__item__title">ג'ניפר פיצג'רלד</p>
                        <p class="div5__item__title1">סטוּדֶנט</p>
                        <p class="div5__item__desc">“בפגישה הראשונה, ניהלתי שיחות אמיתיות על נושאים עסקיים קריטיים, עם
                            קבוצה קטנה ואצורת מאוד של עמיתים שהבינה את הלחץ של להיות מנכ"ל של עסק הנתמך על ידי הון סיכון”.
                        </p>
                    </div>
                    <div class="div5__item__img">
                        <img src="{{ asset('assets/img/content/index/Rectangle12525.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="div5__dots">
                <button class="div5__dots__btn"></button>
            </div>
        </div>
    </section>

@endsection <!-- content -->

@section('custom-script')
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script>

        if (document.getElementById('logout-button') !== null) {
            document.getElementById('logout-button').addEventListener('click', function() {
                document.getElementById('logout-form').submit();
            });
        }
    </script>
@endsection
