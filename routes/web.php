<?php

use App\Livewire\CreatePost;
use App\Livewire\PostsTable;
use App\Livewire\UpdatePost;
use Illuminate\Support\Facades\Route;


Route::prefix('posts')->group(function () {
  Route::get('/', PostsTable::class)->name('Home');

  Route::get('edit/{id}', UpdatePost::class)->name('posts.edit');

  Route::get('create', CreatePost::class)->name('posts.create');
});
