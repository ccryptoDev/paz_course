@extends('frontend.layouts.app')
@section('title', 'Master_Practitioner')

@section('custom-style')
    <link rel="stylesheet" href="{{asset('assets/css/master.css')}}">
@endsection

@section('content')
    <section class="master master_practitioner">
        <div class="container">
            <h1 class="h1">פז אושרן- NLP Master Practitioner</h1>
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
                    <div class="photo photo_orange_bottom">
                        <img src="{{asset('assets/img/template/photoOrangeBottom.svg')}}" alt="" class="photo__shape">
                        <div class="photo__wrapper">
                            <img src="{{asset('assets/img/content/master/1.jpg')}}" alt="" class="photo__img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="master__wrapper master__wrapper_reverse">
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
                    <div class="photo photo_orange_bottom">
                        <img src="{{asset('assets/img/template/photoGreenBottom.svg')}}" alt="" class="photo__shape">
                        <div class="photo__wrapper">
                            <img src="{{asset('assets/img/content/master/2.jpg')}}" alt="" class="photo__img">
                        </div>
                    </div>
                </div>
            </div>
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
                    <div class="photo photo_orange_bottom">
                        <img src="{{asset('assets/img/template/photoYellowBottom.svg')}}" alt="" class="photo__shape">
                        <div class="photo__wrapper">
                            <img src="{{asset('assets/img/content/master/1.jpg')}}" alt="" class="photo__img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content__wrapper">
                <div class="content__list">
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/1.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">דיגום קריטריונים</h3>
                            <p>*בלעדי*- מודל המאפשר לדגום דרך התוצאה בלי לדבר עם האדם.</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/2.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">לוגיקה</h3>
                            <p>פיתוח החשיבה הלוגית והסברים לוגיים לאנשים עם גורם ביקורתי חזק.</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/3.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">4mat</h3>
                            <p>מודל ליצירת מערך שיעור איכותי שיתקין את הדיגומים ולא רק ילמד אותם.</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/4.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">קטגוריות סאטיר</h3>
                            <p>הבנת שפת גוף ותנועות גוף משמעותיות שיוצרות השפעה ריגשית חזקה.</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/5.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">עבודת ערכים</h3>
                            <p>היכולת למפות ולשנות מוטיבציות ומניעים שמנהלים את חיינו וחיי הסביבה שלנו.</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/6.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">תתי אופנויות מתקדמות</h3>
                            <p>העמקה בתתי האופנויות על מנת להבין את עולמו הפנימי של האדם בהרחבה.</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/7.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">אסטרטגיות נסתרות</h3>
                            <p>הבנת האסטרטגיות שהאדם לא מודע אליהן</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/8.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">מודל SEXC</h3>
                            <p>היכולת להתקין אמונות בצורה שיחתית</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/9.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">עבודת קריטריונים</h3>
                            <p>בניית הגדרות מדוייקות וכך שיפור התקשורת הבינאישית.</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/10.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">זריזות לשון</h3>
                            <p>16 תבניות ריפריים מתקדמות לשינוי אמונות שיחתי</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/11.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">שיפור תקשורת בינאישית באמצעות קריטריונים</h3>
                            <p>פיתוח הדעות האישיות וגיבוש תפיסת העולם, והיכולת להסביר אותה.</p>
                        </div>
                    </div>
                </div>
                <div class="content__list">
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/12.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">אבולוציית הערכים של גרייבס</h3>
                            <p>להבין צורות חיים שונות שמאפיינות תפיסות חשיבה שונות וכך "לנבא" איך אדם יפעל בסיטואציות שונות בחיו.</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/13.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">דיגום</h3>
                            <p>היכולת לקחת כל מיומנות ולהפוך אותה למתכון ברור ופשוט כך שנוכל להגיע לאותה תוצאה וללמד אחרים להגיע לתוצאה המבוקשת</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/14.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">תבניות שפה קוונטיות
                                (קופסאות חשיבה)</h3>
                            <p>תבניות שפה שיוצרות שינוי לא מודע ומוציאות אותו מקופסת החשיבה הישנה.</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/15.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">חיבורים</h3>
                            <p>היכולת לחבר את כל פיסות האינפורמציה שאנחנו מקבלים ולגזור מהם תובנות משמעותיות על האדם, חיבור של כל כלי האבחון להבנה מעמיקה של האדם שמולנו.</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/16.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">טיים ליין</h3>
                            <p>מודל קו הזמן של ה-NLP לפיתרון מהיר ולצמיתות של רגשות שליליים כמו כעס, עצבות, פחד, אשמה ופגיעות.</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/17.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">מטא פרוגרם</h3>
                            <p>היכולת לשים לב ולשנות דפוסי חשיבה חוזרים המכונים ע"י הקהל הרחב "אופי". להבין מה אפקטיבי ומה דפקטיבי בכל דפוס גם אם הלקוח לא חשף זאת.</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/18.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">אסטרטגיות מתקדמות</h3>
                            <p>להבין ולשנות את אסטרטגיות החשיבה של המונחה לעומק. מפרקים את כל אחד משלבי האסטרטגיה (טסט ואופורציה) ומבינים אסטרטגיה לעומק. בנוסף לומדים לעצב מחדש אסטרטגיה.</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/19.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">המבנה המלא של האמונה</h3>
                            <p>הבנת מערכת האמונות המלאה והתלת מימדית של האדם וכך מקבלים תמונה ברורה של מפת המונחה. זיהוי ואבחון מהיר של הנחות מוקדמות ואמונות שורשיות ובעייתיות.</p>
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item__img">
                            <img src="{{asset('assets/img/content/master/p/20.svg')}}" alt="">
                        </div>
                        <div class="content__item__info">
                            <h3 class="h3">סשן פורץ דרך</h3>
                            <p>סשן של כמה שעות בו לומדים הרבה מעבר מ"לפתור בעיה", אלא מגיעים ל"לשנות חיים". סשן מעמיק בו מבינים איך לקרוא את הבעיות שהאדם עצמו אפילו לא חשב עליהם.</p>
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
