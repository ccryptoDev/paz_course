<?php

namespace App\Http\Controllers\Backend\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Http\Requests\Authentication\SignUpRequest;
use App\Http\Requests\Authentication\SignInRequest;
use Illuminate\Support\Facades\Hash;
use Exception;

class AuthenticationController extends Controller
{
    public function signUpForm()
    {
        return view('backend.Authentication.register');
    }

    public function signUpStore(SignUpRequest $request)
    {
        try {
            $user = new User;
            $user->name = $request->name;
            $user->phone = $request->contactNumber;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role_id = 3; // instructor role_id
            // dd($request->all()); 
            if ($user->save())
                return redirect()->route('admin.login')->with('success', 'Successfully Registered');
            else
                return redirect()->route('admin.login')->with('danger', 'Please Try Again');
        } catch (Exception $e) {
            dd($e);
            return redirect()->route('admin.login')->with('danger', 'Please Try Again');
        }
    }

    public function signInForm()
    {
        return view('backend.Authentication.login');
    }

    public function signInCheck(SignInRequest $request)
    {
        try {
            $user = User::where('phone', $request->username)
                        ->orWhere('email', $request->username)
                        ->first();
            
            if (!$user) {
                return redirect()->route('admin/login')->with('error', 'Username or Password is wrong!');
            }
            
            if ($user->status != 1 || $user->role_id != 1) {
                return redirect()->route('admin.login')->with('error', 'You are not an active admin!');
            }
    
            if (!Hash::check($request->password, $user->password)) {
                return redirect()->route('admin.login')->with('error', 'Username or Password is wrong!');
            }
    
            $this->setSession($user);
            return redirect()->route('dashboard')->with('success', 'Successfully Logged In');
        } catch (Exception $e) {
            // dd($e);
            return redirect()->route('admin.login')->with('error', 'An unexpected error occurred. Please try again.');
        }
    }

    public function setSession($user)
    {
        return request()->session()->put(
            [
                'admin_userId' => encryptor('encrypt', $user->id),
                'admin_userName' => encryptor('encrypt', $user->name),
                'admin_emailAddress' => encryptor('encrypt', $user->email),
                'role_id' => encryptor('encrypt', $user->role_id),
                'accessType' => encryptor('encrypt', $user->full_access),
                'role' => encryptor('encrypt', $user->role->name),
                'roleIdentitiy' => encryptor('encrypt', $user->role->identity),
                'profile_image' => $user->image ?? 'No Image Found',
                'instructorImage' => $user?->instructor->image ?? 'No instructorImage Found',
            ]
        );
    }

    public function signOut()
    {
        $keys = [
            'admin_userId',
            'admin_userName',
            'admin_emailAddress',
            'role_id',
            'accessType',
            'role',
            'roleIdentitiy',
            'profile_image',
            'instructorImage',
        ];
        
        foreach ($keys as $key) {
            request()->session()->forget($key);
        }

        return redirect('admin/login')->with('danger', 'Succesfully Logged Out');
    }

    public function show(User $data)
    {
        return view('backend.user.userProfile', compact('data'));
    }
}
