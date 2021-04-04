<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Mail\Mymail;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Mail;

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
Route::get('blog/create', function(){
     return view('form');
});
Route::post('blog/create', [BlogController::class, 'store'])->name('add-post');
Route::get('blog/index', [BlogController::class, 'index']);
Route::get('mail/send',[DemoController::class,'send']);
