<tr>
    <td class="p-4 border-b">
        <div class="flex items-center gap-3">
            <div class="flex flex-col">
                <p
                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal hover:underline">
                    {{$post->id}}
                </p>
            </div>
        </div>
    </td>
    <td class="p-4 border-b">
        <div class="flex items-center gap-3">
            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                {{$post->title}}
            </p>
        </div>

    </td>
    <td class="p-4 border-b">
        <div class="flex items-center gap-3">
            @if ($post->description)
            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                {{$post->description}}
            </p>
            @else
            <p class="block antialiased font-sans text-sm leading-normal text-neutral-600 font-normal">
                Null
            </p>
            @endif
        </div>

    </td>

    <td class="p-4 border-b">
        <div class="flex flex-col">
            @if ($post->image)
            <img src="{{$post->image}}" class="block antialiased w-6 h-6" />
            @else
            <p class="block antialiased font-sans text-sm leading-normal text-neutral-600 font-normal">
                Null
            </p>
            @endif
        </div>
    </td>

    <td class="border-b border-blue-gray-50 ">
        {{-- Edit button --}}
        <a href="{{ route('posts.edit', $post->id) }}"
            class="inline-block relative align-middle select-none font-sans font-medium  uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[40px] h-8 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
            type="button">
            <span class="pl-7 absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                    class="h-4 w-4">
                    <path
                        d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                    </path>
                </svg>
            </span>
        </a>

        {{-- Delete button --}}
        <div class="inline-block max-w-fit w-fit">
            <button type="button" wire:click="delete"
                wire:confirm="Are you sure you want to delete this post?"
                class="relative align-middle select-none font-sans font-medium  uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30">
                <span
                    class="inline-block w-6 pl-2 absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 text-[#cb3434]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="#cb3434"
                            d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z" />
                    </svg>
                </span>
            </button>
        </div>
    </td>
</tr>
