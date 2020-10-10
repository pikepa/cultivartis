<?php

use App\Http\Controllers\HomeController;

Auth::routes(['register' => false]);

//Route::get('/', Welcome::class)->name('welcome');
 Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
 Route::get('/thebook', [HomeController::class, 'thebook'])->name('thebook');

/**
 * App Routes.
 */
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@home')->name('home');
    Route::get('/admin', 'HomeController@admin')->name('admin');
    Route::livewire('contacts', 'admin.show-contacts')->name('contacts');
    Route::livewire('message', 'messages.display-messages')->name('messages');
});