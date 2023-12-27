<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Digital Library</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>  
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="">
                <h1 class="text-center font-weight-bold">E-Library</h1>
                </div>
                <hr>
                <a href="/create"><button class="btn btn-primary">Create</button></a> 
                <a href="/read"><button class="btn btn-primary">Read</button></a> 
                <hr>
        @yield('content')
            </div>
        </div>
        <footer>
            <p class="text-center">&copy; <a href=#>kriswanti yohana</a>. 2024</p>
        </footer>
    </div>

</body>
</html>