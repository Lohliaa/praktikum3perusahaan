<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function(){
    return '<a href="https://www.educastudio.com">Halaman Home</a>';
});

Route::prefix('category')->group(function(){
    Route::get('/product1', [ProductController::class, 'product1']);
    Route::get('/product2', [ProductController::class, 'product2']);
    Route::get('/product3', [ProductController::class, 'product3']);
    Route::get('/product4', [ProductController::class, 'product4']);
});

Route::get('/news/{id}', [NewsController::class, 'news']);

Route::get('news', function(){
    return redirect('https://www.educastudio.com/news');
});

Route::get('/news/{title}', function($title){
    return redirect('https://www.educastudio.com/news/' .$title);
});

Route::prefix('program')->group(function(){
    Route::get('/program1', [ProgramController::class, 'program1']);
    Route::get('/program2', [ProgramController::class, 'program2']);
    Route::get('/program3', [ProgramController::class, 'program3']);
});

Route::get('/about-us', function(){
    echo '<a href="https://www.educastudio.com/about-us">About Us</a>';
});

Route::resource('contactus', ContactController::class);
