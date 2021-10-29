<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\roulette;

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
        $params =  DB::table('ac')->whereRaw('user_id = ? AND rouletted =?',[Auth::user()->id,0])->get();
        return $params;
    }

    public function news(){
        $news = DB::table('news')->oldest('date')->get();
        return $news;
    } 

    public function roulette(request $request){
        $uid = Auth::user()->id;
        $r_flag =DB::table('ac')->whereRaw('user_id = ? AND question_qid =?',[$uid,4])->exists();
        if($r_flag == false){
            $param = [
                'user_id' =>  $uid ,
                'question_qid'=>4
            ];
            DB::table('ac')->insert($param);
        }else{
            return $params;
        }
    }

    public function slide_puzzle(request $request){
        $uid = Auth::user()->id;
        $sp_flag =DB::table('ac')->whereRaw('user_id = ? AND question_qid =?',[$uid,3])->exists();
        if(sp_flag == false){
            $param = [
                'user_id' =>  $uid ,
                'question_qid'=>3
            ];
            DB::table('ac')->insert($param);
        }else{
            return $params;
        }
    }


    public function sql(request $request){
        $uid = Auth::user()->id;
        if(DB::table('ac')->whereRaw('user_id = ? AND rouletted =?',[$uid,0])->exists()){
        DB::table('ac')
        ->whereRaw('user_id = ? AND rouletted =?',[$uid,0])
        ->limit(1)
        ->update(['rouletted' => 1]);
        }else{
            return 0;
        }
    }
}
