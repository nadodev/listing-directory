<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;




Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/login', [AdminAuthController::class,'login'])->name('admin.login');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['user.type:admin']], function(){
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard.index');
});
