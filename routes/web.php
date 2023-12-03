<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sitecontroller;


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

Route::get('/', [Sitecontroller::class,'index']);
Route::get('/dashboard', [Sitecontroller::class,'dashboard']);
Route::get('/category', [Sitecontroller::class,'category'])->name('category');
Route::get('/package', [Sitecontroller::class,'package'])->name('package');
Route::get('/packagelist', [Sitecontroller::class,'packagelist'])->name('packagelist');
Route::post('/addCategory', [Sitecontroller::class,'addCategory'])->name('addCategory');
Route::post('/addPackage', [Sitecontroller::class,'addPackage'])->name('addPackage');
   

