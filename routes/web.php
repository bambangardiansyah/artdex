<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// Auth::routes();


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['web'])->group(function () {
    // Rute-rute yang memerlukan pengguna untuk login
    Route::get('/', function () {
        return view('index');
    });

    Route::get('sblog', function() {
        return view('single-blog');
    });

    Route::get('home', function(){
        return view('homepict');
    });
    Route::get('grid', function(){
        return view('grid');
    });

  
    Route::get('co', function(){
        return view('co');
    });
    Route::get('profile', function(){
        return view('profile');
    });
    Route::get('nyoba', function(){
        return view('nyoba');
    });
    Route::get('spost', function(){
        return view('spost');
    });

    Route::get('add', function(){
        return view('add');
    });
  
    
    // Tambahkan rute lainnya yang memerlukan login
});


  Route::get('profile', function(){
        return view('profile');
    });

Route::get('guest', function () {
    return view('guest');
});

Route::get('register', function(){
    return view('register');
});
Route::get('login', function(){
    return view('login');
});
Route::get('exguest', function(){
    return view('exguest');
});
Route::get('guesspost', function(){
    return view('guesspost');
});
Route::post('logout', [AuthController::class, 'logout']);

// Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('edit', function(){
        return view('edit');
    });
    // ... rute lainnya yang memerlukan otentikasi ...
});

Route::get('admin', function(){
    return view('admin/index');
});
Route::get('user', function(){
    return view('admin/user');
});
Route::get('comment', function(){
    return view('admin/comment');
});
Route::get('post', function(){
    return view('admin/post');
});
Route::get('message', function(){
    return view('admin/message');
});