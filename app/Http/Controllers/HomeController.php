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
        // DB::table('gscore')
        // ->select('groups.gname', 'gscore.gscore')
        // ->join('groups', 'gscore.group_gid','=','groups.gid')
        // ->whereIn(DB::raw('(groups.gid, gscore.gscore)'),
        // function ($query)
        // {
        //     $query->select('group_gid', DB::raw('max(gscore)'))
        //           ->from('gscore')
        //           ->groupBy('group_gid');
        // })
        // ->orderBy('gscore.gscore','desc')->get();
        $hint = '';
        $answer = '';
        return view('home',['hint' => $hint ,'answer' => $answer]);
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
