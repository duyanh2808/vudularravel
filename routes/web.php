<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\frontController;
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

Route::get('/', [frontController::class,'index']
);
Route::get('/loai', [frontController::class,'category']);

Route::get('/post', [frontController::class,'posts']);

Route::get('/category', [frontController::class,'category']);

Route::get('/admin', [adminController::class,'index']);

Route::get('/viewcategory', [adminController::class,'viewcate']);
Route::post('/addcategory',[CRUDController::class,'insertData']);