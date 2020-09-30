<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bemo</title>

    <meta name="robots" content="noindex">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

    <!-- Include Quill stylesheet -->
    <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">

    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>

    <meta name='description' content={config.siteDescription}/>
    <meta name="image" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://www.retainable.io/assets/retainable/rss-embed/retainable-rss-embed.js"></script>
    <link rel="icon" href=""></link>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <router-view :main_body="'{{$main_body}}'"></router-view>
    </div>
</body>
</html>
