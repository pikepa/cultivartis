<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Admin\ManageText;
use App\Http\Livewire\GuestMessages;
use App\Http\Livewire\ManagePodcasts;
use Illuminate\Support\Facades\Auth;

Auth::routes(['register' => false]);

    Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
    Route::get('/thebook', [HomeController::class, 'thebook'])->name('thebook');
    Route::get('/thanks', [HomeController::class, 'thanks'])->name('thanks');
    Route::get('/message/thanks', [HomeController::class, 'messagethanks'])->name('message.thanks');
    Route::get('/completed', [HomeController::class, 'completed'])->name('completed');
    Route::get('/confirm/{token}', [HomeController::class, 'confirm'])->name('confirm');
    Route::get('/comingsoon', [HomeController::class, 'comingsoon'])->name('comingsoon');
    Route::get('/messageus', GuestMessages::class)->name('guestmessage');
    Route::get('/podcasts', ManagePodcasts::class)->name('podcasts');

/**
 * App Routes.
 */
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
    Route::get('/text', ManageText::class)->name('text');
});
