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
        // dd($conn);
        // echo env('QUEUE_CONNECTION');

        $db = new \PDO("sqlsrv:Server=54.233.240.192,1433", "admin", "k4hvdq9tj9");
        dd($db);
    }
}
