<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorisController;
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

Route::get('/categories/index',[CategorisController::class,'index'])->name('categories');
Route::get('/categories/{id}/edit',[CategorisController::class,'edit'])->name('categoriesEdit');