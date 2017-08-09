@extends('main_page')
@section('sections')
    <div class="wrapper row2">
        <div id="breadcrumb" class="hoc clear">
            <!-- ################################################################################################ -->
            <ul>
                <li><a href="{{url('/')}}">Главная</a></li>
                <li><a href="{{url('/products')}}">Товары</a></li>
                <li><a href="{{url('/products/'.$tovar_category->id)}}">{{$tovar_category->name}}</a></li>
                <li><a href="{{url('/products/'.$tovar_category->id.'/'.$tovar_podcategory->id)}}">{{$tovar_podcategory->name}}</a></li>
                <li><a href="{{url('/products/'.$tovar_category->id.'/'.$tovar_podcategory->id.'/'.$tovar->id)}}">{{$tovar->name}}</a></li>

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
                            <li><a @if($category->id == $tovar_category->id) class="active_url" @endif href="{{url('/products/'.$category->id)}}">{{$category->name}}</a>
                                @if(count($category->tovar_podcategories) && ($category->id == $tovar_category->id))
                                    <ul>
                                        @foreach($category->tovar_podcategories as $podcategory)
                                            <li><a @if($podcategory->id == $tovar_podcategory->id) class="active_url" @endif href="{{url('/products/'.$category->id.'/'.$podcategory->id)}}">{{$podcategory->name}}</a>
                                                @if(count($podcategory->tovars) && ($podcategory->id == $tovar_podcategory->id))
                                                    <ul>
                                                        @foreach($podcategory->tovars as $tovarf)
                                                            <li><a @if($tovarf->id == $tovar->id) class="active_url" @endif href="{{url('/products/'.$category->id.'/'.$podcategory->id.'/'.$tovarf->id)}}">{{$tovarf->name}}</a></li>
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
                <div>
                    <img src="{{asset($tovar->path)}}"/>
                    <p>Наименование товара:{{$tovar->name}}</p>
                    <p>Описание:</p>
                    <p>
                        {{$tovar->description}}
                    </p>
                </div>
            </div>
        </main>
    </div>

@endsection