@extends('main_page')
@section('sections')
    <div class="wrapper row2">
        <div id="breadcrumb" class="hoc clear">
            <!-- ################################################################################################ -->
            <ul>
                <li><a href="{{url('/')}}">Главная</a></li>
                <li><a href="{{url('/services')}}">Услуги</a></li>
            </ul>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
        <main class="hoc container clear">
            <div class="sidebar one_quarter first">
                <!-- ################################################################################################ -->
                <h6>Категории услуг</h6>
                <nav class="sdb_holder">
                    <ul>
                        @foreach($category_serv as $category)
                            <li><a href="{{url('/services/'.$category->id)}}">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="content three_quarter">
                <h3>Все категории услуг</h3>
                @foreach($category_serv as $category)
                    <div><a href="{{url('services/'.$category->id)}}">{{$category->name}}</a></div>
                @endforeach
            </div>
        </main>
    </div>
@endsection