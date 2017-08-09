@extends('pages.services')
@section('section_products')
    <h3>Подкатегория: {{$service_category->name}}</h3>
    @foreach($service_category->services as $service)
        <div><a href="{{url('services/'.$service_category->id.'/'.$service->id)}}">{{$service->id}}</a></div>
    @endforeach
    <p>Описание:</p>
    <p>{{$service_category->description}}</p>
@endsection