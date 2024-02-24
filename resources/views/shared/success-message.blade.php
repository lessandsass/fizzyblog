@if (session()->has('success'))

    <div id="alert-3" class="flex items-center absolute p-4 my-2 mr-2 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <span class="sr-only">Info</span>
        <div class="ms-3 text-sm font-medium">
            {{ session('success') }} Give it a click if you like.
        </div>
    </div>

@endif
