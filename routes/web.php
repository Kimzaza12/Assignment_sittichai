<?php

use App\Http\Controllers\adminController;
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

Route::get('/admin/index', [adminController::class,'index'])->name('index');

Route::get('/admin/create', [adminController::class,'create'])->name('create');

Route::post('/admin/create/post', [adminController::class,'store'])->name('createpost');

Route::get('/admin/edit/{id}',[adminController::class,'edit'])->name('edit');

Route::post('/admin/edit/update/{id}',[adminController::class,'update'])->name('update');

Route::get('/admin/delete/{id}}',[adminController::class,'delete'])->name('delete');

Route::get('/',[adminController::class,'user'])->name('user');

Route::get('/admin/login',[adminController::class,'login'])->name('login');

Route::get('/admin/login/{id}',[adminController::class,'adminlogin'])->name('adminlogin');
