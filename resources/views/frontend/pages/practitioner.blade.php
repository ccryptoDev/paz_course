@extends('frontend.layouts.app')
@section('title', 'Practitioner')

@section('custom-style')
    <link rel="stylesheet" href="{{asset('assets/css/practitioner.css')}}">
@endsection

@section('content')
    <section class="pr">
        <div class="container">
            <h1 class="h1">פז אושרן- NLP Practitioner</h1>
            <div class="pr__wrapper">
                <div class="div1__wrapper">
                    <div class="div1__img">
                        <div class="photo photo_yellow_left">
                            <img src="{{asset('assets/img/content/pr/yellowLeft.svg')}}" alt="" class="photo__shape">
                            <div class="photo__wrapper">
                                <img src="{{asset('assets/img/content/pr/1.jpg')}}" class="photo__img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="div1__info">
                        <h2 class="h2">איך אתם מעזים לחשוב שזה קורס ה-NLP המקיף, המקצועי והחוויתי בישראל?</h2>
                        <div class="div1__desc">
                            <p>למקרה שלא שמעת על המרצה.. פז אושרן הוא מאסטר ומורה מוסמך ל-NLP. הוסמך אצל גדולי המורים בעולם- ריצ'ארד בנדלר (מפתח השיטה), רוברט דילץ, טוני רובינס, טד ואדריאנה ג'יימס ומייקל הול. אבל את המודלים המבריקים שלו הוא מביא מניסיון רחב של מעל 15 שנה של טיפול והרצאות.</p>
                            <p>מחבר רבי המכר "איך להיות מגנט חברתי" (גם באמזון הגיע למקום הראשון), "ביטחון עצמי למגנוט חברתי", "אסרטיביות חברתית".</p>
                            <p>מנהל ערוץ ה-NLP ביוטיוב הגדול בישראל, מגיש הפודקאסט המצליח "חשיבה פורצת דרך" (שהגיע בשיאו למקום 2 במצעד הפודקאסטים של ספוטיפיי), בעל קליניקה פרטית מ-2004. כתב נאומים בכנסת ישראל. מרצה בכיר בחברות וארגונים.</p>
                        </div>
                    </div>
                </div>
                <div class="div1__wrapper div1__wrapper_reverse">
                    <div class="div1__img">
                        <div class="photo photo_yellow_left">
                            <img src="{{asset('assets/img/content/pr/orangeLeft.svg')}}" alt="" class="photo__shape">
                            <div class="photo__wrapper">
                                <img src="{{asset('assets/img/content/pr/2.jpg')}}" class="photo__img" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="div1__info">
                        <h2 class="h2">אוקי ומה הופך את הקורס לכזה עוצמתי?</h2>
                        <div class="div1__desc">
                            <p>קודם כל, התפתחות אישית. האידיאל שלנו הוא שכל אדם יחווה על עצמו פריצת דרך. אנחנו לא מסתפקים בסיפורים על פריצות דרך וגם ההדגמות בשיעורים לא מספקות אותנו.</p>
                            <p>אנחנו רוצים שכל תלמיד יהיה העדות לעוצמת הקורס. לכן בשיעור הראשון כל תלמיד כותב את המטרות האישיות שלו לחיים. יש אנשים שכותבים שהם רוצים להפסיק לעשן, יש כאלה שכותבים שהם רוצים למצוא זוגיות, לעשות יותר כסף, להגדיל מעגלים חברתיים, לחזק ביטחון עצמי..</p>
                            <p>בקיצור, כל אחד והמטרות שלו. לכן כשתגלה כמה מהיר תגיע למטרות שלך, זה יהפוך את הקורס להרבה יותר עוצמתי מאשר אם שמעת סיפורים או ראית הדגמות. .</p>
                        </div>
                    </div>
                </div>
                <div class="pr__section1">
                    <h2 class="h2">מרשים! תכל'ס הוא לא ישעמם אותי?</h2>
                    <div class="pr__section1__desc">אלפי המנויים שלו ביוטיוב מרותקים לסרטונים שלו, אם יש לך ספק שפז ירתק גם אותך, למה לא להעיף מבט בכמה סרטונים?</div>
                    <div class="pr__section1__list pr__section1__list_2 owl-carousel">
                        <div class="pr__section1__item">
                            <div class="pr__section1__item__media">
                                <video autoplay="" muted="" class="pr__section1__item__media__val" src="{{asset('assets/img/content/index/Testata-Beige.mp4')}}" type="video/mp4" loop="true"></video>
                            </div>
                            <p class="pr__section1__item__title">למה זה טוב לחשוב שלילי?</p>
                        </div>
                        <div class="pr__section1__item">
                            <div class="pr__section1__item__media">
                                <video autoplay="" muted="" class="pr__section1__item__media__val" src="{{asset('assets/img/content/index/Testata-Beige.mp4')}}" type="video/mp4" loop="true"></video>
                            </div>
                            <p class="pr__section1__item__title">במקום להשתנות, יש בך את זה</p>
                        </div>
                        <div class="pr__section1__item">
                            <div class="pr__section1__item__media">
                                <video autoplay="" muted="" class="pr__section1__item__media__val" src="{{asset('assets/img/content/index/Testata-Beige.mp4')}}" type="video/mp4" loop="true"></video>
                            </div>
                            <p class="pr__section1__item__title">איך חשיבת יתר מרחיקה אותנו מהפתרון?</p>
                        </div>
                        <div class="pr__section1__item">
                            <div class="pr__section1__item__media">
                                <video autoplay="" muted="" class="pr__section1__item__media__val" src="{{asset('assets/img/content/index/Testata-Beige.mp4')}}" type="video/mp4')}}" loop="true"></video>
                            </div>
                            <p class="pr__section1__item__title">יש לי בעיה נורמאלית</p>
                        </div>
                        <div class="pr__section1__item">
                            <div class="pr__section1__item__media">
                                <video autoplay="" muted="" class="pr__section1__item__media__val" src="{{asset('assets/img/content/index/Testata-Beige.mp4')}}" type="video/mp4" loop="true"></video>
                            </div>
                            <p class="pr__section1__item__title">למה המוח לא מוצא פתרון כשצריך?</p>
                        </div>
                    </div>
                </div>

                <div class="pr__section1">
                    <h2 class="h2">וואו! סרטונים מעולים. אבל אם אנחנו מדברים על -NLP, אז אני רוצה לראות הדגמות שלו. יש לו הדגמות מצולמות?</h2>
                    <div class="pr__section1__desc">אלפי המנויים שלו ביוטיוב מרותקים לסרטונים שלו, אם יש לך ספק שפז ירתק גם אותך, למה לא להעיף מבט בכמה סרטונים?</div>
                    <div class="pr__section1__list owl-carousel">
                        <div class="pr__section1__item">
                            <div class="pr__section1__item__media">
                                <video autoplay="" muted="" class="pr__section1__item__media__val" src="{{asset('assets/img/content/index/Testata-Beige.mp4')}}" type="video/mp4" loop="true"></video>
                            </div>
                            <p class="pr__section1__item__title">כמובן, יש הדגמה שהוא מחזיר למישהי את חוש הריח</p>
                        </div>
                        <div class="pr__section1__item">
                            <div class="pr__section1__item__media">
                                <video autoplay="" muted="" class="pr__section1__item__media__val" src="{{asset('assets/img/content/index/Testata-Beige.mp4')}}" type="video/mp4" loop="true"></video>
                            </div>
                            <p class="pr__section1__item__title">עובד עם אדם שלא מרגיש בנוח עם עצמו</p>
                        </div>
                        <div class="pr__section1__item">
                            <div class="pr__section1__item__media">
                                <video autoplay="" muted="" class="pr__section1__item__media__val" src="{{asset('assets/img/content/index/Testata-Beige.mp4')}}" type="video/mp4" loop="true"></video>
                            </div>
                            <p class="pr__section1__item__title">אדם עם קונפליקט פנימי</p>
                        </div>
                        <div class="pr__section1__item">
                            <div class="pr__section1__item__media">
                                <video autoplay="" muted="" class="pr__section1__item__media__val" src="{{asset('assets/img/content/index/Testata-Beige.mp4')}}" type="video/mp4" loop="true"></video>
                            </div>
                            <p class="pr__section1__item__title">אדם עם פחד קהל</p>
                        </div>
                        <div class="pr__section1__item">
                            <div class="pr__section1__item__media">
                                <video autoplay="" muted="" class="pr__section1__item__media__val" src="{{asset('assets/img/content/index/Testata-Beige.mp4')}}" type="video/mp4" loop="true"></video>
                            </div>
                            <p class="pr__section1__item__title">כאב פיזי</p>
                        </div>
                        <div class="pr__section1__item">
                            <div class="pr__section1__item__media">
                                <video autoplay="" muted="" class="pr__section1__item__media__val" src="{{asset('assets/img/content/index/Testata-Beige.mp4')}}" type="video/mp4" loop="true"></video>
                            </div>
                            <p class="pr__section1__item__title">"קשה לי בחברת מטומטמים"</p>
                        </div>
                    </div>
                </div>

                <div class="master__wrapper">
                    <div class="master__info">
                        <ul class="content__accordion">
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">טוב זה מטורף, אני אדע לעשות את זה במהלך הקורס?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">וזה משהו שאני אקבל בכל קורס NLP?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>

                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">ממממ לא בטוח שהבנתי את ההבדל, אז מה היתרון בקורס של פז?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">זה באמת משנה אם אלמד במקום עם רמה קצת יותר נמוכה? זה נשמע כמו חומר שכל אדם יכול לשנן ולהעביר הלאה</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">סליחה על השאלה, אבל NLP זה לא תחום שכל אדם יכול להעביר? פשוט לעשות העתק הדבק, לא?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="master__img">
                        <div class="photo photo_orange_bottom">
                            <img src="{{asset('assets/img/template/photoYellowBottom.svg')}}" alt="" class="photo__shape">
                            <div class="photo__wrapper">
                                <img src="{{asset('assets/img/content/pr/3.jpg')}}" alt="" class="photo__img">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="div5">
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
                                <p class="div5__item__desc">“בפגישה הראשונה, ניהלתי שיחות אמיתיות על נושאים עסקיים קריטיים, עם קבוצה קטנה ואצורת מאוד של עמיתים שהבינה את הלחץ של להיות מנכ"ל של עסק הנתמך על ידי הון סיכון”.</p>
                            </div>
                            <div class="div5__item__img">
                                <img src="{{asset('assets/img/content/index/Rectangle12525.png')}}" alt="">
                            </div>
                        </div>
                        <div class="div5__item">
                            <div class="div5__item__info">
                                <p class="div5__item__title">ג'ניפר פיצג'רלד</p>
                                <p class="div5__item__title1">סטוּדֶנט</p>
                                <p class="div5__item__desc">“בפגישה הראשונה, ניהלתי שיחות אמיתיות על נושאים עסקיים קריטיים, עם קבוצה קטנה ואצורת מאוד של עמיתים שהבינה את הלחץ של להיות מנכ"ל של עסק הנתמך על ידי הון סיכון”.</p>
                            </div>
                            <div class="div5__item__img">
                                <img src="{{asset('assets/img/content/index/Rectangle125251.png')}}" alt="">
                            </div>
                        </div>
                        <div class="div5__item">
                            <div class="div5__item__info">
                                <p class="div5__item__title">ג'ניפר פיצג'רלד</p>
                                <p class="div5__item__title1">סטוּדֶנט</p>
                                <p class="div5__item__desc">“בפגישה הראשונה, ניהלתי שיחות אמיתיות על נושאים עסקיים קריטיים, עם קבוצה קטנה ואצורת מאוד של עמיתים שהבינה את הלחץ של להיות מנכ"ל של עסק הנתמך על ידי הון סיכון”.</p>
                            </div>
                            <div class="div5__item__img">
                                <img src="{{asset('assets/img/content/index/Rectangle125252.png')}}" alt="">
                            </div>
                        </div>
                        <div class="div5__item">
                            <div class="div5__item__info">
                                <p class="div5__item__title">ג'ניפר פיצג'רלד</p>
                                <p class="div5__item__title1">סטוּדֶנט</p>
                                <p class="div5__item__desc">“בפגישה הראשונה, ניהלתי שיחות אמיתיות על נושאים עסקיים קריטיים, עם קבוצה קטנה ואצורת מאוד של עמיתים שהבינה את הלחץ של להיות מנכ"ל של עסק הנתמך על ידי הון סיכון”.</p>
                            </div>
                            <div class="div5__item__img">
                                <img src="{{asset('assets/img/content/index/Rectangle125253.png')}}" alt="">
                            </div>
                        </div>
                        <div class="div5__item">
                            <div class="div5__item__info">
                                <p class="div5__item__title">ג'ניפר פיצג'רלד</p>
                                <p class="div5__item__title1">סטוּדֶנט</p>
                                <p class="div5__item__desc">“בפגישה הראשונה, ניהלתי שיחות אמיתיות על נושאים עסקיים קריטיים, עם קבוצה קטנה ואצורת מאוד של עמיתים שהבינה את הלחץ של להיות מנכ"ל של עסק הנתמך על ידי הון סיכון”.</p>
                            </div>
                            <div class="div5__item__img">
                                <img src="{{asset('assets/img/content/index/Rectangle125254.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="div5__dots">
                        <div id="carousel-custom-dots" class="div5__dots__wrapper">
                            <button class="div5__dots__btn"><div class="div5__item__img"><img src="{{asset('assets/img/content/index/Rectangle12525.png')}}" alt=""></div></button>
                            <button class="div5__dots__btn"><div class="div5__item__img"><img src="{{asset('assets/img/content/index/Rectangle125251.png')}}" alt=""></div></button>
                            <button class="div5__dots__btn"><div class="div5__item__img"><img src="{{asset('assets/img/content/index/Rectangle125252.png')}}" alt=""></div></button>
                            <button class="div5__dots__btn"><div class="div5__item__img"><img src="{{asset('assets/img/content/index/Rectangle125253.png')}}" alt=""></div></button>
                            <button class="div5__dots__btn"><div class="div5__item__img"><img src="{{asset('assets/img/content/index/Rectangle125254.png')}}" alt=""></div></button>
                        </div>
                    </div>
                </div>

                <div class="pr__section1">
                    <h2 class="h2 h2_center">ואפשר גם לצפות בכמה עדויות מצולמות</h2>
                    <div class="pr__section1__list pr__section1__list_2 owl-carousel">
                        <div class="pr__section1__item">
                            <div class="pr__section1__item__media">
                                <video autoplay="" muted="" class="pr__section1__item__media__val" src="{{asset('assets/img/content/index/Testata-Beige.mp4')}}" type="video/mp4" loop="true"></video>
                            </div>
                            <p class="pr__section1__item__title">אדם עם פחד קהל</p>
                        </div>
                        <div class="pr__section1__item">
                            <div class="pr__section1__item__media">
                                <video autoplay="" muted="" class="pr__section1__item__media__val" src="{{asset('assets/img/content/index/Testata-Beige.mp4')}}" type="video/mp4" loop="true"></video>
                            </div>
                            <p class="pr__section1__item__title">כאב פיזי</p>
                        </div>
                        <div class="pr__section1__item">
                            <div class="pr__section1__item__media">
                                <video autoplay="" muted="" class="pr__section1__item__media__val" src="{{asset('assets/img/content/index/Testata-Beige.mp4')}}" type="video/mp4" loop="true"></video>
                            </div>
                            <p class="pr__section1__item__title">"קשה לי בחברת מטומטמים"</p>
                        </div>
                    </div>
                </div>

                <div class="pr__yellow">
                    <h2 class="h2">מעניין! אפשר להקשיב לשיעור לדוגמה?</h2>
                    <div class="pr__yellow__desc">
                        אם מעניין אותך לגלות איך פז מסדר את הדברים, מפשט אותם ומלמד אותם, תוכל להקשיב לפודקסט שלו שזמין בכל הפלטפורמות. כל פרק בנושא אחר (פחדים, לחץ, ביטחון עצמי, קבלת החלטות, התמדה וכו'). התכנים המטורפים שיש שם, הם אפילו לא אחוז אחד מהקורס.
                    </div>
                    <div class="pr__yellow__list">
                        <a href="" class="pr__yellow__item">
                            <img src="{{asset('assets/img/content/pr/icon4.svg')}}" alt="">
                        </a>
                        <a href="" class="pr__yellow__item">
                            <img src="{{asset('assets/img/content/pr/icon3.svg')}}" alt="">
                        </a>
                        <a href="" class="pr__yellow__item">
                            <img src="{{asset('assets/img/content/pr/icon2.svg')}}" alt="">
                        </a>
                        <a href="" class="pr__yellow__item">
                            <img src="{{asset('assets/img/content/pr/icon1.svg')}}" alt="">
                        </a>
                    </div>
                </div>

                <div class="master__wrapper master__wrapper_reverse">
                    <div class="master__info">
                        <ul class="content__accordion">
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">וואו! איזו רמה גבוהה! רק.. אולי אני אבלע בין כל התלמידים?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">ואם יש לי שאלות במהלך השבוע?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">פז מעביר את כל השיעורים בעצמו?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">ואם אפספס שיעור? או סתם היה חסר לי ריכוז בשיעור?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">פששש איזו השקעה! כמה זמן הקורס?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">זה ממש קורס? עם הכתבות ומבחנים?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">בנוסף לקורס המטורף הזה יש עוד בונוס?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">וואו! אין דברים כאלה. אז אני באמת אצא ברמה גבוהה, הא?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="master__img">
                        <div class="photo photo_orange_bottom">
                            <img src="{{asset('assets/img/template/photoGreenBottom.svg')}}" alt="" class="photo__shape">
                            <div class="photo__wrapper">
                                <img src="{{asset('assets/img/content/pr/4.jpg')}}" alt="" class="photo__img">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="master__wrapper">
                    <div class="master__info">
                        <ul class="content__accordion">
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">יהיה לי קל להגיע? איפה מתקיים הקורס?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">ואני אוכל לקבל תעודה בסוף הקורס?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">מה צריך לעשות כדי לקבל תעודה?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">רגע.. אני יכול לטפל אחרי קורס פרקטישינר?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">אבל במקומות אחרים אמרו לי שאי אפשר לטפל אחרי פרקטישינר</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">אוקי, אז מה זה הקורס המשך?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">מעניין... ולא יחסר לי כלום אחרי הפרקטישינר?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">חזק!! מה המחיר של הקורס?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="master__img">
                        <div class="photo photo_orange_bottom">
                            <img src="{{asset('assets/img/template/photoOrangeBottom.svg')}}" alt="" class="photo__shape">
                            <div class="photo__wrapper">
                                <img src="{{asset('assets/img/content/pr/5.jpg')}}" alt="" class="photo__img">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="div4">
                    <h2 class="h2">קיבלתי הצעות הרבה יותר זולות מכם, היה אפילו בית ספר שהציע לי את המחיר הזה עבור קורס הפרקטישינר והמאסטר</h2>
                    <div class="pr__desc">
                        <p>אנחנו מציעים לך לבדוק גם מה יש בתוך הקנקן. לפי מה שידוע לנו, בתי הספר שקוראים לקורס שלהם מאסטר מלמדים את התכנים שמקבלים אצלנו בפרקטישינר ככה שבסופו של דבר זה לא באמת פרקטישינר ומאסטר, אלא תכנים של פרקטישינר שפוצלו גם למאסטר. מי שצריך הוכחה מוזמן לעבור על הסילבוס ולבדוק את התכנים בעצמו. חוץ מזה שגם אם נניח שסילבוס אחר מכיל יותר תכנים מהקורס המקיף שלנו, עדיין הויכוח הוא לא על מספר התכנים אלא על איכותם ורמת העומק. כל מי שמכיר את פז יודע שכאשר הוא מלמד משהו, הוא מגיע לעומקים ורבדים כל-כך עוצמתיים שעוזרים לך להבין כל נושא לעומק, ליישם אותו ולעבוד איתו. לא הכרנו הרבה אנשים שמצליחים לחשוב בצורה כזאת עמוקה כמו שפז מצליח להסביר.</p>
                        <p>אנחנו מודעים לזה שמחיר זה לא הסיבה שבגללה אנשים באים ללמוד אצלנו. מי שמחפש את המחיר הזול ביותר, אנחנו כנראה לא הכתובת בשבילו. כמובן שאנחנו מספקים מוצר מדהים עבור המחיר ואנחנו באמת מאמינים שהוא שווה פי כמה מהמחיר.</p>
                    </div>
                    <div class="div4__wrapper">
                        <div class="div4__info">
                            <p class="div4__title">כחלק מהקורס כל תלמיד מקבל</p>
                            <ul>
                                <li>דת מלא שמות לימודים ויקיפדיה. היא על והוא אנתרופולוגיה, דת כתב כלליים תיאטרון. כדור ייִדיש בלשנות זכר אל. או יסוד סוציולוגיה היא.</li>
                                <li>דת מלא שמות לימודים ויקיפדיה. היא על והוא אנתרופולוגיה, דת כתב כלליים תיאטרון. כדור ייִדיש בלשנות זכר אל. או יסוד </li>
                                <li>דת מלא שמות לימודים ויקיפדיה. היא על והוא אנתרופולוגיה, דת כתב כלליים תיאטרון. כדור ייִדיש בלשנות זכר אל. או יסוד </li>
                                <li>דת מלא שמות לימודים ויקיפדיה. היא על והוא אנתרופולוגיה, דת כתב כלליים תיאטרון. כדור ייִדיש בלשנות זכר אל. או יסוד </li>
                            </ul>
                            <div>
                                <a href="" class="btn">להתחיל</a>
                            </div>
                        </div>
                        <div class="div4__img">
                            <div class="photo photo_green">
                                <div class="photo__wrapper">
                                    <img src="{{asset('assets/img/content/pr/6.jpg')}}" alt="" class="photo__img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pr__desc">
                        <ul>
                            <li>כמובן שהכול מוגש ברמה הגבוהה ביותר כיום. אין בישראל רמה יותר גבוהה של חשיבה פורצת דרך. המחיר לא זול אבל שווה כל אגורה. כלומר, ביחס למה שאנחנו נותנים המחיר ממש אטרקטיבי. זו כנראה הסיבה שבגללה באים אלינו אנשים שכבר עשו קורסי NLP במקומות אחרים ובאים ללמוד את הקורס שוב אצלנו, כי הם כנראה מבינים שהקורס שלנו לא יושב בקנה אחד עם שאר ההצעות בשוק.</li>
                            <li>אנחנו נותנים קורס שערכו 36650 ₪ בשליש מחיר, ולכן להערכתנו זה מחיר מציאה, יחד עם זאת אנחנו יכולים להבין אנשים שכבד להם להוציא 12,000 ₪. בסופו של דבר לשלם עבור משהו שנראה זול, להתבאס מזה ולהפסיד פריצות דרך מטריפות זה הרבה יותר יקר מאשר ללכת לרמה הגבוהה ביותר. אצלנו התלמידים נמצאים בידיים טובות, עם ראש שקט שהם בדרך לפריצות דרך עוצמתיות ומהירות.</li>
                        </ul>
                    </div>
                </div>

                <div class="master__wrapper master__wrapper_reverse">
                    <div class="master__info">
                        <ul class="content__accordion">
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">ואיך אדע שזה באמת שווה את המחיר?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">לא בטוח שמעניין אותי לעסוק בתחום.</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">ואם בכל זאת יעניין אותי לעסוק בתחום, איך הקורס יעזור לי?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">למדתי קצת שיווק ומכירות, זה באמת יעזור?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">איזו רמה גבוהה!! איך מצטרפים?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">מקבלים הרבה דברים, כדי לוודא שלא הלכתי לאיבוד, תוכל לסכם לי למה לי להירשם?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                            <li class="content__accordion__item">
                                <p class="content__accordion__item__title">אפשר בכל זאת קצת להציץ בסילבוס?</p>
                                <p class="content__accordion__item__desc">מבחינה חוקית אסור לנו להגיד שזה היפנוזה. לכן אנחנו מלמדים דמיון מודרך.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="master__img">
                        <div class="photo photo_orange_bottom photo_reverse">
                            <img src="{{asset('assets/img/template/photoGreenBottom.svg')}}" alt="" class="photo__shape">
                            <div class="photo__wrapper">
                                <img src="{{asset('assets/img/content/pr/7.jpg')}}" alt="" class="photo__img">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pr__table">
                    <h2 class="h2">לורם איפסום היה</h2>
                    <div class="pr__table__list">
                        <p class="pr__table__title">שם הנושא</p>
                        <p class="pr__table__title">הסבר קצר</p>

                        <p class="pr__table__item">מהו NLP, היסטוריה, מבנה.</p>
                        <p class="pr__table__item">כיצד נוצר ה-NLP? מה גילו?</p>

                        <p class="pr__table__item">מודל do have be</p>
                        <p class="pr__table__item">מדל המאפשר לחשוב אחרת</p>

                        <p class="pr__table__item">בידול שפה תיאורית ופרשנית</p>
                        <p class="pr__table__item">פיתוח ערנות לשפה שלנו ושל המונחה</p>

                        <p class="pr__table__item">מודל התקשורת של ה-NLP</p>
                        <p class="pr__table__item">ההבנה של המנגנון שיוצר את התקשורת וחוסר התקשורת בין אנשים</p>

                        <p class="pr__table__item">הנחות היסוד של ה-NLP</p>
                        <p class="pr__table__item">האמונות המקדמות של אנשים ה-NLP</p>

                        <p class="pr__table__item">עקרונות ההצלחה של ה-NLP</p>
                        <p class="pr__table__item">חמשת העקרונות להצלחה</p>

                        <p class="pr__table__item">חדות חושים</p>
                        <p class="pr__table__item">פיתוח היכולת לקבל מסרים לא מילוליים ולקרוא שפת גוף</p>

                        <p class="pr__table__item">הלימה וחוסר הלימה</p>
                        <p class="pr__table__item">היכולת לזהות את הכנות של האדם שמולנו</p>

                        <p class="pr__table__item">ראפור</p>
                        <p class="pr__table__item">טכניקה המאפשרת ליצור חיבור והקשבה עם כל אדם ובכל סיטואציה</p>

                        <p class="pr__table__item">עקרונות הגדרת המטרה ובידול של מטרה פיסית ממטרה ערכית</p>
                        <p class="pr__table__item">הגדרת המטרה היא חצי דרך- איך עושים זאת נכון?</p>

                        <p class="pr__table__item">תשאול ומשוב</p>
                        <p class="pr__table__item">פיתוח היכולת לשים לב למבנה התשובות וכך ליצור שינוי.</p>

                        <p class="pr__table__item">ויזואליזציה</p>
                        <p class="pr__table__item">איך אפשר ליצור מציאות בעזרת דמיון?</p>

                        <p class="pr__table__item">תלת תיאור</p>
                        <p class="pr__table__item">היכולת להגיע לתוכנות חדשות דרך הסתכלות מזוויות שונות</p>

                        <p class="pr__table__item">מערכות ייצוג</p>
                        <p class="pr__table__item">היכולת לזהות את אופני החשיבה שלנו ושל האחרים.</p>

                        <p class="pr__table__item">רמזי המבט</p>
                        <p class="pr__table__item">מה אומרות תזוזות העיניים וכיצד זה תורם ליצירת שינוי?</p>

                    </div>
                </div>

                <div class="pr__table">
                    <h2 class="h2">לורם איפסום היה</h2>
                    <div class="pr__table__list pr__table__list_yellow">
                        <p class="pr__table__title">שם הנושא</p>
                        <p class="pr__table__title">הסבר קצר</p>

                        <p class="pr__table__item">מטא מודל- אומנות התשאול</p>
                        <p class="pr__table__item">אומנות התשאול האפקטיבי ולהבין איפה ליצור את השינוי הקטן שיעשה את ההבדל הגדול.</p>

                        <p class="pr__table__item">מילטון מודל- אומנות ההשפעה</p>
                        <p class="pr__table__item">אומנות המילים ומבנה המשפטים שיוצרים שינויים לא מודעים</p>

                        <p class="pr__table__item">הרחבת המפה</p>
                        <p class="pr__table__item">פיתוח אפשרויות הבחירה</p>

                        <p class="pr__table__item">הלכי רוח</p>
                        <p class="pr__table__item">כיצד לעורר רגשות והלכי רוח תוך כדי שיחה.</p>

                        <p class="pr__table__item">תת אופנויות</p>
                        <p class="pr__table__item">טכניקה לשינוי קידוד המחשבות.</p>

                        <p class="pr__table__item">סוויש</p>
                        <p class="pr__table__item">טכניקה שיוצרת שינויים אוטומטיים מהירים</p>

                        <p class="pr__table__item">Fast phobia cure</p>
                        <p class="pr__table__item">טכניקה להכחדת פוביות במהירות.</p>

                        <p class="pr__table__item">עוגנים: מרחביים, חישתיים, שרשור עוגנים, הכחדת עוגנים</p>
                        <p class="pr__table__item">יצירה והכחדה של גירוי ותגובה אוטומטיים.</p>

                        <p class="pr__table__item">מעגל מצוינות</p>
                        <p class="pr__table__item">טכניקה להעצמת המצוינות.</p>

                        <p class="pr__table__item">מטאפורות</p>
                        <p class="pr__table__item">היכולת להעביר מסרים בלי התנגדות.</p>

                        <p class="pr__table__item">מיפוי והתקנת אסטרטגיות</p>
                        <p class="pr__table__item">היכולת לדגום ולהתקין רצף פעולות על מנת ליצור תוצאות שונות.</p>

                        <p class="pr__table__item">מחולל התנהגויות חדשות</p>
                        <p class="pr__table__item">טכניקה לשינוי התנהגותי.</p>

                        <p class="pr__table__item">Reframe ומסגרות</p>
                        <p class="pr__table__item">היכולת לשנות את האופן שבו האנשים סביבנו מתייחסים למסר. והיכולת להעביר מסר בצורה מוצלחת</p>

                        <p class="pr__table__item">ביטחון עצמי, הערכה עצמית, דימוי עצמי ואהבה עצמית</p>
                        <p class="pr__table__item">כיצד ליצור ולהגדיל את הביטחון העצמי, ההערכה העצמית, הדימוי העצמי והאהבה העצמית.</p>

                    </div>
                </div>

                <div class="pr__table">
                    <h2 class="h2">לורם איפסום היה</h2>
                    <div class="pr__table__list pr__table__list_purple">
                        <p class="pr__table__title">שם הנושא</p>
                        <p class="pr__table__title">הסבר קצר</p>

                        <p class="pr__table__item">אפליקציות</p>
                        <p class="pr__table__item">אילו עוד שימושים יש לטכניקות של ה-NLP ובאילו עוד מקומות הם יוכלו לתרום לשינוי והשפעה חיוביים.</p>

                        <p class="pr__table__item">אקולוגיה</p>
                        <p class="pr__table__item">מודל המבטיח שהשינוי יישאר לכל החיים בצורה אוטומטית</p>

                        <p class="pr__table__item">שינוי דרך הרמות הנוירולוגיות של דילטס</p>
                        <p class="pr__table__item">מודל הרמות הנוירולוגיות של דילטס המאפשר לוודא שהשיחה מתוקשרת היטב ולגלות עוד נתיבי שינוי.</p>

                        <p class="pr__table__item">חשיבה יצירתית</p>
                        <p class="pr__table__item">היכולת לחשוב מחוץ לקופסא באמצעות כלי ה-NLP</p>

                        <p class="pr__table__item">דמיון מודרך</p>
                        <p class="pr__table__item">שימוש בתרפיית הדמיון כדי ליצור שינויים</p>

                        <p class="pr__table__item">מבנה אמונות</p>
                        <p class="pr__table__item">כיצד ניתן לזהות אמונות ולשנותן</p>

                        <p class="pr__table__item">שיווק אישי ומיתוג</p>
                        <p class="pr__table__item">איך לשווק את עצמך ולמצוא עבודה בתחום ה-NLP</p>

                        <p class="pr__table__item">אינטגרציות</p>
                        <p class="pr__table__item">עבודה עם כל כלי ה-NLP בצורה אוטומטית ושילובם בצורה לא מודעת</p>

                    </div>
                </div>


                <div class="pr__btn">
                    <a href="" class="btn">להתחיל</a>
                </div>


            </div>

        </div>
    </section>
@endsection
@section('custom-script')
    <script src="{{ asset('assets/js/pr.js') }}"></script>
@endsection
