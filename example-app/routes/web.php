<?php

use App\Http\Controllers\TestFormController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Facade;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\TestSecurityController;
use App\Http\Controllers\TestValidationController;
use App\Http\Controllers\FormBuilderTestController;


Route::get('/', function () {
    return view('welcome');
});


// Route::get('/test', [\App\Http\Controllers\SimpleController::class, 'test']);
// Route::get('/books', [\App\Http\Controllers\EntityController::class, 'index'])->name('books');
// Route::post('/books', [\App\Http\Controllers\EntityController::class, 'store'])->name('save_book');
// Route::get('remove_book/{id}', [\App\Http\Controllers\EntityController::class, 'delete'])->where(['id' => '[A-Za-z0-9]+'])->name('remove_book');

// // Route::get('/user', [\App\Http\Controllers\UserController::class, 'index']);

// // Route::post('/user', [\App\Http\Controllers\UserController::class, 'store'])->name('store-user');

// Route::get('/upload', [\App\Http\Controllers\FileUploadController::class, 'index']);
// Route::post('/upload', [\App\Http\Controllers\FileUploadController::class, 'upload'])->name('upload_file');

// Route::get('/library_user/{id}', [\App\Http\Controllers\LibraryUserController::class, 'show'])->where(['id' => '[0-1]+']);

// Route::get('/my_user', [\App\Http\Controllers\MyUserController::class, 'showUser']);

// Route::get('/redirect_test', \App\Http\Controllers\TestRedirectController::class);

// Route::get('/send_file', \App\Http\Controllers\SendFileController::class);

// Route::get('/main', function () {
//     return view('mainpage');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/uppercase', function () {
//     return view('testdir');
// });

// Route::get('/test_parametres', [\App\Http\Controllers\RequestTestController::class, 'testRequest']);

// Route::get('/test_header', [\App\Http\Controllers\TestHeaderCotroller::class, 'getHeader']);

// Route::get('/test_cookie', [\App\Http\Controllers\TestCookieController::class, 'TestCookie']);

// Route::get('/upload_file', [\App\Http\Controllers\FileUploadController2::class, 'showForm'])->name('showForm');

// Route::post('/upload_file', [\App\Http\Controllers\FileUploadController2::class, 'fileUpload'])->name('uploadFile');

// Route::post('/json_parse', [\App\Http\Controllers\JsonParseController::class, 'parseJson']);

// Route::get('/json_parse', [\App\Http\Controllers\JsonParseController::class, 'parseJson']);

// Route::get('/form', [TestFormController::class, 'displayForm'])->name('show_form');

// Route::post('/form', [TestFormController::class, 'postForm'])->name('post_form');

// Route::post('/employees', [EmployeesController::class, 'store'])->name('store_employees');
// Route::get('/employees/{id?}', [EmployeesController::class, 'show'])->name('show_employees');

// Route::post('/security_test', [TestSecurityController::class, 'post'])->name('post_security_form');
// Route::get('/security_test', [TestSecurityController::class, 'show'])->name('show_security_form');


Route::get('/test_validation', [TestValidationController::class, 'show'])->name('show_validation_form');
Route::post('/test_validation', [TestValidationController::class, 'post'])->name('post_validation_form');

Route::get('/test_builder', [FormBuilderTestController::class, 'show'])->name('show_builder_test');
Route::post('/test_builder', [FormBuilderTestController::class, 'post'])->name('post_builder_test');

