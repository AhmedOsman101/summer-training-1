<?php

namespace App\Livewire;

use Livewire\Component;

class LiveSearch extends Component {

    public string $search = '';

    public function handleKeyUp() {
        // dispatch the search event with the search value
        // set the search to input value or empty string if input is null
        $this->dispatch('search', search: $this->search ?? '');
    }

    public function render() {
        return view('livewire.live-search');
    }
}
