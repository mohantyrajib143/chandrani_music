<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'home'])->name('home'); // Home Page
Route::get('/seasonal/', [HomeController::class, 'seasonal'])->name('seasonal'); // Seasonal Page
Route::get('/entertainment/', [HomeController::class, 'entertainment'])->name('entertainment'); // Entertainment Page
Route::get('/traveller/', [HomeController::class, 'traveller'])->name('traveller'); // Traveller Page
Route::get('/music/', [HomeController::class, 'music'])->name('music'); // Music Page
Route::get('/about/', [HomeController::class, 'about'])->name('about'); // About Page
Route::get('/contact/', [HomeController::class, 'contact'])->name('contact'); // Contact Page
Route::post('/newsletters', [HomeController::class, 'newsletters'])->name('newsletters');
Route::post('/contact/save', [HomeController::class, 'contactSave'])->name('contact-save'); // Contact Page
