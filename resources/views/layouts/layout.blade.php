<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900">

    <!-- component -->
    <div class="bg-gray-900">

        @include('nav')

        {{-- page content goes here --}}
        @yield('content')

    </div>


</body>
</html>
