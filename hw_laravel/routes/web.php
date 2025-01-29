<?php

use Illuminate\Support\Facades\Route;

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
