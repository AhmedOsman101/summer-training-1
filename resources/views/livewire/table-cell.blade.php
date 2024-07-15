<tr>
    <td class="border-b p-4">
        <div class="flex items-center gap-3">
            <div class="flex flex-col">
                <p
                    class="text-blue-gray-900 block font-sans text-sm font-normal leading-normal antialiased hover:underline">
                    {{ $post->id }}
                </p>
            </div>
        </div>
    </td>
    <td class="border-b p-4">
        <div class="flex items-center gap-3">
            <p class="text-blue-gray-900 block font-sans text-sm font-normal leading-normal antialiased">
                {{ $post->title }}
            </p>
        </div>

    </td>
    <td class="border-b p-4">
        <div class="flex items-center gap-3">
            @if ($post->content)
                <p class="text-blue-gray-900 block font-sans text-sm font-normal leading-normal antialiased">
                    {{ $post->content }}
                </p>
            @else
                <p class="block font-sans text-sm font-normal leading-normal text-neutral-600 antialiased">
                    Null
                </p>
            @endif
        </div>

    </td>

    <td class="border-b p-4">
        <div class="flex flex-col">
            @if ($post->image)
                <img class="block aspect-square w-8 object-scale-down antialiased"
                    src='{{ asset("storage/$post->image") }}' />
            @else
                <p class="block font-sans text-sm font-normal leading-normal text-neutral-600 antialiased">
                    Null
                </p>
            @endif
        </div>
    </td>

    <td class="border-blue-gray-50 border-b">
        {{-- Edit button --}}
        <a class="text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 relative inline-block h-8 max-h-[40px] w-8 max-w-[40px] select-none rounded-lg align-middle font-sans text-xs font-medium uppercase transition-all disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            href="{{ route("posts.edit", $post->id) }}" type="button">
            <span class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transform pl-7">
                <svg aria-hidden="true" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                    </path>
                </svg>
            </span>
        </a>

        {{-- Delete button --}}
        <div class="inline-block w-fit max-w-fit">
            <button
                class="text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg align-middle font-sans text-xs font-medium uppercase transition-all disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                type="button" wire:click="delete" wire:confirm="Are you sure you want to delete this post?">
                <span
                    class="absolute left-1/2 top-1/2 inline-block w-6 -translate-x-1/2 -translate-y-1/2 transform pl-2 text-[#cb3434]">
                    <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"
                            fill="#cb3434" />
                    </svg>
                </span>
            </button>
        </div>
    </td>
</tr>
