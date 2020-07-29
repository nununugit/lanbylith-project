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
        return view('home');
    }
    public function qanda(Request $request){
        $situmon = new situmon();
        $situmon -> situmon = $request -> situmon;
        $situmon -> answer = '未回答';
        $situmon->save();
        return redirect('/home');
    }
}
