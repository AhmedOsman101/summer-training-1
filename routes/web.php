<?php

use App\Livewire\CreatePost;
use App\Livewire\PostsTable;
use App\Livewire\UpdatePost;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', PostsTable::class)->name('Home');

Route::get('posts/edit/{id}', UpdatePost::class)->name('posts.edit');

Route::get('posts/create', CreatePost::class)->name('posts.create');
