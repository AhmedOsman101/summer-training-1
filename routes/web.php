<?php

use App\Livewire\PostsTable;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', PostsTable::class)->name('Home');

Route::get('posts/edit/{id}', function () {
})->name('posts.edit');
