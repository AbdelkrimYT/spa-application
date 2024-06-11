<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
  <header>

    @include('admin.includes.mainmenu')
    @include('admin.includes.submenu')

  </header>

  <main class="mx-auto p-4">

    @yield('main')

  </main>

</body>

</html>
