<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,
           user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


</head>
<body class="h-screen">
<div id="app">
    <x-layout.cabecera class="h-15v">
    </x-layout.cabecera>
    @yield("menu")
    <main class="h-65v">
        @yield("contenido");
    </main>
    <x-layout.footer class="h-10v">

    </x-layout.footer>
    <script src="{{asset('js/app.js')}}"></script>
</div>
</body>
</html>
