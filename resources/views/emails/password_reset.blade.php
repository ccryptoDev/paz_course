<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reset Password</title>
</head>
<body>
<h1>Reset Password</h1>
<p>Hello {{ $user->name }},</p>
<p>You are receiving this email because we received a password reset request for your account.</p>
<p>Click the button below to reset your password:</p>
<p><a href="{{ url('password/reset', $token) . "?email=" . $user->email}}">Reset Password</a></p>
<p>If you did not request a password reset, no further action is required.</p>
</body>
</html>
