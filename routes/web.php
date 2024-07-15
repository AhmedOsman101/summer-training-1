<?php

use App\Livewire\CreatePost;
use App\Livewire\PostsTable;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', PostsTable::class)->name('Home');

Route::get('posts/edit/{id}', function () {
})->name('posts.edit');

Route::get('posts/create', CreatePost::class)->name('posts.create');
