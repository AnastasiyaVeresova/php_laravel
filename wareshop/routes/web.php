<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;


Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

use App\Models\User;
use Illuminate\Support\Facades\Hash;

Route::get('/create-admin', function () {
    $user = User::create([
        'role_id' => 1,
        'name' => 'Admin',
        'email' => 'my@email.ru',
        'password' => Hash::make('your_password'),
    ]);

    // Если вы используете роли, раскомментируйте следующую строку
    // $user->assignRole('admin');

    return 'Admin created!';
});

use App\Http\Controllers\RegisterController;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
