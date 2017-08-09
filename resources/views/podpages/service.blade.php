@extends('pages.services')
@section('section_products')
    <div>
        <img src="{{asset($service->path)}}"/>
        <p>Наименование товара:{{$service->name}}</p>
        <p>Описание:</p>
        <p>
            {{$service->description}}
        </p>
    </div>
@endsection