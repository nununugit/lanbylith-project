<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class rankController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function rank(){
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

    return view('rank',['params' => $ranking]);
    }
}
