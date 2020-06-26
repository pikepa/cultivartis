<?php


Auth::routes(['register' => false]);

Route::get('/', 'HomeController@welcome')->name('welcome');

/**
 * App Routes.
 */
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@home')->name('home');
    Route::get('/admin', 'HomeController@admin')->name('admin');
    Route::livewire('contacts', 'admin.show-contacts')->name('contacts');
    Route::livewire('message', 'messages.display-messages')->name('messages');
});