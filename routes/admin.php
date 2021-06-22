<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\BrandController;

Route::group(['prefix' => 'admin'], function () {
  Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
  Route::post('login', [LoginController::class, 'login'])->name('admin.login.post');
  Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
});

Route::group(['middleware' => ['auth:admin']], function () {

  Route::get('/', function () {
    return view('admin.dashboard.index');
  })->name('admin.dashboard');
});

Route::group(['prefix'  =>   'brands'], function () {

  Route::get('/', [BrandController::class, 'index'])->name('admin.brands.index');
  Route::get('/create', [BrandController::class, 'create'])->name('admin.brands.create');
  Route::post('/store', [BrandController::class, 'store'])->name('admin.brands.store');
  Route::get('/{id}/edit', [BrandController::class, 'edit'])->name('admin.brands.edit');
  Route::post('/update', [BrandController::class, 'update'])->name('admin.brands.update');
  Route::get('/{id}/delete', [BrandController::class, 'delete'])->name('admin.brands.delete');
});
