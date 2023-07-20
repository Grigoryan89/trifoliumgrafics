<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Laser\LaserController;
use App\Http\Controllers\Admin\Milling\MillingController;
use App\Http\Controllers\Admin\Printing\PrintingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Portfolio\PortfolioLaserController;
use App\Http\Controllers\Portfolio\PortfolioMillingController;
use App\Http\Controllers\Portfolio\PortfolioPrintController;
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

Route::get('lang/change', [HomeController::class, 'change'])->name('changeLang');


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/portfolio', [HomeController::class, 'portfolio']);
Route::get('/show-portfolio', [HomeController::class, 'showPortfolio'])->name('show.portfolio');
Route::get('/service', [HomeController::class, 'service']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/partners', [HomeController::class, 'partners']);

Route::post('contact-us', [ContactController::class, 'store'])->name('contact.store');


Route::prefix('portfolio')->group(function () {
        // portfolio printing controller
        Route::name('print.')->group(function () {
            Route::get('print-all', [PortfolioPrintController::class, 'index'])->name('all');
            Route::get('print-show/{id}', [PortfolioPrintController::class, 'show'])->name('show');
        });
    // portfolio milling controller
    Route::name('mill.')->group(function () {
        Route::get('milling-all', [PortfolioMillingController::class, 'index'])->name('all');
        Route::get('milling-show/{id}', [PortfolioMillingController::class, 'show'])->name('show');
    });
  // portfolio lasers controller
    Route::name('las.')->group(function () {
        Route::get('laser-all', [PortfoliolaserController::class, 'index'])->name('all');
        Route::get('laser-show/{id}', [PortfoliolaserController::class, 'show'])->name('show');
    });

});



Route::middleware('admin::auth')->prefix('admin')->group(function () {
    Route::get('index', [AdminController::class, 'index']);
    Route::get('contact', [AdminController::class, 'contact'])->name('admin.contact');

    //printings
    Route::prefix('/printings')->resource('printings', PrintingController::class);
    //millings
    Route::prefix('/millings')->resource('millings', MillingController::class);
    //laser
    Route::prefix('/lasers')->resource('lasers', LaserController::class);
});


//login change controllers
Route::get('admin/trifoliums', [LoginController::class, 'showLoginForm']);
Route::post('admin/index', [LoginController::class, 'login'])->name('login');

Auth::routes();
