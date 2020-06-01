<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class questionController extends Controller
{
    public function question()
    {
        $params =  DB::table('questions')->get();
        return view('question',['questions'=> $params]);
    }
}
