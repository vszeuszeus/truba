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
                        @foreach($categories as $category)
                            <li><a href="{{url('/products/'.$category->id)}}">{{$category->name}}</a>
                                @if(count($category->tovar_podcategories))
                                    <ul>
                                        @foreach($category->tovar_podcategories as $podcategory)
                                            <li><a href="{{url('/products/'.$category->id.'/'.$podcategory->id)}}">{{$podcategory->name}}</a>
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
                </nav>
            </div>
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <div class="content three_quarter">
            </div>
        </main>
    </div>
@endsection