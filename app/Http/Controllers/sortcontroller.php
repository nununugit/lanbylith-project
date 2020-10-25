<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class sortcontroller extends Controller
{
    public function sort(){
        $msg ='';
        return view('sort',['msg'=>$msg]);
    }
    public function request_sort(){
        $group_points =DB::table('gscore')
        ->select('gscore.group_gid','gscore.gscore')
        ->join('groups', 'gscore.group_gid','=','groups.gid')
        ->where('group_gid','=',Auth::user()->group_gid)
        ->whereIn(DB::raw('(groups.gid, gscore.gscore)'),
        function ($query)
        {
            $query->select('group_gid', DB::raw('max(gscore)'))
                ->from('gscore')
                ->groupBy('group_gid');
        })
        ->orderBy('gscore.gscore','desc')->first();
        
        $sorted_count = DB::table('sort')
        ->select('done')
        ->where('group_gid','=',Auth::user()->group_gid)
        ->count();

        if(([$group_points->gscore])>([$sorted_count])){
            $msg ='間も無くボールが出てきます。少々お待ちください';
            $param = [
                'group_gid' => $group_points ->group_gid,
                'sort_time' => Carbon::now(),
                'done' =>0
            ];
            DB::table('sort')->insert($param);
        return view('sort',['msg'=>$msg]);

        }else{
            $msg='点数が足りません。';
        return view('sort',['msg'=>$msg]);

        }

    }

}
