<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DigitalTech - @yield('titulo')</title>
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        {{-- --Comment 1-- Header with links, already checked if the user is authenticated or not. --}}
        <header class="p-5 shadow-lg md:flex md:justify-between md:items-center bg-blue-50">
            <a href="/" class="text-2xl">Digital<span class="font-bold">Tech</span></a>
            <div class="p-5">Buscador</div>
            @guest
                <div class="flex justify-between gap-3 p-5" >
                    <a class="p-3 text-sm text-white bg-indigo-600 rounded-lg" href="#">Crear Cuenta</a>
                    <a class="p-3 text-sm text-white bg-indigo-600 rounded-lg " href="#">Iniciar Sesion</a>
                </div>
            @endguest
            @auth
                <div class="flex justify-between gap-3 p-5" >
                    <a class="p-3 text-sm text-white bg-indigo-600 rounded-lg " href="#">Cerrar Sesion</a>
                </div>
            @endauth
        </header>

        {{-- --Comment 2--Here you will find all the main content of the products --}}
        <main class="container mx-auto mt-10">

            <x-titulo>{{__('Pagina Principal')}}</x-titulo> {{-- --Comment 3-- This is a component, you call it and enter the name of the title --}}
            @yield('contenido')
        </main>

        {{-- Comment 4 Top of footer, it remains to be started --}}
        <footer class="p-5 shadow-lg md:flex md:justify-between bg-blue-50">
            <a href="/" class="text-2xl">Digital<span class="font-bold">Tech</span></a>
        </footer>
    </body>
</html>
