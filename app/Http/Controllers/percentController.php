<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class percentController extends Controller
{
    public function percent(){
    return view('myapps/percent');
    }
    public function navs(){
    return view('navs/navbar_tate');
    }
}
