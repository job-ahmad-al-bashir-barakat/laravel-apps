<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Chat Platform</title>
    <meta name="description" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Markazi+Text:400,500,600,700&amp;subset=arabic,latin-ext,vietnamese"
          rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('chat-assets/css/lib/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
    <!-- Swipe core CSS -->
    <link href="{{ asset('chat-assets/css/swipe.min.css') }}" type="text/css" rel="stylesheet">
    <!-- Favicon -->
    <link href="{{ asset('chat-assets/img/favicon.png') }}" type="image/png" rel="icon">
    <!-- Style -->
    <style>
        body {
            font-family: CircularStd, 'Markazi Text', sans-serif;
        }
    </style>
</head>
<body>
<div id="app">
    @yield('content')
</div>
<!-- Bootstrap/Swipe core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('chat-assets/js/vendor/jquery-slim.min.js') }}"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="{{ asset('chat-assets/js/vendor/jquery-slim.min.js') }}"><\/script>')</script>
<script src="{{ asset('chat-assets/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('chat-assets/js/swipe.min.js') }}"></script>
<script src="{{ asset('chat-assets/js/bootstrap.min.js') }}"></script>
<script>
    function scrollToBottom (el) { el.scrollTop = el.scrollHeight }

    scrollToBottom(document.getElementById('content'))
</script>
<script src="{{ asset('js/chat.js') }}"></script>
</body>

</html>