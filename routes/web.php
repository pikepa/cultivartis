<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Admin\ManageText;
use App\Http\Controllers\HomeController;

Auth::routes(['register' => false]);

    Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
    Route::get('/thebook', [HomeController::class, 'thebook'])->name('thebook');
    Route::get('/thanks', [HomeController::class, 'thanks'])->name('thanks');
    Route::get('/completed', [HomeController::class, 'completed'])->name('completed');
    Route::get('/confirm/{token}', [HomeController::class, 'confirm'])->name('confirm');
    Route::get('/comingsoon', [HomeController::class, 'comingsoon'])->name('comingsoon');

/**
 * App Routes.
 */
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
    Route::get('/text', ManageText::class)->name('text');
});