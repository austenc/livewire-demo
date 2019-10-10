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
            <h3 class="text-2xl text-gray-600 mb-5">Subscribers</h3>
            <div class="flex justify-between items-center text-sm">
                <div>
                    <label class="pl-1 block mb-1 uppercase text-xs tracking-wide text-gray-500">Confirmation Status</label>
                    <select name="filter_status" class="appearance-none bg-white border pr-8 border-gray-300 p-2">
                        <option value="confirmed">Confirmed</option>
                        <option value="pending">Pending Confirmation</option>
                    </select>
                </div>
                <div class="flex items-center">
                    <input type="text" class="bg-white rounded p-2 border border-gray-300" placeholder="Search">
                    <button type="submit" class="rounded bg-purple-500 hover:bg-purple-700 text-gray-200 ml-1 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="block w-6 h-6 fill-current text-white"><circle cx="10" cy="10" r="7" class="text-transparent" /><path d="M16.32 14.9l1.1 1.1c.4-.02.83.13 1.14.44l3 3a1.5 1.5 0 0 1-2.12 2.12l-3-3a1.5 1.5 0 0 1-.44-1.14l-1.1-1.1a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
                    </button>
                </div>
            </div>
            <table class="table-responsive">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Confirmed?</th>
                        <th class="text-right">Actions</th>
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
                            <td>{{ $subscriber->city }}, {{ $subscriber->state }}</td>
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

            {{ $subscribers->links() }}
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
