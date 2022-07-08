<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\ServicessingleController;
use App\Http\Controllers\frontend\OfferingController;
use App\Http\Controllers\frontend\ProfileController;
use App\Http\Controllers\MessageController;
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
Route::post('contact/send', [ContactController::class, 'contact'])->name('contact.send');

Route::get('services', [ServicesController::class, 'index'])->name('services');
Route::get('services/{id}', [ServicesController::class, 'indexByCategory'])->name('services.category');
Route::get('services/single/{slug}', [ServicessingleController::class, 'index'])->name('services.single');
Route::get('offering', [OfferingController::class, 'index'])->name('offering');
Route::get('profile', [ProfileController::class, 'index'])->middleware(['auth'])->name('profile');
Route::get('profile/edit', [ProfileController::class, 'edit'])->middleware(['auth'])->name('profile.edit');
Route::post('profile/update', [ProfileController::class, 'update'])->middleware(['auth'])->name('profile.update');
Route::post('profile/password/update', [ProfileController::class, 'passwordUpdate'])->middleware(['auth'])->name('profile.password.update');


Route::post('message/send', [MessageController::class, 'index'])->middleware(['auth'])->name('message.send');

require __DIR__ . '/auth.php';
