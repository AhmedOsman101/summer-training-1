<div>
    <input 
    class="w-32 rounded-md py-2 pl-10 text-sm text-gray-800 focus:outline-none sm:w-auto" 
    name="Search"
    placeholder="Search..."
    type="search" {{-- type is optional --}}
    wire:keyup='handleKeyUp' {{-- listen to keyup event and pass a function to handle it --}}
    wire:model.live='search' {{-- bind the input value to the search vairable --}}
    {{-- the .live modefier make sure that the value is updated whenever it changes --}}
    {{-- read more about it here: https://livewire.laravel.com/docs/forms#live-updating-fields --}}
    >
</div>
