<section class="grid place-items-center p-6">
    <form class="container mx-auto flex w-[80%] flex-col space-y-12 rounded-lg bg-gray-900" wire:submit="create">
        <fieldset class="grid grid-cols-4 gap-6 rounded-md p-6 shadow-sm">
            <div class="col-span-full flex justify-between space-y-2 pr-5">
                <div>
                    <p class="text-lg font-semibold">Create Post</p>
                    <p class="text-sm">Create a new post</p>
                </div>
                <div>
                    <button
                        class="grid place-items-center rounded bg-blue-600 px-6 py-3 font-semibold hover:bg-blue-500 disabled:opacity-60"
                        type="submit" wire:loading.attr="disabled">
                        <span wire:loading.remove wire:target='create'>Create</span>
                        <x-loader wire:loading wire:target='create' />
                    </button>
                </div>
            </div>
            <div class="col-span-full -mt-3 grid grid-cols-6 gap-4">
                <div class="col-span-full space-y-1.5 sm:col-span-3">
                    <label class="text-sm md:text-base" for="title">Title</label>
                    <input class="w-full rounded-md text-gray-900 focus:ring focus:ring-opacity-75" id="title"
                        placeholder="Title..." type="text" wire:model="title">
                    @error("title")
                        <p class="space-y-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-full space-y-1.5">
                    <label class="text-sm md:text-base" for="content">content</label>
                    <textarea class="w-full rounded-md border-gray-300 text-gray-900 focus:ring focus:ring-blue-600 focus:ring-opacity-75"
                        id="content" placeholder="content..." wire:model="content"></textarea>
                    @error("content")
                        <p class="space-y-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-full">
                    <h2 class="block text-sm text-gray-500 dark:text-gray-300 md:text-base">Image</h2>

                    <label
                        class="mx-auto mt-2 flex w-full max-w-lg cursor-pointer flex-col items-center rounded-xl border-2 border-dashed border-gray-300 bg-white p-5 text-center dark:border-gray-700 dark:bg-gray-900"
                        for="dropzone-file">
                        <svg class="h-8 w-8 text-gray-500 dark:text-gray-400" fill="none" stroke-width="1.5"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <h2 class="mt-1 font-semibold tracking-wide text-gray-700 dark:text-gray-200">Pick an Image</h2>

                        <p class="mt-2 text-xs tracking-wide text-gray-500 dark:text-gray-400 md:text-sm">Upload or darg
                            & drop
                            your file SVG, PNG,
                            JPG or GIF. </p>

                        <input accept=".svg, .png, .jpg, .jpeg" class="hidden" id="dropzone-file" type="file"
                            wire:model="image" />
                        @error("image")
                            <p class="space-y-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </label>
                </div>
            </div>
        </fieldset>
    </form>
</section>
