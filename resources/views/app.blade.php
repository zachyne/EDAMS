<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDAMS</title>

    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/c53e925e68.js" crossorigin="anonymous"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <header class="bg-white">
            @include('components.header')
        </header>

        {{-- <div class="flex">
            <main class="flex-1 p-0 overflow-auto">
                @yield('content') <!-- This will inject the content from child views -->
            </main>
        </div> --}}
    </div>
</body>
</html>