<?php

namespace App\Http\Controllers;

use App\Jobs\SendWelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MailController extends Controller
{
    public function index(Request $request)
    {
        try {
            SendWelcomeMail::dispatch('Arthur Morais');
            Log::info('Dispatched Welcome Mail');
            return 'Dispatched!';
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
