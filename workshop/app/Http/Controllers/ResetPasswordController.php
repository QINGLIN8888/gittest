<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    public function showResetForm()
    {
        return view('auth.forgot_password');
    }

    public function reset(Request $request)
    {
       
    }
}