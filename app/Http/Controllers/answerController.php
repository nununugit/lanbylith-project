<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class answerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function answer(Request $request,$difficulty)
    {
        $qid = $request->qid;
        $answer = $request->answer;
        $uid = Auth::user()->id;

        $params =  DB::table('questions')->join('lv','lv.lvid', '=','questions.lv_lvid')
        ->where('lv.lvname','=',$difficulty) ->oldest('qid')->get();
        
        $clearflag = DB::table('ac')->join('users','users.id', '=','ac.user_id')
                    ->select('question_qid')
                    ->get();
        $hints='';


        if($difficulty=='hard'){
            $hints = '';
            // DB::table('roulette')->join('users','users.id', '=','roulette.user_id')
            // ->join('hints','hints.id','=','roulette.number')
            // ->distinct()
            // ->orderBy('roulette.number', 'asc')
            // ->select('roulette.number' ,'hints.hint')
            // ->where('roulette.number','<',21)
            // ->where('group_gid','=',Auth::user()->group_gid)->get();
        }


        if(DB::table('ac')->join('users','users.id', '=','ac.user_id')->select('ctime')->whereRaw('question_qid = ? and user_id = ?', [ $qid ,$uid ])->exists()){
            //無限に点数を入れられないために
            $msg = '3';
            return view('question',['questions'=> $params ,'message' => $msg, 'clearflags' => $clearflag ,'difficulty' =>$difficulty,'hints'=>$hints]);

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
        //    $taso_flag='true';
           $clearflag = DB::table('ac')
           ->join('users','users.id', '=','ac.user_id')
           ->select('question_qid')
           ->get();
           }else{
               $taso_flag='false';
               $msg = '2';
           }
        // $taso_controller = app()->make('App\Http\Controllers\tasoController');
        // $user_param = $taso_controller->guzzle_taso($qid,$gid,$taso_flag);

           return view('question',['questions'=> $params ,'message' => $msg, 'clearflags' => $clearflag ,'difficulty' =>$difficulty,'hints'=>$hints]);           
        }

    }
}
