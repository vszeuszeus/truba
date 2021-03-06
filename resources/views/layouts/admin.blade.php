<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Панель администратора</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/admin/libs.min.css')}}">
    <link rel="stylesheet" href="{{url('css/admin/style.min.css')}}">
    <title>Project</title>
</head>
<body>
    <div class="wrapper_admin">
        <header class="header_admin">
            <div class="logo_admin">
                <img src="{{secure_asset('build/img/admin/logo.png')}}" alt="logo">
            </div>
            <div class="top_navigation_header">
                <h2 class="title_page_admin">Панель Администратора<br>
                </h2>
                <div class="setings_admin">
                    <a data-activates='setings' class="btn_admin_header dropdown-button-header btn-floating btn-large waves-effect waves-light red"><i class="large material-icons">settings</i></a>
                    <ul id='setings' class='dropdown-content list_setings_admin'>
                        <li><a href="{{url('/logout')}}">Выйти</a></li>
                    </ul>
                </div>
            </div>
        </header>
        @yield('content')
    </div>

    <!-- Scripts -->
    <!-- Scripts -->
    <script src="{{url('js/admin/libs.min.j')}}s"></script>
    <script src="{{url('js/admin/common.js')}}"></script>

</body>
</html>
