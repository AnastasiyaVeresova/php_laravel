<?php

use App\Http\Controllers\TestFormController;
use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Response;

use Illuminate\Support\Facades\Facade;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\TestSecurityController;
use App\Http\Controllers\TestValidationController;
use App\Http\Controllers\FormBuilderTestController;

use App\Http\Controllers\NewsController;




Route::get('/', function () {
    return view('welcome');
})->name('home');


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

Route::get('/test_url', function () {
    // $response = new Response('Test content', 200);
    // return $response;
    // return response('New test URL', 200)
    // ->header('X-HEADER-1', 'Test')
    // ->header('Content-Type', 'application/json');
    // return redirect()->route('home');
    return redirect(null, 301)->away('https://google.com');
});

Route::get('/test_cookie', function () {
    return response('My first cookie')->cookie('my_test_cookie', 'test_content', 5)
        ->withHeaders([
            'X-HEADER-T1' => 'It works!',
            'X-HEADER-T2' => 'It works!',
            'X-HEADER-T3' => 'It works!'
        ])
        ->withoutCookie('my_test_cookie2');

});

Route::get('/counter', function () {
    $counterValue = session('counter', 0);
    $counterValue++;
    session(['counter' => $counterValue,]);
    return 'ok';
});
Route::get('/result_counter', function () {
    //return session('counter', 0);
    //var_dump(session()->all());
    if(session()->has('counter')){
    }
    var_dump(session()->all());
});


Route::get('/list_of_books', function () {
    $listOfBooks = session()->get('list_of_books', '');

    return response()->json([
        'status' => 'received',
        'list_of_books' => $listOfBooks ? unserialize($listOfBooks) : 'The list is empty'
    ]);
});

Route::post('/list_of_books', function (Illuminate\Http\Request $request) {
    $listOfBooks = session()->get('list_of_books', '');

    $listOfBooks = $listOfBooks ? unserialize($listOfBooks) : [];
    $listOfBooks[] = [
        'author' => $request->get('author'),
        'title' => $request->get('title')
    ];

    session()->put('list_of_books', serialize($listOfBooks));

    return response()->json([
        'status' => 'saved',
        'list_of_books' => $listOfBooks
    ]);
});
Route::delete('/list_of_books', function ($id) {
    $listOfBooks = session()->get('list_of_books', '');

    $listOfBooks = $listOfBooks ? unserialize($listOfBooks) : [];
 if(array_key_exists($id, $listOfBooks)) {
        unset($listOfBooks[$id]);
 }

    session()->put('list_of_books', serialize($listOfBooks));

    return response()->json([
        'del' => 'deleted',
        'list_of_books' => $listOfBooks
    ]);
});

Route::get('/file_download', function () {
    return response()->download(base_path() . '/test.txt', 'my_test');
});
Route::get('/file_show', function () {
    return response()->file(base_path() . '/test.txt');
});
Route::get('/file_show_stream', function () {
    return response()->streamDownload(function(){
           echo file_get_contents('https://google.com');
    }, 'google.html');
});

Route::get('/check_di', [\App\Http\Controllers\TestDiController::class, 'showUrl']);

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/{id}/hide', [NewsController::class, 'hide'])->name('news.hide');
