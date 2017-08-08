<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{secure_asset(elixir('css/product.css'))}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app" class="page">
      <!-- Запуск Vue элемента -->
      <!-- <example></example> -->

        @yield('test')



    </div>

    <!-- Scripts -->
    <script src="{{secure_asset(elixir('js/app_libs.js'))}}"></script>
    <script src="{{secure_asset(elixir('js/app.js'))}}"></script>
    <script src="{{secure_asset(elixir('js/app_common.js'))}}"></script>
</body>
</html>
