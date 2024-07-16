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

    /**
     * The `mount` function retrieves a post by its ID and assigns its title, content, and image to
     * variables within the class on component load.
     */
    public function mount() {
        $this->post = Post::findOrFail(request('id'));

        $this->title = $this->post->title;
        $this->content = $this->post->content;
        $this->image = $this->post->image;
    }

    /**
     * The update function updates a post's title, content, and image while
     * handling image storage and validation.
     *
     * @return \Illuminate\Http\RedirectResponse|null The `update()` function is
     * returning a redirect response to the route named 'posts.index' after
     * successfully updating the post data and saving it to the database.
     */
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

            return to_route('posts.index');
        }
        return $this->reset();
    }
    public function render() {
        return view('livewire.update-post');
    }
}
