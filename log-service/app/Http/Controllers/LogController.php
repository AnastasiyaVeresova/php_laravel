<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    public function create()
    {
        $log = new Log();
        $log->time = now();
        $log->duration = 123; // Пример значения
        $log->ip = '127.0.0.1';
        $log->url = 'http://example.com';
        $log->method = 'GET';
        $log->input = 'example input';
        $log->save();

        return response()->json(['message' => 'Log created successfully']);
    }
}
