<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\situmon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $grouprank = '';
        $hint = '';
        // $answers = Auth::user()->id;
        $answers = DB::table('ac')
        ->join('users','users.id', '=','ac.user_id')
        ->join('questions','ac.question_qid', '=','questions.qid')
        ->select('questions.title','questions.answer')
        ->where('user_id','=',Auth::user()->id)
        ->get();

        $ranking = 
        DB::table('uscore')
        ->select('users.name', 'uscore.uscore')
        ->join('users', 'users.id','=','uscore.user_id')
        ->whereIn(DB::raw('(uscore.user_id, uscore.uscore)'),
        function ($query)
        {
            $query->select('user_id', DB::raw('max(uscore)'))
                  ->from('uscore')
                  ->groupBy('user_id');
        })
        ->orderBy('uscore.uscore','desc')->get();

        $ac_qid =
        DB::table('ac')
            ->select('question_qid')
            ->where('user_id','=',Auth::user()->id)
            ->pluck('question_qid');

        $hint =
        DB::table('hints')
        ->select('hint')
        ->whereNotIn('id' , $ac_qid)
        ->first();

        //を除く処理の追加
        // dd($hint);
        return view('home',['hint' => $hint ,'answers' => $answers,'ranking'=>$ranking,'hints'=>$hint]);
    }
    public function qanda(){
        $params = situmon::all();
        return view('qanda',['params' => $params]);
    }

    public function post_qanda(Request $request){
        if(($request->situmon)==null){
        return redirect('/home');
        }else{
        $situmon = new situmon();
        $situmon -> user_id = Auth::user()->id;
        $situmon -> situmon = $request -> situmon;
        $situmon -> answer = '未回答';
        $situmon->save();
        return redirect('/home');
        }
    }



}
