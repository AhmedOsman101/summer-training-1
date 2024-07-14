<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class TableCell extends Component {

    public object $post;

    public function delete() {
        $this->post->delete();
    }

    public function render() {
        return view('livewire.table-cell');
    }
}
