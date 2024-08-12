@extends('frontend.layouts.app')
@section('title', 'About')

@section('custom-style')
    <link rel="stylesheet" href="{{asset('assets/css/about.css')}}">
@endsection

@section('content')
    <!-- Breadcrumb Starts Here -->
    <div class="py-0 section--bg-white">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb pb-0 mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="fs-6 text-secondary">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('about') }}" class="fs-6 text-secondary">About</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb Ends Here -->
    
    <section class="about">
        <div class="container">
            <h1 class="h1">עלינו</h1>
            <div class="about__wrapper">
                <div class="about__img">
                    <div class="photo photo_angle">
                        <img src="{{asset('assets/img/template/photoOrangeAngle.svg')}}" alt="" class="photo__shape">
                        <div class="photo__wrapper">
                            <img src="{{asset('assets/img/content/about/img1.jpg')}}" class="photo__img" alt="">
                        </div>
                    </div>
                </div>
                <div class="about__info">
                    <h2 class="h2">החזון שלנו</h2>
                    <ul>
                        <li>החזון שלנו הוא ליצור, להפיץ ולהטמיע מודלים פורצי דרך שיקפיצו אנשים מחיים בינוניים לחיי אושר, הגשמה ושפע.</li>
                        <li>מתוך הנחת היסוד שכל בעיה היא תוצאה של תהליך חשיבתי. בעיות לא נופלות עלינו משומקום, יש תהליך חשיבתי שגרם לנו לפעול באופן שהביא אותנו לאותה בעיה או תהליך חשיבתי שהופך את המצב לבעיה במקום לגדילה. לכן החזון שלנו הוא להקנות לאנשים ידע, כלים ומיומנויות שיאפשרו לאנשים לתכנן את החיים שלהם מחדש. להקנות להם את מה שחשוב לחיים: יכולות, חברתיות, רגשיות, כלכליות בינאישיות ותוך-אישיות.</li>
                        <li>לאפשר להם לברוא את החיים שלהם מבחירה מודעת ולא מאילוץ- להגיע לחיים שהם בוחרים ולא לחיים אקראיים יד הגורל.</li>
                        <li>ככה להעיר את מי שמחכה להתעורר ביקיצה טבעית- החזון שלנו הוא להעיר את אותם אנשים שחיים עם מנטרת ה"יהיה בסדר" ונמצאים בטייס אוטומטי.</li>
                        <li>אנחנו פועלים מתוך אמונה שזה מצוין ללמוד מטעויות, אבל תמיד עדיף ללמוד כדי לחסוך טעויות.</li>
                    </ul>
                </div>
            </div>
            <div class="about__wrapper about__wrapper_reverse">
                <div class="about__img">
                    <div class="photo photo_angle">
                        <img src="{{asset('assets/img/template/photoYellowAngle.svg')}}" alt="" class="photo__shape">
                        <div class="photo__wrapper">
                            <img src="{{asset('assets/img/content/about/img2.jpg')}}" class="photo__img" alt="">
                        </div>
                    </div>
                </div>
                <div class="about__info">
                    <h2 class="h2">הערכים שלנו</h2>
                    <ul>
                        <li><strong>מצוינות</strong> - כל פעולה, פרויקט, קורס או תוכן יעשה מתוך שאיפה למצוינות. לא נסתפק במשהו בינוני או סביר ואפילו לא נסתפק ב"טוב מאוד". אם בחרנו לעשות משהו, הוא לא יהיה פחות ממצוין, הוא יהיה מדהים, מטורף ואפילו וואו!</li>
                        <li><strong>יסודיות</strong> - אנחנו מחויבים לעבודה יסודית ונכונה. לא "מחפפים" ולא "מעגלים פינות". כל דבר שאנחנו עושים יעשה באופן יסודי, מעמיק ונכון.</li>
                        <li><strong>הוליסטיות </strong> - כל שינוי שאנחנו עושים יעשה באופן הוליסטי- כלומר כזה שרואה את כל התמונה. לא נזרוק סתם סיסמאות של "אתה יכול" כי זה לא אותנטי. לא נגיד לאף אדם "לא לכעוס" כי אנחנו יודעים לראות את המטרה של כעס ולעבוד איתה. חשוב לנו לעבוד עם הבעיות ולא נגד הבעיות ואת זה אנחנו עושים מתוך ההבנה שחשוב לנו לעבוד באופן הוליסטי ומערכתי.</li>
                        <li><strong>השפעה</strong> - השאיפה שלנו היא להשפיע לטובה על כמה שיותר אנשים באופן העמוק ביותר ולא להשאיר את כל הטוב הזה רק אצלנו.</li>
                        <li><strong>השראה</strong> - אנחנו שואפים שתוכלו ללמוד לא רק מהתוכן, אלא גם מהמפגש עם האנשים, מכירים אנשים כאלו שרק מהמפגש איתם אתם מרגישים שאתם מקבלים המון? רק הנוכחות שלהם מעירה בכם משהו? קוראים לזה השראה ואנחנו שואפים לעורר השראה בכל אדם ובכל הזדמנות.</li>
                        <li>
                            <p><strong>חדשנות</strong> - אנחנו שואפים להביא את חווית הלמידה והתקשורת באמצעים חדשניים, פשוטים וקלים לתפעול ויישום.</p>
                            <p>אנחנו קמים כל בוקר ושואלים את עצמנו אילו כלים חדשניים נוכל לפתח כדי להשפיע באופן יסודי ומעורר השראה שייקח אנשים מחיים של בינוניות לחיים של מצוינות מתוך הבנה הוליסטית של התמונה כולה.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom-script')
@endsection
