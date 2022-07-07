<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\ServicessingleController;
use App\Http\Controllers\frontend\HowitworksController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\OfferingController;
use App\Http\Controllers\frontend\SiteinfosController;
use App\Http\Controllers\frontend\ProfileController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::get('services', [ServicesController::class, 'index'])->name('services');
Route::get('services/{id}', [ServicesController::class, 'indexByCategory'])->name('services.category');

Route::get('services/single/{slug}', [ServicessingleController::class, 'index'])->name('services.single');
Route::get('offering', [OfferingController::class, 'index'])->name('offering');
Route::get('profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
