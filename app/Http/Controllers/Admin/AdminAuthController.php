<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Password;

class AdminAuthController extends Controller
{
    public function login(): View
    {
        return view('Admin.auth.login');
    }


    public function forgetPassword() : View
    {
        return view('Admin.auth.forgot-password');
    }

    public function forgetRequest(Request $request)
    {

        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);

    }


}
