<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

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

Route::resource('/', LandingController::class);
Route::get('/news', [LandingController::class, 'news'])->name('landing.news');
Route::get('/projects', [LandingController::class, 'projects'])->name('landing.projects');
Route::get('/about', [LandingController::class, 'about'])->name('landing.about');
Route::get('/detail-news', [LandingController::class, 'detailnews'])->name('landing.detail-news');
Route::get('/petsypet', [LandingController::class, 'petsypet'])->name('landing.petsypet');
Route::get('/folyland-polygon', [LandingController::class, 'folylandpolygon'])->name('landing.folyland-polygon');
