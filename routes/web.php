<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;


Route::get('/admin/index', [adminController::class,'index'])->name('index');  // ->middleware('check')

Route::get('/admin/create', [adminController::class,'create'])->name('create');

Route::post('/admin/create/post', [adminController::class,'store'])->name('createpost');

Route::get('/admin/edit/{id}',[adminController::class,'edit'])->name('edit');

Route::post('/admin/edit/update/{id}',[adminController::class,'update'])->name('update');

Route::get('/admin/delete/{id}}',[adminController::class,'delete'])->name('delete');

Route::get('/',[adminController::class,'user'])->name('user');

Route::get('/user/admin',[adminController::class,'useradmin'])->name('useradmin');

Route::get('/admin/login',[adminController::class,'login'])->name('login');

Route::post('/admin/login',[adminController::class,'loginto'])->name('loginto');

Route::get('/admin/register',[adminController::class,'regis'])->name('regis');

Route::post('/admin/register',[adminController::class,'registo'])->name('registo');



