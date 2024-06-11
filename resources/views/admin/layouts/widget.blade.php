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

  <main class="h-screen flex flex-col justify-center items-center">

      @yield('main')

  </main>

  <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
