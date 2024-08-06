<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        $user = Socialite::driver('google')->user();
        // $authUser = User::where('google_id', $user->id)->first();
        $authUser = User::where('email', $user->email)->first();

        if ($authUser) {
            if($authUser->google_id != $user->id) {
                $authUser->google_id = $user->id;
                $authUser->save();
            }
            Auth::login($authUser, true);
        } else {
            $authUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'google_id' => $user->id,
                // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'password' => Hash::make($user->id)
            ]);

            Auth::login($authUser, true);
        }

        return redirect()->route('home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Session::flush();
        return redirect('/');
    }

    protected function authenticated(Request $request, $user)
    {
        \Log::info('User logged in: ', ['user' => $user]);

        if ($user->role === 'paz') {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('home');
    }
}
