<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use App\Models\Enrollment;
use App\Models\Course;
use App\Models\Checkout;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $student_info = User::find(currentUserId());
        $enrollment = Enrollment::where('student_id', currentUserId())->get();
        $activedCourses = Course::inRandomOrder()->limit(3)->get();
        $checkout = Checkout::where('student_id', currentUserId())->get();
        $completedCourses = Course::inRandomOrder()->limit(3)->get();
        // $purchaseHistory = Enrollment::with(['course', 'checkout'])->orderBy('enrollment_date', 'desc')->get();
        return view('students.dashboard', compact('student_info', 'enrollment', 'activedCourses', 'completedCourses', 'checkout'));
    }
}
