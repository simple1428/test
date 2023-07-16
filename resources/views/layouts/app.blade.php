<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<style type="text/css">
    *::-webkit-scrollbar {
        display: none;
    }
</style>

<body class="font-['roboto']">
    <div class="relative ">

        @include('template.home.header')
        @yield('content')
        @include('template.home.navbar')

    </div>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</body>

</html>