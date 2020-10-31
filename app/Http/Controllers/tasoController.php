<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class tasoController extends Controller
{
    
    public function guzzle_taso($uid,$qid,$taso_flag){
        $client  =  new Client([
        'base_uri'=>'http://10.100.0.38:5000',
        'verify' => false ]);
        $client->request('POST', '/answer', [
            'json' => [
                'uid' => $uid,
                'qid' => $qid,
                'isCorrect' =>$taso_flag
            ]
        ]);
    }
}
