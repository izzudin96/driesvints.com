<!doctype html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site info -->
    <title>{{ isset($title) ? $title . ' | ' : '' }}Dries Vints</title>

    @if (isset($metaDescription))
        <meta name="description" content="{{ $metaDescription }}">
    @endif

    <!-- Favicons -->
    <meta name="msapplication-TileColor" content="#2F3238">
    <meta name="msapplication-TileImage" content="/images/touch-icon-144×144-precomposed.png'">
    <link rel="apple-touch-icon-precomposed" sizes="152×152" href="/images/touch-icon-152×152-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144×144" href="/images/touch-icon-144×144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120×120" href="/images/touch-icon-120×120-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114×114" href="/images/touch-icon-114×114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72×72" href="/images/touch-icon-72×72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="/images/touch-icon-iphone-precomposed.png" />
    <link rel="icon" sizes="32x32" href="/images/favicon-32.png">
    <link rel="shortcut icon" href="/images/favicon.ico">

    <!-- Stylsheets -->
    <link media="all" type="text/css" rel="stylesheet" href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Source+Code+Pro:400,700'>
    <link media="all" type="text/css" rel="stylesheet" href="/css/app.css">

    @if ($production)
        <!-- Google Analytics -->
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-18478762-2']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    @endif
</head>
<body>