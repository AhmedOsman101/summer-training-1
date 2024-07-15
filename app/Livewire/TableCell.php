<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class TableCell extends Component {

    public object $post;

    public function delete() {

        if ($this->post->image) {
            Storage::disk('public')->delete($this->post->image);
        }

        $this->post->delete();

        $this->refresh();
    }

    public function refresh() {
        return to_route('Home');
    }

    public function render() {
        return view('livewire.table-cell');
    }
}
