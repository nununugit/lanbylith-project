<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class questionController extends Controller
{
    public function question()
    {
        $msg = '';
        $params =  DB::table('questions') ->oldest('lv_lvid')->get();
        $clearflagcnt = DB::table('ac')->join('users','users.id', '=','ac.user_id')
                    ->select('question_qid')
                    ->where('group_gid','=',Auth::user()->group_gid)->count();

        if($clearflagcnt < 1){
            $clearflag = '';
        }else{
        $clearflag = DB::table('ac')->join('users','users.id', '=','ac.user_id')
        ->select('question_qid')
        ->where('group_gid','=',Auth::user()->group_gid)
        ->get();
        }

        return view('question',['questions'=> $params ,'message' => $msg , 'clearflags' => $clearflag]);
    }
    public function json(){
        $params =  DB::table('ac')
        ->select(DB::raw('count(*) as ac_count, question_qid'))
        ->groupBy('question_qid')->toJson();
        return $params;
    }
    public function json2(){

        $params =  DB::table('ac')
        ->select(DB::raw('count(*) as ac_count, question_qid'))
        ->groupBy('question_qid')->get();
        return $params;

    }
    //テストよう
    public function question2()
    {

        $msg = '';
        $params =  DB::table('questions') ->oldest('lv_lvid')->get();
        $clearflagcnt = DB::table('ac')->join('users','users.id', '=','ac.user_id')
                    ->select('question_qid')
                    ->where('group_gid','=',Auth::user()->group_gid)->count();

        if($clearflagcnt < 1){
            $clearflag = '';
        }else{
        $clearflag = DB::table('ac')->join('users','users.id', '=','ac.user_id')
        ->select('question_qid')
        ->where('group_gid','=',Auth::user()->group_gid)
        ->get();
        }

        return view('question_sample2',['questions'=> $params ,'message' => $msg , 'clearflags' => $clearflag]);
    }
}
