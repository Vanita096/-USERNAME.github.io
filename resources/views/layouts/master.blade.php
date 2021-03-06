{{-- Master Template --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ optional(request()->tenant())->name ?: config('app.name') }} &bull; @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="bg-light">
    @yield('content')
</body>

<!-- Scripts -->
<script src="{{ asset('/js/app.js') }}"></script>
@stack('scripts')

</html>