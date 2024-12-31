<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />



        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

    </head>
    <body class="font-sans antialiased">
        <nav x-data="{ open: false }" class="bg-gray-50">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between border-b border-gray-200">
                <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-auto"
                    src="https://tailwindui.com/img/logos/mark.svg?color=violet&amp;shade=500"
                    alt="Your Company">
                </div>

                <!-- Links section -->
                <div class="hidden lg:ml-10 lg:block">
                    <div class="flex space-x-4">

                    <a href="#" class="bg-gray-100 px-3 py-2 rounded-md text-sm font-medium text-gray-900"
                        aria-current="page" x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;bg-gray-100&quot;, Default: &quot;hover:text-gray-700&quot;">Home</a>

                    <a href="#"
                        class="hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium text-gray-900"
                        x-state-description="undefined: &quot;bg-gray-100&quot;, undefined: &quot;hover:text-gray-700&quot;">Your Trips</a>

                    <a href="#"
                        class="hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium text-gray-900"
                        x-state-description="undefined: &quot;bg-gray-100&quot;, undefined: &quot;hover:text-gray-700&quot;">Offers & Destinations</a>

                    <a href="#"
                        class="hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium text-gray-900"
                        x-state-description="undefined: &quot;bg-gray-100&quot;, undefined: &quot;hover:text-gray-700&quot;">Help Center</a>

                    </div>
                </div>
                </div>

                <div class="flex flex-1 justify-center px-2 lg:ml-6 lg:justify-end">
                <!-- Search section -->
                <div class="w-full max-w-lg lg:max-w-xs">
                    <label for="search" class="sr-only">Search for anything</label>
                    <div class="relative text-gray-400 focus-within:text-gray-500">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="h-5 w-5" x-description="Heroicon name: mini/magnifying-glass"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                            clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input id="search"
                        class="block w-full rounded-md border border-gray-300 bg-white py-2 pl-10 pr-3 leading-5 text-gray-900 placeholder-gray-500 focus:border-purple-500 focus:placeholder-gray-500 focus:outline-none focus:ring-1 focus:ring-purple-500 sm:text-sm"
                        placeholder="Search" type="search" name="search">
                    </div>
                </div>
                </div>
                

                <!-- Actions section -->
                <div class="hidden lg:ml-4 lg:block">
                <div class="flex items-center">
                    <button type="button"
                    class="flex-shrink-0 rounded-full bg-gray-50 p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-50">
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" x-description="Heroicon name: outline/bell"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0">
                        </path>
                    </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div x-data="Components.menu({ open: false })" x-init="init()"
                    @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)"
                    class="relative ml-3 flex-shrink-0">
                    <div>
                        <button type="button"
                        class="flex rounded-full bg-gray-50 text-sm text-white focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-50"
                        id="user-menu-button" x-ref="button" @click="onButtonClick()"
                        @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()"
                        aria-expanded="false" aria-haspopup="true"
                        x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()"
                        @keydown.arrow-down.prevent="onArrowDown()">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full"
                            src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                            alt="">
                        </button>
                    </div>

                    

                    </div>
                </div>
                </div>
            </div>
            </div>

            
        </nav>

        <!-- Page heading -->
        <header class="bg-gray-50 py-8">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 xl:flex xl:items-center xl:justify-between">
            <div class="min-w-0 flex-1">
            <nav class="flex" aria-label="Breadcrumb">
            <ol role="list" class="flex items-center space-x-4">
                <li>
                <div>
                <a href="#" class="text-sm font-medium text-gray-500 hover:text-gray-700">Home</a>
                </div>
                </li>
                <li>
                <div class="flex items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-gray-400"
                x-description="Heroicon name: mini/chevron-right"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                    clip-rule="evenodd"></path>
                </svg>
                <a href="#"
                class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Destinations</a>
                </div>
                </li>
            </ol>
            </nav>
            <h1
            class="mt-2 text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
            Explore the World</h1>
            <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-8">
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                x-description="Heroicon name: mini/briefcase" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                d="M6 3.75A2.75 2.75 0 018.75 1h2.5A2.75 2.75 0 0114 3.75v.443c.572.055 1.14.122 1.706.2C17.053 4.582 18 5.75 18 7.07v3.469c0 1.126-.694 2.191-1.83 2.54-1.952.599-4.024.921-6.17.921s-4.219-.322-6.17-.921C2.694 12.73 2 11.665 2 10.539V7.07c0-1.321.947-2.489 2.294-2.676A41.047 41.047 0 016 4.193V3.75zm6.5 0v.325a41.622 41.622 0 00-5 0V3.75c0-.69.56-1.25 1.25-1.25h2.5c.69 0 1.25.56 1.25 1.25zM10 10a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V11a1 1 0 00-1-1H10z"
                clip-rule="evenodd"></path>
                <path
                d="M3 15.055v-.684c.126.053.255.1.39.142 2.092.642 4.313.987 6.61.987 2.297 0 4.518-.345 6.61-.987.135-.041.264-.089.39-.142v.684c0 1.347-.985 2.53-2.363 2.686a41.454 41.454 0 01-9.274 0C3.985 17.585 3 16.402 3 15.055z">
                </path>
                </svg>
                Trips
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                x-description="Heroicon name: mini/map-pin" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 002.273 1.765 11.842 11.842 0 00.976.544l.062.029.018.008.006.003zM10 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z"
                clip-rule="evenodd"></path>
                </svg>
                Worldwide
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                x-description="Heroicon name: mini/currency-dollar" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path
                d="M10.75 10.818v2.614A3.13 3.13 0 0011.888 13c.482-.315.612-.648.612-.875 0-.227-.13-.56-.612-.875a3.13 3.13 0 00-1.138-.432zM8.33 8.62c.053.055.115.11.184.164.208.16.46.284.736.363V6.603a2.45 2.45 0 00-.35.13c-.14.065-.27.143-.386.233-.377.292-.514.627-.514.909 0 .184.058.39.202.592.037.051.08.102.128.152z">
                </path>
                <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-6a.75.75 0 01.75.75v.316a3.78 3.78 0 011.653.713c.426.33.744.74.925 1.2a.75.75 0 01-1.395.55 1.35 1.35 0 00-.447-.563 2.187 2.187 0 00-.736-.363V9.3c.698.093 1.383.32 1.959.696.787.514 1.29 1.27 1.29 2.13 0 .86-.504 1.616-1.29 2.13-.576.377-1.261.603-1.96.696v.299a.75.75 0 11-1.5 0v-.3c-.697-.092-1.382-.318-1.958-.695-.482-.315-.857-.717-1.078-1.188a.75.75 0 111.359-.636c.08.173.245.376.54.569.313.205.706.353 1.138.432v-2.748a3.782 3.782 0 01-1.653-.713C6.9 9.433 6.5 8.681 6.5 7.875c0-.805.4-1.558 1.097-2.096a3.78 3.78 0 011.653-.713V4.75A.75.75 0 0110 4z"
                clip-rule="evenodd"></path>
                </svg>
                $500 – $5000
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400"
                x-description="Heroicon name: mini/calendar" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                clip-rule="evenodd"></path>
                </svg>
                Available until December 31, 2023.
            </div>
            </div>
            </div>
            
            </div>
        </header>


        @livewire('tab-switcher')
       
        <div class=" p-6  shadow-md  flex flex-col items-center bg-gray-100">
            <div class="text-center my-6">
              <h2 class="text-2xl font-bold text-gray-800">Más opciones para tu viaje</h2>
              <p class="text-sm text-gray-600">Acumula <span class="font-semibold">Millas LATAM Pass</span> y <span class="font-semibold">Puntos Calificables</span></p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 w-11/12 max-w-6xl">
              <!-- Carta 1 -->
              <div class="bg-pink-100 rounded-lg shadow-md p-6 flex flex-col justify-between h-auto">
                <div>
                  <span class="bg-pink-200 text-pink-800 text-sm font-semibold px-2 py-1 rounded">Paquetes</span>
                  <h3 class="text-xl font-bold text-gray-800 mt-4">Escoge un paquete diseñado para ti</h3>
                  <p class="text-sm text-gray-600 mt-2">Acumula millas</p>
                </div>
                <div class="mt-4">
                  <a href="#" class="text-pink-600 font-semibold hover:underline">Comprar un paquete &rarr;</a>
                  <img src="{{asset('images/welcome/image1.png')}}" alt="Hoteles" class="mt-4 w-full h-auto object-cover">
                </div>
                <p class="text-xs text-gray-500 mt-4">Powered by <strong>Despegar</strong></p>
              </div>
          
              <!-- Carta 2 -->
              <div class="bg-yellow-100 rounded-lg shadow-md p-6 flex flex-col justify-between h-auto">
                <div>
                  <span class="bg-yellow-200 text-yellow-800 text-sm font-semibold px-2 py-1 rounded">Hoteles</span>
                  <h3 class="text-xl font-bold text-gray-800 mt-4">Encuentra tu descanso en cualquier lugar</h3>
                  <p class="text-sm text-gray-600 mt-2">Acumula millas</p>
                </div>
                <div class="mt-4 flex-grow">
                  <a href="#" class="text-yellow-600 font-semibold hover:underline">Reservar alojamiento &rarr;</a>
                  <img src="{{asset('images/welcome/image2.png')}}" alt="Hoteles" class="mt-4 w-full h-auto object-cover">
                </div>
                <p class="text-xs text-gray-500 mt-4">Powered by <strong>Booking.com</strong></p>
              </div>
              
          
              <!-- Carta 3 -->
              <div class="bg-green-100 rounded-lg shadow-md p-6 flex flex-col justify-between h-auto">
                <div>
                  <span class="bg-green-200 text-green-800 text-sm font-semibold px-2 py-1 rounded">Carros</span>
                  <h3 class="text-xl font-bold text-gray-800 mt-4">Ten un carro esperándote en tu próximo destino</h3>
                  <p class="text-sm text-gray-600 mt-2">Acumula millas</p>
                </div>
                <div class="mt-4">
                  <a href="#" class="text-green-600 font-semibold hover:underline">Alquilar un carro &rarr;</a>
                  <img src="{{asset('images/welcome/image3.png')}}" alt="Hoteles" class="mt-4 w-full h-auto object-cover">
                </div>
                <p class="text-xs text-gray-500 mt-4">Powered by <strong>Rentalcars.com</strong></p>
              </div>
          
              <!-- Carta 4 -->
              <div class="bg-blue-100 rounded-lg shadow-md p-6 flex flex-col justify-between h-auto">
                <div>
                  <span class="bg-blue-200 text-blue-800 text-sm font-semibold px-2 py-1 rounded">Asistencia en viaje</span>
                  <h3 class="text-xl font-bold text-gray-800 mt-4">Viaja con tranquilidad y obtén cobertura donde estés</h3>
                  <p class="text-sm text-gray-600 mt-2">Acumula millas</p>
                </div>
                <div class="mt-4">
                  <a href="#" class="text-blue-600 font-semibold hover:underline">Cotizar asistencia &rarr;</a>
                  <img src="{{asset('images/welcome/image4.png')}}" alt="Hoteles" class="mt-4 w-full h-auto object-cover">
                </div>
                <p class="text-xs text-gray-500 mt-4">Powered by <strong>Assist Card</strong></p>
              </div>
            </div>
        </div>
          
        @livewireScripts

        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    </body>
</html>
