<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreatePost extends Component {

    use WithFileUploads;


    #[Validate("required|string|min:3|max:255")]
    public $title;

    #[Validate("nullable|string")]
    public $content;

    #[Validate("nullable|image")]
    public $image;

    public function create() {

        if ($this->validate()) {
            $data = [
                "title" => $this->title,
                "content" => $this->content,
                "image" => $this->image?->store('posts', 'public'),
            ];

            $post = Post::create($data);

            if (!empty($post)) {
                $this->reset();
                return to_route('Home');
            }
        }
    }

    public function render() {
        return view('livewire.create-post');
    }
}
