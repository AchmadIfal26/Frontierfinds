<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdventureController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\InstructorsController;
use App\Http\Controllers\TestimonialController;
use App\Models\User;

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
Route::get('/adventure/{adventure:slug}', [AdventureController::class, 'show']);

Route::get('/feature', [FeatureController::class, 'index']);

Route::get('/testimonial', [TestimonialController::class, 'index']);

Route::get('/instructors', [InstructorsController::class, 'index']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/guides/{guide:username}', function(User $guide) {
    return view('adventures', [
        'title' => 'Guide Posts',
        'adventures' => $guide->adventures,
    ]);
});
