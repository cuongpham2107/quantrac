<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MF4DZVH');</script>
    <link rel="stylesheet" href="{{asset('assets/css/utilities.css')}}">
    <title>Hello, world!</title>
    <link href="//vjs.zencdn.net/7.10.2/video-js.min.css" rel="stylesheet">
    <script define src="//vjs.zencdn.net/7.10.2/video.min.js"></script>
    <style>
        div#my-player {
            width: 100%;
            margin-bottom: 17px;
            border-radius: 10px;
        }
    </style>
    <link rel="stylesheet" href="{{asset('assets/css/apexcharts.css')}}">
    <script type="text/javascript" async=""
            src="https://www.googletagmanager.com/gtag/js?id=G-M0L06YFZNL&l=dataLayer&cx=c"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-MF4DZVH"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
</head>

<body>
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    
    @if(Auth::user()->quyen == 'admin')
        @include('frontend.layout.navbar')
    @endif
    <div class="flex-lg-1 h-screen overflow-y-lg-auto">
        @include('frontend.layout.header')

        @yield('content')
    </div>
</div>


<script src="{{asset('assets/js/main.js')}}"></script>
{{-- <script>
    var player = videojs('my-player', options, function onPlayerReady() {
        videojs.log('Your player is ready!');

        // In this context, `this` is the player that was created by Video.js.
        this.play();

        // How about an event listener?
        this.on('ended', function () {
            videojs.log('Awww...over so soon?!');
        });
    });
</script> --}}

</body>

</html>
