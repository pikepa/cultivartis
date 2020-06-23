<?php


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@welcome')->name('welcome');

Route::livewire('admin','admin.dashboard')->name('dashboard');