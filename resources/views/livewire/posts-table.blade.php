<section>

    @if ($posts->isEmpty())
        <livewire:no-posts />
    @else
        <div>
            <h1 class="ml-4 mt-4 text-xl font-semibold">Posts (<span>{{ $posts->count() }}</span>)</h1>
            <table class="mt-4 w-full min-w-max table-auto text-left">
                <thead>
                    <tr>
                        <th class="cursor-pointer border-y p-4 transition-colors">
                            <p
                                class="flex items-center justify-between gap-2 text-sm font-normal leading-none antialiased opacity-70">
                                ID
                            </p>
                        </th>
                        <th class="cursor-pointer border-y p-4">
                            <p
                                class="flex items-center justify-between gap-2 text-sm font-normal leading-none antialiased opacity-70">
                                Title
                            </p>

                        </th>
                        <th class="cursor-pointer border-y p-4">
                            <p
                                class="flex items-center justify-between gap-2 text-sm font-normal leading-none antialiased opacity-70">
                                content
                            </p>
                        </th>
                        <th class="cursor-pointer border-y p-4">
                            <p
                                class="flex items-center justify-between gap-2 text-sm font-normal leading-none antialiased opacity-70">
                                Image
                            </p>
                        </th>
                        <th class="cursor-pointer border-y p-4">
                            <p
                                class="flex items-center justify-between gap-2 text-sm font-normal leading-none antialiased opacity-70">
                                Actions</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <livewire:table-cell :key="$post->id" :post="$post" />
                    @endforeach

                </tbody>
            </table>
        </div>
    @endif
</section>
