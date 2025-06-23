<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 text-[#1b1b18]">

        @session('success')
        <div class="m-4">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        </div>
        @endsession
       
        <div class="container mx-auto p-6 lg:p-8">
            <h1 class="text-4xl font-bold text-center mb-12 text-gray-800">
                Titres provenant de la base de données
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($titles as $title)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300 ease-in-out">
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-gray-900">{{ $title->label }}</h2>
                            <form action="{{ route('index-titles.delete', $title->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="position: absolute; top: 10px; right: 10px;">X</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </body>
</html>
