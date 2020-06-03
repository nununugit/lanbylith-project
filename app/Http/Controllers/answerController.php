<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class answerController extends Controller
{
     public function answer(Request $request)
    {
        $qid = $request->qid;
        $answer = $request->answer;

        $params =  DB::table('questions')->get();

        if(DB::table('questions')->whereRaw('qid = ? and answer = ?', [$qid,$answer ])->exists()){
            $param = [
                'user_id' =>  Auth::user()->id ,
                'question_qid' => $qid,
                'ctime'=>Carbon::now()
            ];
            DB::table('ac')->insert($param);
        $msg = 'correct answer';
        return view('question',['questions'=> $params ,'message' => $msg]);

        }else{
        $msg = 'incorrect answer';
        return view('question',['questions'=> $params ,'message' => $msg]);
        }
    }
}
