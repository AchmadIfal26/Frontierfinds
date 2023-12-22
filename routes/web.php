<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdventureController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstructorsController;
use App\Http\Controllers\TestimonialController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/adventure', [AdventureController::class, 'index']);
Route::get('/adventure/{slug}', [AdventureController::class, 'show']);

Route::get('/feature', [FeatureController::class, 'index']);

Route::get('/testimonial', [TestimonialController::class, 'index']);

Route::get('/instructors', [InstructorsController::class, 'index']);
