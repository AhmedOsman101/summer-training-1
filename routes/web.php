<?php

use App\Livewire\CreatePost;
use App\Livewire\PostsTable;
use App\Livewire\UpdatePost;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::prefix('posts')->group(function () {

    Route::get('/', PostsTable::class)->name('posts.index');

    Route::get('edit/{id}', UpdatePost::class)->name('posts.edit');

    Route::get('create', CreatePost::class)->name('posts.create');
});


require __DIR__ . '/auth.php';
