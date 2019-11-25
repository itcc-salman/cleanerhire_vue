@php
$config = [
    'appName' => config('app.name'),
    'locale' => $locale = app()->getLocale(),
    'locales' => config('app.locales'),
    'githubAuth' => config('services.github.client_id'),
];
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Admin{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/weather-icons/css/weather-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ mix('dist/css/app.css') }}">

    <!-- Main Style  -->
    <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}">

    <script src="{{ asset('assets/js/modernizr-custom.js') }}"></script>
</head>
<body>
  <div id="app"></div>

  {{-- Global configuration object --}}
  <script>
    window.config = @json($config);
  </script>

    <!-- inject:js -->
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bower_components/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('bower_components/autosize/dist/autosize.min.js') }}"></script>
    <!-- endinject -->

    <!-- Common Script   -->
    <script src="{{ asset('dist/js/main.js') }}"></script>
    {{-- Load the application scripts --}}
    <script src="{{ mix('dist/js/app.js') }}"></script>
</body>
</html>
