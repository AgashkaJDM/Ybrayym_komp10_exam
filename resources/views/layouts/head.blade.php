<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nokat News</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
<style>
        header,
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background-color: rgb(255, 111, 39);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding: 10px 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }


        body {
            padding-top: 80px;
        }
    </style>
    @stack('styles')

</head>

<body>
    <!-- Include Navbar  -->
    @include('partials.navbar')

    <!-- Esasy kontent -->
    @yield("main-content")
    @stack('scripts')
</body>

</html>