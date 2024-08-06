<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use App\Models\Student;
use App\Models\User;
use App\Http\Requests\Students\Auth\SignUpRequest;
use App\Http\Requests\Students\Auth\SignInRequest;
use Illuminate\Support\Facades\Hash;
use Exception;

class AuthController extends Controller
{
    public function signUpForm()
    {
        return view('students.auth.register');
    }

    public function signUpStore(SignUpRequest $request, $back_route)
    {
        try {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role_id = 4;
            $user->status = 1;
            $user->password = Hash::make($request->password);
            if ($user->save()){
                return redirect()->route($back_route)->with('success', 'Successfully registered');
            }
        } catch (Exception $e) {
            //dd($e);
            return redirect()->back()->with('danger', 'Please Try Again');
        }
    }

    public function signInForm()
    {
        return view('students.auth.login');
    }

    public function signInCheck(SignInRequest $request, $back_route)
    {
        try {
            // $student = Student::Where('email', $request->email)->first();

            // if ($student) {
            //     if ($student->status == 1) {
            //         if (Hash::check($request->password, $student->password)) {
            //             $this->setSession($student);
            //             return redirect()->route('home')->with('success', 'Successfully Logged In');
            //         } else
            //             return redirect()->back()->with('error', 'Username or Password is wrong!');
            //     } else
            //         return redirect()->back()->with('error', 'You are not an active user! Please contact to Authority');
            // } else
            //     return redirect()->back()->with('error', 'Username or Password is wrong!');

            // Validate the credentials
            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
                'status' => 1 // Ensure the user is active
            ];

            // Attempt to authenticate the user
            if (Auth::attempt($credentials)) {
                // Authentication passed
                $user = Auth::user();
                $this->setSession($user);
                return redirect()->route($back_route)->with('success', 'Successfully Logged In');
            } else {
                return redirect()->back()->with('error', 'Username or Password is wrong!');
            }
        } catch (Exception $e) {
            //dd($e);
            return redirect()->back()->with('error', 'Username or Password is wrong!');
        }
    }

    public function setSession($user)
    {
        return request()->session()->put(
            [
                'userId' => encryptor('encrypt', $user->id),
                'userName' => encryptor('encrypt', $user->name),
                'emailAddress' => encryptor('encrypt', $user->email),
                'studentLogin' => 1,
                'image' => $user->image ?? 'No_Profile_Image.jpg' 
            ]
        );
    }

    public function signOut()
    {
        $keys = [
            'userId',
            'userName',
            'emailAddress',
            'studentLogin',
            'image',
        ];
    
        foreach ($keys as $key) {
            request()->session()->forget($key);
        }

        return redirect()->route('user.login')->with('danger', 'Succesfully Logged Out');
    }
}
