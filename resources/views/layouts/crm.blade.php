<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | CRM</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=albert-sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
    <x-banner />
    <div class="min-h-screen bg-gray-100 flex gap-3">
        <div class="hidden md:block sidebar relative min-w-[16rem] w-64 bg-white  rounded text-white">
            <div class="fixed bg-white  w-64 top-0 p-2 ">
                <a class="flex justify-center my-3 items-center gap-2" href="{{ route('dashboard') }}">
                    <x-application-mark class="block h-9 w-auto" />
                    <div>
                        <p class="text-gray-700 font-bold mb-0">{{ config('app.name', 'Puik CRM') }}</p>
                        <p class="text-gray-700 text-xs font-light ">Puik CRM</p>
                    </div>

                </a>
                <div class=" p-3 my-3 flex-col flex gap-1">

                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    <div class="block px-1 pt-2 text-xs text-gray-700 font-bold">
                        {{ __('Customer') }}
                    </div>
                    <x-nav-link href="{{ route('customers.index') }}" :active="request()->routeIs('customers*')">
                        {{ __('Customers') }}
                    </x-nav-link>

                    <div class="block px-1 pt-2 text-xs text-gray-700 font-bold">
                        {{ __('Project') }}
                    </div>
                    <x-nav-link href="{{ route('projects.index') }}" :active="request()->routeIs('projects*')">
                        {{ __('Projects') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('tasks.index') }}" :active="request()->routeIs('tasks*')">
                        {{ __('Tasks') }}
                    </x-nav-link>

                </div>
            </div>


        </div>
        <div class="flex-grow">


            @livewire('navigation-menu')
            <!-- Page Messages -->

            @if (Session::get('success'))
                <div class="bg-green-500 text-white font-bold p-3 rounded-lg m-2">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif

            @if (Session::get('error'))
                <div class="bg-red-500 text-white font-bold p-3 rounded-lg m-2">
                    <p>{{ Session::get('error') }}</p>
                </div>
            @endif

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white m-2 sticky top-0">
                    <div class="mx-auto py-6 px-4 sm:px-2 lg:px-4">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="m-2">
                {{ $slot }}
            </main>
        </div>

    </div>

    @stack('modals')
</body>

</html>
