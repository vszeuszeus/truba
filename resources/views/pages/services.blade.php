@extends('main_page')
@section('sections')
    <div class="wrapper row2">
        <div id="breadcrumb" class="hoc clear">
            <!-- ################################################################################################ -->
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Ipsum</a></li>
                <li><a href="#">Dolor</a></li>
            </ul>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="sidebar one_quarter first">
                <!-- ################################################################################################ -->
                <h6>Категории товаров</h6>
                <nav class="sdb_holder">
                    <ul>
                        @foreach($category_serv as $category)
                            <li><a href="{{url('/services/'.$category->id)}}">{{$category->name}}</a>
                                @if(count($category->services))
                                    <ul>
                                        @foreach($category->services as $service)
                                            <li><a href="{{url('/products/'.$category->id.'/'.$service->id)}}">{{$service->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <div class="content three_quarter">
            @yield('section_products')
            </div>
        </main>
    </div>
@endsection