<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class tasoController extends Controller
{
    public function guzzle_taso($uid,$qid,$taso_flag){

           //guzzleの導入
           $client  =  new Client(['base_uri'=>'https://10.100.0.38:5000' ]);
           
           $client->request('POST', '/answer', [
            'form_params' => [
                'uid' => $uid,
                'qid' => $qid,
                'isCorrect' =>$taso_flag
            ]
        ]);
    }
}
