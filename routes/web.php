<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\Printing\PrintingController;
use App\Http\Controllers\HomeController;
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

Route::middleware('admin:auth')->prefix('admin/printings')->group(function (){
   Route::resource('printing',PrintingController::class);
});


Route::get('/' , [HomeController::class,'index']);
Route::get('/about' , [HomeController::class,'about']);
Route::get('/portfolio' , [HomeController::class,'portfolio']);
Route::get('/service' , [HomeController::class,'service']);
Route::get('/contact' , [HomeController::class,'contact']);



Route::get('admin/trifoliums', [LoginController::class,'showLoginForm']);
Route::post('admin/index', [LoginController::class,'login'])->name('login');

Auth::routes();
