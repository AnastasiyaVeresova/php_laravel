<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userform', [\App\Http\Controllers\FormProcessor::class, 'index']);
Route::post('/store_form', [\App\Http\Controllers\FormProcessor::class, 'store']);

Route::get('/test_database', function () {
    $employees = new Employee();
    $employees->first_name = 'John';
    $employees->email = 'John@gmail.com';
    $employees->save();

    return 0;
});


