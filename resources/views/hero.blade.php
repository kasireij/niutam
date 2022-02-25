<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NiuTAM</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .clockStyle {
            font-size: 120px;
            margin: 0 150px;
            padding: 10px;
            color: #000000;
            width: 900px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ route('dashboard') }}">Admin Dashboard</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
        @endif

        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                <a class="hero-brand" href="index.html" title="Home"><img alt="Bell Logo" src="assets/img/logo.png"></a>
                </div>
            </div>
    
            <div class="col-md-12">
                <h1>
                A theme with personality
                </h1>
    
                <p class="tagline">
                This is a powerful theme with some great features that you can use in your future projects.
                </p>
                <a class="btn btn-full scrollto" href="#about">Get Started Now</a>
                <button type="button" class="btn btn-primary btn-lg">Large button</button>
            </div>
        </div>

        <div class="content">
            <div class="title m-b-md">
                <div class="clockStyle" id="clock"></div>
            </div>

            <div class="links">
                <a href="#"></a>
                <a href="#"></a>
                <a href="#">
                    @if (Route::has('login'))
                    <div>
                        @auth
                        <a href="{{ route('dashboard') }}">Admin Dashboard</a>
                        @else
                        <a href="{{ route('login') }}">Login</a>
                        @endauth
                    </div>
                    @endif
                </a>
                <a href="#"></a>
                <a href="#"></a>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        setInterval(displayclock, 500);

        function displayclock() {
            var time = new Date();
            var hrs = time.getHours();
            var min = time.getMinutes();
            var sec = time.getSeconds();
            var en = 'AM';
            if (hrs > 12) {
                en = 'PM';
            }
            if (hrs > 12) {
                hrs = hrs - 12;
            }
            if (hrs == 0) {
                hrs = 12;
            }
            if (hrs < 10) {
                hrs = '0' + hrs;
            }
            if (min < 10) {
                min = '0' + min;
            }
            if (sec < 10) {
                sec = '0' + sec;
            }
            document.getElementById("clock").innerHTML = hrs + ':' + min + ':' + sec + ' ' + en;
        }
    </script>
</body>

</html>


