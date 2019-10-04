<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livewire</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="font-sans antialiased text-gray-700 bg-gray-100">
        <div class="p-4 container mx-auto">
            <table class="table-responsive">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Confirmed?</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subscribers as $subscriber)
                        <tr>
                            <td>
                                <span class="flex">
                                    <img src="{{ $subscriber->avatar_url }}" class="rounded-full w-12 h-12 mr-3 hidden md:block ">
                                    <span class="flex-grow">
                                        {{ $subscriber->name }} <br class="hidden md:block">
                                        <span class="tracking-wide uppercase text-xs text-gray-600">{{ $subscriber->email }}</span>
                                    </span>
                                </span>
                            </td>
                            <td>Kansas City, MO</td>
                            <td class="text-xs">
                                @if ($subscriber->confirmed_at)
                                    <span class="bg-green-100 text-green-800 font-bold p-1 rounded-full">Confirmed</span>
                                @else
                                    <span class="bg-yellow-100 text-yellow-800 font-bold p-1 rounded-full">Pending Confirmation</span>
                                @endif
                            </td>
                            <td class="actions">
                               
                                <div class="dropdown flex flex-col items-end">
                                    <a href="#subscriber-edit" class="btn-details">
                                        <div class="dot"></div>
                                        <div class="dot"></div>
                                        <div class="dot"></div>
                                    </a>

                                    <button class="overlay z-10"></button>
                                    <div class="dropdown-menu absolute z-20 w-48 py-2 mt-8 bg-gray-600 rounded-lg shadow-xl">
                                        <a href="subscribers/{{ $subscriber->id }}" class="block p-2 px-3 text-gray-300 hover:text-white hover:bg-indigo-600">
                                            Edit Subscriber
                                        </a>
                                        <a href="#cool" class="block p-2 px-3 text-gray-300 hover:text-white hover:bg-indigo-600">
                                            Cool Links
                                        </a>
                                        <a href="#links" class="block p-2 px-3 text-gray-300 hover:text-white hover:bg-indigo-600">
                                            In The Dropdown
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
