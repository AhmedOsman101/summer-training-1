<?php

namespace App\Livewire;

use Livewire\Component;

class LiveSearch extends Component {

    public string $search = '';

    public function handleKeyDown() {
        $this->dispatch('search', search: $this->search ?? '');
    }

    public function render() {
        return view('livewire.live-search');
    }
}