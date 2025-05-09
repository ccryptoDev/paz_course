<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Setting\AuthenticationController as auth;
use App\Http\Controllers\Backend\Setting\UserController as user;
use App\Http\Controllers\Backend\Setting\DashboardController as dashboard;
use App\Http\Controllers\Backend\Setting\RoleController as role;
use App\Http\Controllers\Backend\Setting\PermissionController as permission;
use App\Http\Controllers\Backend\Students\StudentController as student;
use App\Http\Controllers\Backend\Instructors\InstructorController as instructor;
use App\Http\Controllers\Backend\Courses\CourseCategoryController as courseCategory;
use App\Http\Controllers\Backend\Courses\CourseController as course;
use App\Http\Controllers\Backend\Courses\MaterialController as material;
use App\Http\Controllers\Backend\Quizzes\QuizController as quiz;
use App\Http\Controllers\Backend\Quizzes\QuestionController as question;
use App\Http\Controllers\Backend\Quizzes\OptionController as option;
use App\Http\Controllers\Backend\Quizzes\AnswerController as answer;
use App\Http\Controllers\Backend\Reviews\ReviewController as review;
use App\Http\Controllers\Backend\Communication\DiscussionController as discussion;
use App\Http\Controllers\Backend\Communication\MessageController as message;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchCourseController;
use App\Http\Controllers\CheckoutController as checkout;
use App\Http\Controllers\CouponController as coupon;
use App\Http\Controllers\WatchCourseController as watchCourse;
use App\Http\Controllers\LessonController as lesson;
use App\Http\Controllers\EnrollmentController as enrollment;
use App\Http\Controllers\EventController as event;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Backend\Pages\ContactPageController as contactPage;
use App\Http\Controllers\Backend\Pages\AboutPageController as aboutPage;

/* students */
use App\Http\Controllers\Students\AuthController as sauth;
use App\Http\Controllers\Students\DashboardController as studashboard;
use App\Http\Controllers\Students\ProfileController as stu_profile;
use App\Http\Controllers\Students\sslController as sslcz;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('admin/register', [auth::class, 'signUpForm'])->name('register');
// Route::post('admin/register', [auth::class, 'signUpStore'])->name('register.store');
Route::get('admin/login', [auth::class, 'signInForm'])->name('admin.login');
Route::post('admin/login', [auth::class, 'signInCheck'])->name('admin.check');
Route::get('admin/logout', [auth::class, 'signOut'])->name('admin.logout');


Route::middleware(['checkauth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [dashboard::class, 'index'])->name('dashboard');
    Route::get('userProfile', [auth::class, 'show'])->name('userProfile');
});

Route::middleware(['checkrole'])->prefix('admin')->group(function () {
    Route::resource('user', user::class); 
    Route::resource('role', role::class);
    Route::resource('student', student::class);
    Route::resource('instructor', instructor::class);
    Route::resource('courseCategory', courseCategory::class);
    Route::resource('course', course::class);
    Route::get('/courseList', [course::class, 'indexForAdmin'])->name('courseList');
    Route::patch('/courseList/{update}', [course::class, 'updateforAdmin'])->name('course.updateforAdmin');
    Route::resource('material', material::class);
    Route::resource('lesson', lesson::class);
    Route::resource('event', event::class);
    Route::resource('quiz', quiz::class);
    Route::resource('question', question::class);
    Route::resource('option', option::class);
    Route::resource('answer', answer::class);
    Route::resource('review', review::class); 
    Route::resource('discussion', discussion::class);
    Route::resource('message', message::class);
    Route::resource('coupon', coupon::class);
    Route::resource('enrollment', enrollment::class);

    Route::get('pages/contact', [contactPage::class, 'edit'])->name('contactPage.edit');    // admin contact page
    Route::post('pages/contact', [contactPage::class, 'update'])->name('contactPage.update');
    Route::get('pages/about', [aboutPage::class, 'edit'])->name('aboutPage.edit');    // admin about page
    Route::post('pages/about', [aboutPage::class, 'update'])->name('aboutPage.update');
    
    Route::get('permission/{role}', [permission::class, 'index'])->name('permission.list');
    Route::post('permission/{role}', [permission::class, 'save'])->name('permission.save');
});


/* students controllers */
Route::get('/user/register', [sauth::class, 'signUpForm'])->name('user.register');
Route::post('/user/register/{back_route}', [sauth::class, 'signUpStore'])->name('user.store');
Route::get('/user/login', [sauth::class, 'signInForm'])->name('user.login');
Route::post('/user/login/{back_route}', [sauth::class, 'signInCheck'])->name('user.check');
Route::get('/user/logout', [sauth::class, 'signOut'])->name('user.logout');

Route::middleware(['checkstudent'])->prefix('students')->group(function () {
    Route::get('/dashboard', [studashboard::class, 'index'])->name('studentdashboard');
    Route::get('/profile', [stu_profile::class, 'index'])->name('student_profile');
    Route::post('/profile/save', [stu_profile::class, 'save_profile'])->name('student_save_profile');
    Route::post('/profile/savePass', [stu_profile::class, 'change_password'])->name('change_password');
    Route::post('/change-image', [stu_profile::class, 'changeImage'])->name('change_image');

    // ssl Routes
    Route::post('/payment/ssl/submit', [sslcz::class, 'store'])->name('payment.ssl.submit');
});

// password
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// frontend pages
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/master',[HomeController::class, 'master']);
Route::get('/master-practitioner',[HomeController::class, 'master_practitioner']);
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/article', [HomeController::class, 'article']);
Route::get('/practitioner', [HomeController::class, 'practitioner']);

Route::middleware(['checkstudent'])->group(function () {
    Route::get('searchCourse', [SearchCourseController::class, 'index'])->name('searchCourse'); 
    Route::get('courseDetails/{id}', [course::class, 'frontShow'])->name('courseDetails');
    Route::get('watchCourse/{id}', [watchCourse::class, 'watchCourse'])->name('watchCourse');
    Route::get('instructorProfile/{id}', [instructor::class, 'frontShow'])->name('instructorProfile');
    Route::get('checkout', [checkout::class, 'index'])->name('checkout');
    Route::post('checkout', [checkout::class, 'store'])->name('checkout.store');

    // Cart
    Route::get('/cart_page', [CartController::class, 'index']);
    Route::get('cart', [CartController::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');

    // Coupon
    Route::post('coupon_check', [CartController::class, 'coupon_check'])->name('coupon_check');

    /* ssl payment */
    Route::post('/payment/ssl/notify', [sslcz::class, 'notify'])->name('payment.ssl.notify');
    Route::post('/payment/ssl/cancel', [sslcz::class, 'cancel'])->name('payment.ssl.cancel');
});


// Route::get('/about', function () {
//     return view('frontend.about');
// })->name('about');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');
