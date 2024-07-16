<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class UpdatePost extends Component {

    use WithFileUploads;

    public object $post;

    #[Validate("required|string|min:3|max:255")]
    public $title;

    #[Validate("nullable|string")]
    public $content;

    #[Validate("nullable")]
    public $image;

    public function mount() {
        $this->post = Post::findOrFail(request('id'));

        $this->title = $this->post->title;
        $this->content = $this->post->content;
        $this->image = $this->post->image;
    }

    public function update() {

        if ($this->validate()) {
            $this->post->title = $this->title;
            $this->post->content = $this->content;

            if ($this->post->image) {
                if ($this->post->image !== $this->image) {
                    Storage::disk('public')->delete($this->post->image);
                    $this->post->image = $this->image?->store('posts', 'public');
                }
            } else {
                $this->post->image = $this->image?->store('posts', 'public');
            }


            $this->post->save();

            $this->reset();
            return to_route('posts.index');
        }
    }
    public function render() {
        return view('livewire.update-post');
    }
}
