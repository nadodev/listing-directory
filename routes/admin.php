<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/login', [AdminAuthController::class,'login'])->name('login');
    Route::get('/forget-password', [AdminAuthController::class,'forgetPassword'])->name('login.forget-password');
    Route::post('/forget-password', [AdminAuthController::class,'forgetRequest'])->name('password.request');

});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['user.type:admin']], function() {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard.index');

    Route::get('/profile', [ProfileController::class,'index'])->name('profile');
    Route::post('/profile', [ProfileController::class,'update'])->name('profile.update');
    Route::post('/profile-password', [ProfileController::class,'updatePassword'])->name('profile.password');
});
