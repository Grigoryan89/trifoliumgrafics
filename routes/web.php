<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Milling\MillingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\Printing\PrintingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Portfolio\PortfolioPrintController;
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
Route::get('/partners', [HomeController::class, 'partners']);

Route::name('print.')->prefix('portfolio')->group(function() {
    Route::get('print-index',  [PortfolioPrintController::class, 'index'])->name('index');
    Route::get('print-all',  [PortfolioPrintController::class, 'printings'])->name('all');
    Route::get('print-show/{id}',  [PortfolioPrintController::class, 'printingShow'])->name('show');
});

Route::post('contact-us',  [ContactController::class, 'store'])->name('contact.store');

Route::middleware('admin')->prefix('admin')->group(function (){
    Route::get('index', [AdminController::class, 'index']);
    Route::get('contact', [AdminController::class, 'contact'])->name('admin.contact');
});

Route::middleware('admin:auth')->prefix('admin/printings')->group(function () {
    Route::resource('printings', PrintingController::class);
});

Route::middleware('admin:auth')->prefix('admin/millings')->group(function () {
    Route::resource('millings', MillingController::class);
});

Route::get('admin/trifoliums', [LoginController::class, 'showLoginForm']);
Route::post('admin/index', [LoginController::class, 'login'])->name('login');

Auth::routes();
