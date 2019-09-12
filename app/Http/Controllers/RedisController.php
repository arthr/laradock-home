<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function index(Request $request)
    {
        // Redis::set('name','ASD');
        // $user = Redis::get('name');

        // $conn = Redis::connection();
        // dd($user, $conn);
        echo env('QUEUE_CONNECTION');
    }
}
