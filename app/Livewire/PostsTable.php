<?php

namespace App\Livewire;

use Livewire\Component;

class PostsTable extends Component {

    public array $posts;

    public function mount() {
        $this->posts = Post::all();
    }

    public function render() {
        return view('livewire.posts-table');
    }
}
