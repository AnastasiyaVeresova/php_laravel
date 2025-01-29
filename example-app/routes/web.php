<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [\App\Http\Controllers\SimpleController::class, 'test']);
Route::get('/books', [\App\Http\Controllers\EntityController::class, 'index'])->name('books');
Route::post('/books', [\App\Http\Controllers\EntityController::class, 'store'])->name('save_book');
Route::get('remove_book/{id}', [\App\Http\Controllers\EntityController::class, 'delete'])->
where(['id'=>'[A-Za-z0-9]+'])->name('remove_book');

// Route::get('/user', [\App\Http\Controllers\UserController::class, 'index']);

// Route::post('/user', [\App\Http\Controllers\UserController::class, 'store'])->name('store-user');

Route::get('/upload', [\App\Http\Controllers\FileUploadController::class, 'index']);
Route::post('/upload', [\App\Http\Controllers\FileUploadController::class, 'upload'])->name('upload_file');

Route::get('/library_user/{id}', [\App\Http\Controllers\LibraryUserController::class, 'show'])->where(['id' => '[0-1]+']);

Route::get('/my_user', [\App\Http\Controllers\MyUserController::class, 'showUser']);

Route::get('/redirect_test', \App\Http\Controllers\TestRedirectController::class);

Route::get('/send_file', \App\Http\Controllers\SendFileController::class);

Route::get('/main', function () {
    return view('mainpage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/uppercase', function () {
    return view('testdir');
});
