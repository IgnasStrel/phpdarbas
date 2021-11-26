<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkateboardController;
use App\Http\Controllers\CategoryController;

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

// TODO: Neleisti ne savininkui(produkto) redaguoti/istrinti
// TODO: Routus

Route::get('/', [SkateboardController::class, 'index']);
Route::get('/skateboardForm', [SkateboardController::class, 'skateboardForm']);
Route::post('/storeSkateboard', [SkateboardController::class, 'storeSkateboard']);
Route::get('/skateboard/{skateboard}',[SkateboardController::class, 'showSkateboard']);
Route::get('/skateboard/{skateboard}/edit', [SkateboardController::class, 'editSkateboard']);
Route::patch('/skateboard/{skateboard}/edit', [SkateboardController::class, 'updateSkateboard']);
Route::get('/skateboard/{skateboard}/delete/ask', [SkateboardController::class, 'skateRemove']);
Route::get('/skateboard/{skateboard}/delete/confirm', [SkateboardController::class, 'deleteSkateboard']);
Route::get('/skateboard/{skateboard}/register', [SkateboardController::class, 'Registration']);
Route::get('/skateboard/{skateboard}/unregister', [SkateboardController::class, 'unRegistration']);

//Kategorijos
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/add-category', [CategoryController::class, 'viewForm'])->name('add-category');
Route::post('/storeCategory', [CategoryController::class, 'storeCategory']);
Route::get('/category/{category}/edit', [CategoryController::class, 'editCategory']);
Route::patch('/category/{category}/edit', [CategoryController::class, 'updateCategory']);
Route::get('/category/{category}/delete/ask', [CategoryController::class, 'categoryRemove']);
Route::get('/category/{category}/delete/confirm', [CategoryController::class, 'deleteCategory']);

//Dashboardas 
Route::get('/dashboard', [SkateboardController::class, 'dashboard'])->name('dashboard');

require __DIR__.'/auth.php';
