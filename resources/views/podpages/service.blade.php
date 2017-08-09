@extends('main_page')
@section('sections')
    <div class="wrapper row2">
        <div id="breadcrumb" class="hoc clear">
            <!-- ################################################################################################ -->
            <ul>
                <li><a href="{{url('/')}}">Главная</a></li>
                <li><a href="{{url('/services')}}">Услуги</a></li>
                <li><a href="{{url('/services/'.$service_category->id)}}">{{$service_category->name}}</a></li>
                <li><a href="{{url('/services/'.$service_category->id.'/'.$service->id)}}">{{$service->name}}</a></li>
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
                            <li><a @if($category->id == $service_category->id) class="active_url" @endif  href="{{url('/services/'.$category->id)}}">{{$category->name}}</a>
                                @if(count($category->services) && ($category->id == $service_category->id))
                                    <ul>
                                        @foreach($category->services as $service_for)
                                            <li><a @if($service_for->id == $service->id) class="active_url" @endif href="{{url('/services/'.$category->id.'/'.$service_for->id)}}">{{$service_for->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="content three_quarter">
                <div>
                    <img src="{{asset($service->path)}}"/>
                    <p>Наименование уcлуги: {{$service->name}}</p>
                    <p>Описание:</p>
                    <p>
                        {{$service->description}}
                    </p>
                </div>
            </div>
        </main>
    </div>
@endsection