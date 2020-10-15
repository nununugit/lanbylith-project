<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class jsonController extends Controller
{
    
    public function clearflag(){
        $clearflag = DB::table('ac')->join('users','users.id', '=','ac.user_id')
        ->select('question_qid')
        ->where('group_gid','=',Auth::user()->group_gid)->get();
        return $clearflag;
    }
    public function car(){
        $params =  DB::table('ac')
        ->select(DB::raw('count(*) as ac_count, question_qid'))
        ->groupBy('question_qid')->get();
        return $params;
    }
    public function ac(){
        $params =  DB::table('ac')->where('user_id','=',Auth::user()->id)->get();
        return $params;
    }

    public function news(){
        $news = DB::table('news')->oldest('date')->get();
        return $news;
    } 
    public function roulette(){
        $roulette = DB::table('news')->oldest('date')->get();
    }
}
