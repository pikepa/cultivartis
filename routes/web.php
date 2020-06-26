<?php


Auth::routes();

Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('/comingsoon', 'HomeController@comingSoon')->name('comingsoon');

/**s
 * App Routes.
 */
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@home')->name('home');
    Route::get('/admin', 'HomeController@admin')->name('admin');
    Route::livewire('contacts', 'admin.show-contacts')->name('contacts');
    Route::livewire('message', 'messages.display-messages')->name('messages');
});