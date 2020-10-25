<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class hintController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function hint()
    {   
        $hints = DB::table('roulette')->join('users','users.id', '=','roulette.user_id')
                                      ->join('hints','hints.id','=','roulette.number')
                                      ->distinct()
                                      ->orderBy('roulette.number', 'asc')
                                      ->select('roulette.number' ,'hints.hint')
                                      ->where('roulette.number','<',21)
                                      ->where('group_gid','=',Auth::user()->group_gid)->get();
        return view('hints',['hints'=>$hints]);
    }
}
