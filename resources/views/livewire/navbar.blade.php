<header class="py-2 dark:bg-gray-800 dark:text-gray-100">
    <div class="container mx-auto flex h-16 items-center justify-between">
        <a aria-label="Back to homepage" class="grid place-items-center text-xl font-bold hover:text-blue-400"
            href="{{ route("Home") }}">
            {{ $app_name }}
        </a>
        <ul class="flex items-stretch space-x-3">
            <li>
                <a class="grid place-items-center rounded border border-gray-50 px-6 py-3 font-semibold hover:border-blue-400 hover:bg-blue-400"
                    href="{{ route("posts.create") }}">Create</a>
            </li>
        </ul>
    </div>
</header>
