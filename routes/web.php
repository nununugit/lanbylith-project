<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/register');
});
// 認証機能のroute
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');

//コントローラのroute
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/qanda', 'HomeController@qanda')->name('qanda');
Route::post('/home','HomeController@post_qanda');

//questionのやつ
Route::get('/question/{random-url}/{difficulty}', 'questionController@question');

Route::post('/question/{difficulty}', 'answerController@answer');




//その他のナビバーシリーズ
Route::get('/rank', 'rankController@rank');
Route::get('/roulette','rouletteController@roulette');
Route::get('/hint','hintController@hint');
Route::get('/sort','sortController@sort');

//api系統のコントローラー
Route::get('/api/clearflag','jsonController@clearflag');    //json用のコントローラ
Route::get('/api/car','jsonController@car');    //correct answer rate　正答率
Route::get('/api/ac','jsonController@ac');
Route::get('/api/news','jsonController@news');
Route::any('/api/roulette','jsonController@roulette');
Route::post('/api/sort','sortController@request_sort');

//コントローラーtest
Route::get('/test/sql','jsoncontroller@sql');
Route::any('/test/ip', 'newsController@test_ip');


Route::get('auth/qr_login', 'Auth\QrLoginController@showQrReader')->name('qr_login');// ログインフォーム
Route::post('auth/qr_login', 'Auth\QrLoginController@login');// Ajax通信