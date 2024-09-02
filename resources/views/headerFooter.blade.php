<!DOCTYPE html>
<html>
    <head>
        <meta charset=""UTF-8>
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        {{-- <meta name="wiewport" content="width-device-width, initial-scale" --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <style>
            #footer{
                width: 100%;
                height: auto;
                padding-top: 20px;
                padding-bottom: 20px;
                background-color: #AD49E1;
                color: white;
            }

        </style>
    </head>

    <body>

        <!-- Navbar -->
    <div class="navbar">
        <div class="logo">FebWeb</div>
        <div>
            <a href="/home">Home</a>
            <a href="/about">About</a>
            <a href="/dashboard">Dashboard</a>
        </div>
    </div>

        @yield('content')

        <div id="footer">
            <h1>INI FOOTER</h1>
        </div>

        <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>