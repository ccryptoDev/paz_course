<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use SendGrid\Mail\Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    protected function sendEmail($user, $token)
    {
        $templateId = 'd-641c47c0d8444d9295cfd9f85c526aea';
        $email = new Mail();
        $email->setFrom(config('mail.from.address'), config('mail.from.name'));
        $email->addTo($user->email, $user->name);
//        $email->setTemplateId($templateId);
        $email->setSubject('Reset your password');
        $email->addContent(
            'text/html',
            view('emails.password_reset', ['user' => $user, 'token' => $token])->render()
        );
        $sendgrid = new \SendGrid(env('MAIL_PASSWORD'));
        $response = $sendgrid->send($email);
        return $response->statusCode();
    }

    public function showLinkRequestForm(Request $request) {
        return view('students.auth.passwords.email');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        $user = User::where(['email' => $request->only('email')])->first();
        if ($user) {
            $token = Password::createToken($user);
            $result = $this->sendEmail($user, $token);
            if ($result == 200 || $result == 202) {
                return view('students.auth.passwords.email_confirm');
            }
            return back()->withInput($request->only('email'))->withErrors(['email' => trans('auth.mail.failed')]);
        }

        return back()->withInput($request->only('email'))->withErrors(['email' => trans('auth.failed')]);
    }


    protected function sendResetLinkResponse(Request $request, $response)
    {
        return $request->wantsJson()
            ? new JsonResponse(['message' => trans($response)], 200)
            : view('students.auth.password.email_confirm');
    }
}
