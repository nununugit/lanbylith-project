<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\situmon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class rouletteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function roulette(){
        return view('roulette');
    }
}
