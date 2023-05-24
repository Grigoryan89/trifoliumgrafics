<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

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
Route::get('admin/index', [AdminController::class,'index'])->middleware('admin');

Route::middleware('admin:auth')->namespace('admin.printing')->prefix('admin/printings')->group(function (){
   Route::get('/printing',[\App\Http\Controllers\PrintingController::class,'index'])->name('admin.printings.printing');
});


Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/service', function () {
    return view('service');
});

//Auth::routes(['login' => false]);

Route::get('admin/trifoliums', [LoginController::class,'showLoginForm']);
Route::post('admin/index', [LoginController::class,'login'])->name('login');

Auth::routes();
