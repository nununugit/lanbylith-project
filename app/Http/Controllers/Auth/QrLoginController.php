<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QrLoginController extends Controller
{
    public function showQrReader() {

        return view('auth.qr_login');   // ログインフォームの代わり

    }

    public function login(Request $request) {

        $result = false;
        $user = \App\User::where('uuid', $request->uuid)->first();
    
        if(!is_null($user)) {
    
            \Auth::login($user);    // ユーザーをログインさせる
            $result = true;
    
        }
    
        return [
            'result' => $result,
            'user' => $user
        ];
    
    }
}
