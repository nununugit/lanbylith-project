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
        $uid = Auth::user()->id;
        $gid = Auth::user()->group_gid;
        $params =  DB::table('questions')->get();
        $clearflag = DB::table('ac')->join('users','users.id', '=','ac.user_id')
                    ->select('question_qid')
                    ->where('group_gid','=',Auth::user()->group_gid)->get();

        if(DB::table('ac')->join('users','users.id', '=','ac.user_id')->select('ctime')->whereRaw('group_gid = ? and question_qid = ?', [ $gid ,$qid ])->exists()){
            //無限に点数を入れられないために
            $msg = '既に解いた問題です';
            return view('question',['questions'=> $params ,'message' => $msg, 'clearflags' => $clearflag]);
        }else{
            if(DB::table('questions')->whereRaw('qid = ? and answer = ?', [$qid,$answer ])->exists()){
            //正答のinsert
                $param = [
                   'user_id' =>  $uid ,
                   'question_qid' => $qid,
                   'ctime'=>Carbon::now()
               ];
               DB::table('ac')->insert($param);
           $msg = 'correct answer';
           $clearflag = DB::table('ac')->join('users','users.id', '=','ac.user_id')
           ->select('question_qid')
           ->where('group_gid','=',Auth::user()->group_gid)->get();

           return view('question',['questions'=> $params ,'message' => $msg ,'clearflags' => $clearflag]);

           }else{

               $msg = 'incorrect answer';
               return view('question',['questions'=> $params ,'message' => $msg, 'clearflags' => $clearflag]);
           }
        }
    }
}
