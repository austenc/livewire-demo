<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livewire</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="font-sans antialiased">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold text-center p-12">
                Hello, World!
            </h1>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
