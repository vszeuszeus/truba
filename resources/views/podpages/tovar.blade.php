@extends('pages.tovars')
@section('section_products')
    <div>
        <img src="{{asset($tovar->path)}}"/>
        <p>Наименование товара:{{$tovar->name}}</p>
        <p>Описание:</p>
        <p>
            {{$tovar->description}}
        </p>
    </div>
@endsection