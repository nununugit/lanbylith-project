<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class rankController extends Controller
{
    public function rank(){
    $grouprank =
    DB::table('gscore')
    ->select('gscore.group_gid','groups.gname', 'gscore.gscore')
    ->join('groups', 'gscore.group_gid','=','groups.gid')
    ->whereIn(DB::raw('(groups.gid, gscore.gscore)'),
    function ($query)
    {
        $query->select('group_gid', DB::raw('max(gscore)'))
              ->from('gscore')
              ->groupBy('group_gid');
    })->
    orderBy('gscore.gscore','desc')->get();
    return view('rank',['granks' => $grouprank]);
    }
}
