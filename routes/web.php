<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Milling\MillingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\Printing\PrintingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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

Route::get('lang/change', [HomeController::class, 'change'])->name('changeLang');


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/portfolio', [HomeController::class, 'portfolio']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/contact', [HomeController::class, 'contact']);



Route::get('admin/index', [AdminController::class, 'index'])->middleware('admin');

Route::middleware('admin:auth')->prefix('admin/printings')->group(function () {

    Route::resource('printings',PrintingController::class);
//    Route::get('printing', [PrintingController::class, 'index'])->name('printing.index');
//    Route::get('/printing/create', [PrintingController::class, 'create'])->name('printing.create');
//    Route::post('/printing/store', [PrintingController::class, 'store'])->name('printing.store');
//    Route::get('/printing/{id}', [PrintingController::class, 'show'])->name('printing.show');
//    Route::get('/printings/{id}/edit', [PrintingController::class, 'edit'])->name('printing.edit');
//    Route::put('/printings/{id}', [PrintingController::class, 'update'])->name('printing.update');
//    Route::delete('/printings/{id}', [PrintingController::class, 'destroy'])->name('printing.destroy');
});

Route::prefix('admin/millings')->group(function (){
    Route::resource('millings',MillingController::class);
});


Route::get('admin/trifoliums', [LoginController::class, 'showLoginForm']);
Route::post('admin/index', [LoginController::class, 'login'])->name('login');

Auth::routes();
