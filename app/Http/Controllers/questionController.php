<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class questionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function question_easy()
    {
        $msg = '';
        $params =  DB::table('questions')->where('lv_lvid','=',1) ->oldest('qid')->get();
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
    public function question_normal()
    {
        $msg = '';
        $params =  DB::table('questions') ->where('lv_lvid','=',2) ->oldest('qid')->get();
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
    public function question_hard()
    {
        $msg = '';
        $params =  DB::table('questions') ->where('lv_lvid','=',3) ->oldest('qid')->get();
        $clearflagcnt = DB::table('ac')->join('users','users.id', '=','ac.user_id')
                    ->select('question_qid')
                    ->where('group_gid','=',Auth::user()->group_gid)->count();

        $hints = DB::table('roulette')->join('users','users.id', '=','roulette.user_id')
                    ->join('hints','hints.id','=','roulette.number')
                    ->distinct()
                    ->orderBy('roulette.number', 'asc')
                    ->select('roulette.number' ,'hints.hint')
                    ->where('roulette.number','<',21)
                    ->where('group_gid','=',Auth::user()->group_gid)->get();

        if($clearflagcnt < 1){
            $clearflag = '';
        }else{
        $clearflag = DB::table('ac')->join('users','users.id', '=','ac.user_id')
        ->select('question_qid')
        ->where('group_gid','=',Auth::user()->group_gid)
        ->get();

        return view('question_hint',['questions'=> $params ,'message' => $msg , 'clearflags' => $clearflag, 'hints'=>$hints]);

        }



        return view('question',['questions'=> $params ,'message' => $msg , 'clearflags' => $clearflag]);
    }
   
}
