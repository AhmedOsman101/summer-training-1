<section class="p-6 grid place-items-center">
    <form wire:submit="create" class="container flex flex-col mx-auto space-y-12 bg-gray-900 rounded-lg">
        <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm">
            <div class="space-y-2 col-span-full lg:col-span-1">
                <p class="font-medium">Create Post</p>
                <p class="text-xs">Create a new post</p>
            </div>
            <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3 -mt-3">
                <div class="col-span-full sm:col-span-3">
                    <label class="text-sm">Title</label>
                    <input id="title" type="text" placeholder="Title..."
                        class="w-full rounded-md focus:ring focus:ring-opacity-75 text-gray-900">
                </div>
                <div class="col-span-full">
                    <label class="text-sm">Description</label>
                    <textarea id="bio" placeholder="Description..."
                        class="w-full rounded-md focus:ring focus:ring-opacity-75 text-gray-900 focus:ring-blue-600 border-gray-300"></textarea>
                </div>
                <div class="col-span-full">
                    <label for="file" class="block text-sm text-gray-500 dark:text-gray-300">Image</label>

                    <label for="dropzone-file"
                        class="flex flex-col items-center w-full max-w-lg p-5 mx-auto mt-2 text-center bg-white border-2 border-gray-300 border-dashed cursor-pointer dark:bg-gray-900 dark:border-gray-700 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8 text-gray-500 dark:text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                        </svg>

                        <h2 class="mt-1 font-medium tracking-wide text-gray-700 dark:text-gray-200">Pick an Image</h2>

                        <p class="mt-2 text-xs tracking-wide text-gray-500 dark:text-gray-400">Upload or darg & drop
                            your file SVG, PNG,
                            JPG or GIF. </p>

                        <input id="dropzone-file" type="file" class="hidden" accept=".svg, .png, .jpg, .jpeg" />
                    </label>
                </div>
            </div>
        </fieldset>
    </form>
</section>
