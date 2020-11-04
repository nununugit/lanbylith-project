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
    return redirect('/members/login');
});
// 認証機能のroute
Route::get('members/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('members/login', 'Auth\LoginController@login');
Route::post('members/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('members/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('members/register', 'Auth\RegisterController@register');

Route::get('members/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('members/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('members/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('members/password/reset', 'Auth\ResetPasswordController@reset');

//コントローラのroute
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/qanda', 'HomeController@qanda')->name('qanda');
Route::post('/home','HomeController@post_qanda');
//questionのやつ
Route::get('/question/{difficulty}', 'questionController@question');
Route::post('/question/{difficulty}', 'answerController@answer');
//その他のナビバーシリーズ
Route::get('/rank', 'rankController@rank');
Route::get('/roulette','rouletteController@roulette');
Route::get('/hint','hintController@hint');
Route::get('/sort','sortController@sort');

// json用のコントローラ
Route::get('/api/clearflag','jsonController@clearflag');
Route::get('/api/car','jsonController@car');
//correct answer rate　正答率
Route::get('/api/ac','jsonController@ac');
Route::get('/api/news','jsonController@news');
Route::any('/api/roulette','jsonController@roulette');
Route::post('/api/sort','sortController@request_sort');

//testようのコントローラー
Route::get('/test/sql','jsoncontroller@sql');

Route::any('/test/ip', 'newsController@test_ip');
