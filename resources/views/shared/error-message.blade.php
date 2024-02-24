@if (session()->has('delete'))

    <div id="alert-3" class="flex items-center absolute p-4 my-2 mr-2 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="sr-only">Info</span>
        <div class="ms-3 text-sm font-medium">
            {{ session('delete') }} Give it a click if you like.
        </div>
    </div>

@endif
