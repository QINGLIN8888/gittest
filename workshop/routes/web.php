<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthUserAdminMiddleware;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;



Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {


        Route::get('signout', 'App\Http\Controllers\UserAuthController@SignOut')->name('user.auth.signout');
        
        //重設密碼
        Route::get('password/reset', 'App\Http\Controllers\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'App\Http\Controllers\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'App\Http\Controllers\ForgotPasswordController@ForgotPassword')->name('password.reset');
        Route::post('password/reset', 'App\Http\Controllers\ForgotPasswordController@ForgotPasswordProcess');


        Route::get('index', 'App\Http\Controllers\UserAuthController@InDex')->name('user.auth.index');

        //第七章
        //註冊登入頁面
        Route::get('losi', 'App\Http\Controllers\UserAuthController@signUpPage')->name('user.auth.losi'); 
        
        //負責接收form的資料
        Route::post('login', 'App\Http\Controllers\UserAuthController@LoginProcess');
        Route::post('signup', 'App\Http\Controllers\UserAuthController@signUpProcess'); 
    });
});

Route::group(['prefix' => 'merchandise'], function () {

        //第九章商品管理
        Route::get('create', 'App\Http\Controllers\MerchandiseController@MerchandiseCreate')->middleware(AuthUserAdminMiddleware::class);
        Route::get('manage', 'App\Http\Controllers\MerchandiseController@merchandiseManageListPage')->name('merchandise.manage');

        Route::group(['prefix' => '{merchandise_id}'], function () {
            Route::get('edier', 'App\Http\Controllers\MerchandiseController@MerchandiseEdier')->name('merchandise.edier');
            Route::put('/', 'App\Http\Controllers\MerchandiseController@MerchandiseEdierProcess');
            Route::get('delete', 'App\Http\Controllers\MerchandiseController@MerchandiseDelete')->middleware(AuthUserAdminMiddleware::class);
        });
});



