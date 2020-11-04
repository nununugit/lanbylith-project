<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class newsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function news_list(){
        $newses = DB::table('news')->get();
        return view('news_list',['newses' => $newses]);
    }
    
    public function news_content($id){
        return view('news_content',['id'->$id]);
    }

    public function test_ip()
    {
        return request()->ip();
    }
}
