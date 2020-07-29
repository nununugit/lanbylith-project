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
    return view('welcome');
});
// Authの設定
Route::get('members/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('members/login', 'Auth\LoginController@login');
Route::post('members/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('members/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('members/register', 'Auth\RegisterController@register');

Route::get('members/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('members/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('members/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('members/password/reset', 'Auth\ResetPasswordController@reset');


//自分のコントローラ
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home','HomeController@qanda');
Route::get('/question', 'questionController@question');
Route::post('/question', 'answerController@answer');
Route::get('/rank', 'rankController@rank');
// テスト用のコントローラ
Route::get('/percent','percentController@percent');
Route::get('/nav','percentController@navs');
Route::get('/api/clearflag','clearflagController@json');
Route::get('/api/car','questionController@json2');
//correct answer rate　正答率

Route::get('/question2', 'questionController@question2');
