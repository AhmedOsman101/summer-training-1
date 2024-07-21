<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class PostsTable extends Component {

    public $posts;
    public string $query; // our search query

    public function mount() {
        // get all the posts when the component is mounted.
        $this->posts = Post::all();
    }

    // listen to the search event
    #[On('search')]
    public function search(string $search = null) {
        // if the search query is empty, get all the posts
        if (empty($search)) $this->posts = Post::all();
        else {
            // search for the posts that match the search query
            $this->query = $search;
            // get the posts that match the search query, %{$this->query}% is a wildcard search
            // it means that it will search for the query anywhere in the title
            // it could have text before or after it.
            $this->posts = Post::where('title', 'like', "%{$this->query}%")->get();
        }
    }

    // render the component, the posts are passed to the view automatically.
    public function render() {
        return view('livewire.posts-table');
    }
}
