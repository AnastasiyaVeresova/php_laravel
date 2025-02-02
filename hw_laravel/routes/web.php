<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\BookController;


// Первый роут для корневой страницы проекта
Route::get('/', function () {
    return view('home', [
        'name' => 'Vasiliy Brown',
        'age' => 17,
        'position' => 'Software Engineer',
        'address' => '21 St. Lenina, St.Petersburg'
    ]);
});

// Второй роут для страницы с контактами
Route::get('/contacts', function () {
    return view('contacts', [
        'address' => '21 St. Lenina, St.Petersburg',
        'post_code' => '12345',
        'email' => 'Brown@example.com',
        'phone' => '+1234567890'
    ]);
});

Route::get('/get-employee-data', [\App\Http\Controllers\EmployeeController::class, 'index']);
Route::post('/store-form', [\App\Http\Controllers\EmployeeController::class, 'store']);
Route::put('/user/{id}', [\App\Http\Controllers\EmployeeController::class, 'update']);


Route::get('/index', [BookController::class, 'index'])->name('index_book');
Route::post('/store', [BookController::class, 'store'])->name('index_store');
