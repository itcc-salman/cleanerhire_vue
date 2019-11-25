@php
$config = [
    'appName' => config('app.name'),
    'locale' => $locale = app()->getLocale(),
    'locales' => config('app.locales')
];
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

</head>
<body>
  <div id="app"></div>

    {{-- Global configuration object --}}
    <script>
        window.config = @json($config);
    </script>
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script >
        $(window).on("scroll", function() {
            if($(window).scrollTop() > 42) {
                $(".navbar-default").addClass("active");
                $(".navbar-toggle").addClass("active");
                $(".logo").addClass("active");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $(".navbar-default").removeClass("active");
                $(".navbar-toggle").removeClass("active");
                $(".logo").removeClass("active");
            }
        });
    </script>
    <script src="{{ asset('front/js/aos.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ mix('dist/js/app.js') }}"></script>
</body>
</html>
