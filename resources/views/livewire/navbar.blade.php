<header class="py-2 dark:bg-gray-800 dark:text-gray-100">
    <div class="container flex justify-between items-center h-16 mx-auto">
        <a href="{{route('Home')}}" aria-label="Back to homepage"
            class="hover:text-blue-400 grid place-items-center font-bold text-xl">
            {{ $app_name }}
        </a>
        <ul class="items-stretch flex space-x-3">
            <li>
                <a href="{{route('posts.create')}}"
                    class="grid place-items-center px-6 py-3 font-semibold border rounded border-gray-50 hover:border-blue-400 hover:bg-blue-400">Create</a>
            </li>
        </ul>
    </div>
</header>
