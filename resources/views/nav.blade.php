<nav class="p-6 bg-gray-800 text-gray-300 flex justify-between">
    <ul class="flex items-center">
        <li><a href="/" class="p-3">Home</a></li>
        <li><a href="" class="p-3">Dashboard</a></li>
        <li><a href="/terms" class="p-3">Terms & Conditions</a></li>
    </ul>

    <ul class="flex items-center">

        @auth
            <li><a href="#" class="p-3">{{ auth()->user()->name }}</a></li>

            <li>
                <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>

        @endauth

        @guest
            <li><a href="" class="p-3">Login</a></li>
            <li><a href="" class="p-3">Register</a></li>
        @endguest

    </ul>
</nav>
