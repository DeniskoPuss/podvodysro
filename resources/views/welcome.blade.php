<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="antialiased bg-gray-500">
<div class="mt-10 grid grid-cols-1 gap-10 justify-items-center">
    <div class="w-11/12 lg:w-1/2">
        <div class="mt-5 md:mt-0">
            <form action="{{ route('index') }}" method="post">
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <span class="flex justify-center opacity-50 font-extralight font-sans">© Made by FHI gang™ </span>
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div>
                            <div class="mt-1">
                                <textarea id="text" name="text" rows="10" cols="20" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 flex justify-center">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="w-11/12 lg:w-1/2 grid grid-cols-1 gap-8 pb-24">
        @foreach($messages as $message)
            <div>
                <div class="flex justify-end">
                    <span class="py-2 px-4 border-x border-t border-gray-700 rounded text-xs font-thin">
                        {{ $message->created_at->format('d.m.Y H:i:s') }}
                    </span>
                </div>
                <div class="p-8 border border-gray-300 rounded">
                    {{ $message->text }}
                </div>
            </div>
        @endforeach
    </div>
    {{ $messages->links() }}
</div>
</body>
</html>
