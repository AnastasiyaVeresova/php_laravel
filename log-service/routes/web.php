<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\LogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logs', function () {
    $logs = DB::table('logs')->get();
    return view('logs', ['logs' => $logs]);
});

Route::get('/create-log', [LogController::class, 'create']);
