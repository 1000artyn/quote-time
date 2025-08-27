<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuoteTime</title>
    @vite('resources/css/app.css') <!-- If you're using Tailwind/Vite -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet"> <!-- handwriting font -->
    <link rel="icon" type="image/x-icon" href="/img/qt_fav.ico">
</head>
</head>
<body class="bg-[url('/public/img/parchment_texture.webp')] bg-cover bg-center bg-no-repeat text-gray-800 min-h-screen">

    {{-- Include Navigation --}}
    @include('partials.nav')

    <main class="container mx-auto p-6">
        @yield('content')
    </main>

</body>
</html>