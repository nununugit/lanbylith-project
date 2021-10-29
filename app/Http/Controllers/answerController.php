<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class answerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function answer(Request $request, $random_url, $difficulty,)
    {
        $qid = $request->qid;
        $answer = $request->answer;

        $uid = Auth::user()->id;
        $msg = '';

        $questions =  
        DB::table('questions')
        ->join('lv','lv.lvid', '=','questions.lv_lvid')
        ->where('lv.lvname','=',$difficulty)
        ->where('questions.url','=',$random_url) 
        ->oldest('qid')
        ->get();
        
        $clearflag = DB::table('ac')
        ->join('users','users.id', '=','ac.user_id')
        ->select('question_qid')
        ->get();
        
        if(DB::table('ac')->join('users','users.id', '=','ac.user_id')->select('ctime')->whereRaw('question_qid = ? and user_id = ?', [ $qid ,$uid ])->exists()){
            //無限に点数を入れられないためのクエリ
            $msg = '3';
        }else{
            if(DB::table('questions')->whereRaw('qid = ? and answer = ?', [$qid,$answer])->exists()){
                //正答のinsert
                $param = [
                   'user_id' =>  $uid ,
                   'question_qid' => $qid,
                   'ctime'=>Carbon::now()
                ];

                DB::table('ac')->insert($param);

                $msg = '1';
           
                $clearflag = DB::table('ac')
                ->join('users','users.id', '=','ac.user_id')
                ->select('question_qid')
                ->get();     
            }else{
                $msg = '2';
            }

        }
        
        return view('question',[
            'questions'=> $questions, 
            'message' => $msg,
            'difficulty'=>$difficulty,
            'random_url'=>$random_url
        ]);

    }
}
