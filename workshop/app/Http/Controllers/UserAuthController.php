<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop\Entity\User;
use Hash;
use Mail;

class UserAuthController extends Controller
{
    public function InDex()
    {
        return view('auth.index');
    }

    //登入
    public function Login()
    {
        return view('auth.losi');
    }

    public function LoginProcess()
    {
        $form_data = request()->all();
        $user = User::where('email', $form_data['email'])->FirstOrFail();
        if (Hash::check($form_data['password'], $user->password)){
            echo '登入成功';
            session()->put('user_id', $user->id);
            session()->put('user_type', $user->type);
            session()->put('user_email', $user->email);
            return redirect("/user/auth/index");
        }else{
            echo '登入失敗';
            return redirect('/user/auth/losi')
                ->withInput()
                ->withErrors(['無此帳號','帳號密碼錯誤']);
        }
    }

    public function SignOut()
    {
        session()->flush('user_id');
        return redirect('/user/auth/index');
    }


    //註冊
    public function signUpPage()
    {
        return view( 'auth.LoSi');
    }
    public function signUpProcess()
    {
        
        $form_data = request()->all();
        //dd($form_data);
        if ( $form_data['password'] == "" || $form_data['email'] == "" || $form_data['nickname'] == "" ) {
            return redirect('/user/auth/losi')
            ->withInput()
            ->withErrors(['資料不齊全','請檢查所有欄位都填滿']);
        }else{
            $user = User::where('email', $form_data['email'])->first();
            if (!is_null($user)) {
                return redirect('/user/auth/losi')
                ->withInput()
                ->withErrors(['此帳號已被註冊','請更換帳號']);
            }

            $user = User::create([
                'email' => $form_data['email'],
                'password' => Hash::make($form_data['password']),
                'type' => $form_data['type'],
                'nickname' => $form_data['nickname'],
            ]);


            Mail::send('email.signUpEmailNotification', [
                'nickname' => $form_data['nickname']
            ], function($message) use ($form_data) {
                $message->to($form_data['email'], $form_data['nickname'])
                    ->from('hwc273228@gmail.com')
                    ->subject('Laravel 8 Mail Test');
            });
            return redirect('/user/auth/losi');
        }
    }

}
