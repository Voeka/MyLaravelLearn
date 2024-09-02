<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Laravel</title>


</head>
<body>
<header class="bg-white shadow mb-10">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            Пользователи
        </h1>
    </div>
</header>

<a href="#" class="text-indigo-600 hover:text-indigo-900 my-5 block">
    Добавить пользователя
</a>
<div style="max-width: 90%; margin: auto">@yield("content")</div>




</body>
</html>
