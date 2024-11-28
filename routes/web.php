<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers\Auto','middleware' => 'auth', 'prefix' => 'auto'], function(){
    Route::get('/', 'IndexController')->name('auto.index');
    Route::get('/create', 'CreateController')->name('auto.create');
    Route::post('/create', 'StoreController')->name('auto.store');
    Route::delete('/{id}', 'DestroyController')->name('auto.destroy');
});

Route::get('/{id}', \App\Http\Controllers\AddAuto::class)->name('add_auto');

Route::get('/profile', \App\Http\Controllers\Profile::class)->name('profile');
Route::patch('/profile', \App\Http\Controllers\UpdateProfile::class)->name('profile.update');


