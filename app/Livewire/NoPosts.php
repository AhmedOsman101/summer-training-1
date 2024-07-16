<?php

namespace App\Livewire;

use Livewire\Component;

class NoPosts extends Component {

    public function refresh() {
        return to_route('posts.index');
    }
    public function render() {
        return view('livewire.no-posts');
    }
}
