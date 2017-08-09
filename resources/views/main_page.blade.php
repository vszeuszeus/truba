<!DOCTYPE html>
<html>
<head>

    <title>Trubocompany</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset(elixir('css/product.css'))}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body id="top">

    @include('main_page.elements.preload')

    <div class="wrapper row0">
        <div id="topbar" class="hoc clear">
            <!-- ################################################################################################ -->
            <nav id="mainav" class="fl_left">
                <ul class="clear">
                    <li class="active"><a href="{{url('/')}}">ДОМОЙ</a></li>
                    <li><a class="drop" href="{{url('products')}}">ТОВАРЫ</a>
                        <ul>
                        @foreach($categories as $category)
                        <li><a class="drop" href="{{url('/products/'.$category->id)}}">{{$category->name}}</a>
                            @if(count($category->tovar_podcategories))
                                <ul>
                                    @foreach($category->tovar_podcategories as $podcategory)
                                        <li><a class="drop" href="{{url('/products/'.$category->id.'/'.$podcategory->id)}}">{{$podcategory->name}}</a>
                                            @if(count($podcategory->tovars))
                                                <ul>
                                                    @foreach($podcategory->tovars as $tovar)
                                                        <li><a href="{{url('/products/'.$category->id.'/'.$podcategory->id.'/'.$tovar->id)}}">{{$tovar->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                        @endforeach
                        </ul>
                    <li><a class="drop" href="{{url('products')}}">УСЛУГИ</a>
                        <ul>
                            <li><a class="drop" href="">Услуга 1</a>
                                <ul>
                                    <li href="" ><a>Подуслуга</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=""><a href="#obr_link">Обратная связь</a></li>
                </ul>
            </nav>
            <!-- ################################################################################################ -->
            <div class="fl_right">
                <ul class="faico clear">
                    <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <!-- ################################################################################################ -->
            <div id="logo" class="fl_left">
                <h1><a href="index.html">Trubocompany</a></h1>
            </div>
            <div id="quickinfo" class="fl_right">
                <ul class="nospace inline">
                    <li><strong>Телефон:</strong><br>
                        + 7 (771) 977 0333</li>
                    <li><strong>Адрес:</strong><br>
                        г.Астана, ул. Сарыарка, д.24</li>
                </ul>
            </div>
            <!-- ################################################################################################ -->
        </header>
    </div>


    @yield('sections')
    <!-- Scripts -->

    <div class="wrapper row3">
        <div class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="group">
                <section class="one_half">
                    <h6 class="heading font-x3 btmspace-50">Форма обратной связи</h6>
                    <p>Оставьте нам свои контактные данные, мы Вам перезвоним в этот же день.Оставьте нам свои контактные данные, мы Вам перезвоним в этот же день.</p>
                    <p class="btmspace-30">Оставьте нам свои контактные данные, мы Вам перезвоним в этот же день.</p>
                    <form id="newsletter" method="post" action="#">
                        <fieldset>
                            <legend>ФОРМА ОБРАТНОЙ СВЯЗИ:</legend>
                            <input class="btmspace-15" type="text" value="" placeholder="Name" name="name">
                            <input class="btmspace-15" type="text" value="" placeholder="Email" name="email">
                            <button type="submit" value="submit">Отправить</button>
                        </fieldset>
                    </form>
                </section>
            </div>
            <!-- ################################################################################################ -->
            <div class="clear"></div>
        </div>
    </div>
    <div class="wrapper row4">
        <footer id="footer" class="hoc clear">
            <!-- ################################################################################################ -->
            <div class="one_third first">
                <h6 class="title">Небольшой текст</h6>
                <p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet.</p>
                <p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet.</p>
            </div>
            <div class="one_third">
                <h6 class="title">НАШИ КОНТАКТЫ</h6>
                <ul class="nospace linklist contact">
                    <li><i class="fa fa-map-marker"></i>
                        <address>
                            г. Астана, ул. Сарыарка, д. 24, 010000
                        </address>
                    </li>
                    <li><i class="fa fa-phone"></i> +7 (771) 977 0 333<br>
                        +7 (771) 977 0333</li>
                    <li><i class="fa fa-fax"></i>  +7 (771) 977 0333</li>
                    <li><i class="fa fa-envelope-o"></i> stanis.homenko@gmail.com</li>
                </ul>
            </div>
            <div style="text-align: right;" class="one_third">
                <h6 class="title">КАРТА САЙТА</h6>
                <ul style="text-align:right;" class="nospace linklist2">
                    <li style="padding-bottom:6px;"><a href="#">Главная</a></li>
                    <li style="padding-bottom:6px;"><a href="#">Продукты</a></li>
                    <li style="padding-bottom:6px;"><a href="#">Услуги</a></li>
                    <li style="padding-bottom:6px;"><a href="#">Преимущества</a></li>
                    <li style="padding-bottom:6px;"><a href="#">Команда</a></li>
                    <li style="padding-bottom:6px;"><a href="#">Обратная связь</a></li>
                    <li style="padding-bottom:6px;"><a href="#">Скачать прайс цен</a></li>
                </ul>
            </div>
            <!-- ################################################################################################ -->
        </footer>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div id="obr_link" class="wrapper row5">
        <div id="copyright" class="hoc clear">
            <!-- ################################################################################################ -->
            <p class="fl_left">Copyright &copy; 2017 - Все права защищены - <a href="#">NamTruba.kz</a></p>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->




    <script src="{{asset(elixir('js/app_libs.js'))}}"></script>
    <script src="{{asset(elixir('js/app_common.js'))}}"></script>
</body>
</html>


