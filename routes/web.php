<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/post_login', [AuthController::class, 'postLogin'])->name('post_login');
Route::get('/home', [AuthController::class, 'dashboard'])->name('home');

// require __DIR__.'/auth.php';
Route::group(['prefix' => 'project','as' => 'project.',], function () {
    Route::get('/index', [ProjectController::class, 'index'])->name('index');
    Route::post('/store', [ProjectController::class, 'store'])->name('store');
    Route::get('/update/{project}', [ProjectController::class, 'update'])->name('update');
    Route::post('/update/{project}', [ProjectController::class, 'store_update'])->name('store_update');
    Route::delete('/delete/{id}', [ProjectController::class, 'delete'])->name('delete');

    
});