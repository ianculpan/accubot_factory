<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accu Bot Factory</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen flex-col bg-gray-50">
        <div class="py-24 my-auto flex flex-col w-full items-center">
            <h1 class="text-center text-5xl font-semibold">Accu Bot Factory</h1>
            <div class="w-1/2">
                <div class="inline-flex justify-between w-full py-4">
                    <a href="/" class="border px-4 py-2 border-gray-100 rounded-xl bg-blue-50 hover:bg-blue-100">Uploader</a>
                    <a href="/products" class="border px-4 py-2 border-gray-100 rounded-xl bg-blue-50 hover:bg-blue-100">Products</a>
                    <a href="/orders" class="border px-4 py-2 border-gray-100 rounded-xl bg-blue-50 hover:bg-blue-100">Orders</a>
                </div>
                <div class="bg-white p-6 rounded-xl border border-gray-100">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
