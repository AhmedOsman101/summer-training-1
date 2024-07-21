<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class PostsTable extends Component {

    public $posts;
    public string $query;

    public function mount() {
        $this->posts = Post::all();
    }

    #[On('search')]
    public function search(string $search = null) {
        if (empty($search)) $this->posts = Post::all();
        else {
            $this->query = $search;
            $this->posts = Post::where('title', 'like', "%{$this->query}%")->get();
        }
    }


    public function render() {
        return view('livewire.posts-table');
    }
}