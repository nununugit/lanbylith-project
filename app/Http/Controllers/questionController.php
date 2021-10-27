<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class questionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function question($random_url , $difficulty)
    {
        //今追加したよ
        // return Auth::user()->name;

        $msg = '';
        $clearflagcnt = '';

        $questions =  
        DB::table('questions')
        ->join('lv','lv.lvid', '=','questions.lv_lvid')
        ->where('lv.lvname','=',$difficulty)
        ->where('questions.url','=',$random_url) 
        ->oldest('qid')
        ->get();

        if($questions==null){
        return redirect('/home');
        }

        if($clearflagcnt < 1){
            $clearflag = '';
        }else{
        $clearflag = DB::table('ac')->join('users','users.id', '=','ac.user_id')
        ->select('question_qid')
        ->where('user_id','=',Auth::user()->user_id)
        ->get();
        }

        return view('question',[
            'questions'=> $questions , 
            'message' => $msg ,
            'difficulty'=>$difficulty,
            'random_url'=>$random_url
        ]);
    }    
}