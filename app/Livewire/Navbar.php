<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component {

    public string $app_name;

    public function mount(): void {
        $this->app_name = env('APP_NAME');
    }

    public function render() {
        return view('livewire.navbar');
    }
}
