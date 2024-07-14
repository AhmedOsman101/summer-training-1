<table class="mt-4 w-full min-w-max table-auto text-left">
    <thead>
        <tr>
            <th
                class="cursor-pointer border-y p-4 transition-colors">
                <p
                    class="antialiased text-sm flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                    ID
                </p>
            </th>
            <th
                class="cursor-pointer border-y p-4">
                <p
                    class="antialiased text-sm flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                    Title
                </p>

            </th>
            <th
                class="cursor-pointer border-y p-4">
                <p
                    class="antialiased text-sm flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                    Description
                </p>
            </th>
            <th
                class="cursor-pointer border-y p-4">
                <p
                    class="antialiased text-sm flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                    Image
                </p>
            </th>
            <th
                class="cursor-pointer border-y p-4">
                <p
                    class="antialiased text-sm flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                    Actions</p>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <livewire:table-cell :post="$post" :key="$post->id" />
        @endforeach

    </tbody>
</table>
