<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" />
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('static/lib/animate/animate.min.css') }}">
</head>

<body>
    <div id="app">
        <app></app>
    </div>

    <script>
        @php
            $dataUrl = [
                'login' => route('login'),
                'logout' => route('logout'),
                'foodList' => route('food.list'),
                'foodCreate' => route('food.create'),
                'foodShow' => route('food.show'),
                'foodUpdate' => route('food.update'),
                'galleryCreate' => route('gallery.create'),
                'galleryList' => route('gallery.list'),
                'galleryShow' => route('gallery.show'),
                'galleryUpdate' => route('gallery.update')
            ];
            $auth = [
                'userLogin' => auth()->check() ? auth()->user() : false,
            ];
        @endphp
        window.auth = @json($auth);
        window.dataUrl = @json($dataUrl);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('static/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('static/js/main.js') }}"></script>
</body>

</html>
