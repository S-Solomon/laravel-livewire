<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>
        @livewireStyles
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="flex justify-center">
        

        <div class="w-10/12 my-10 flex">
            <div class="w-5/12 rounded border p-2">
                {{-- <livewire:tickets /> --}}
            </div>
            <div class="w-7/12 mx-2 rounded border p-2">
                <livewire:comments />
            </div>
        </div>

        @livewireScripts
    </body>
</html>
