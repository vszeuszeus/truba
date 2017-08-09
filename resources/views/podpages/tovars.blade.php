@extends('pages.tovars')
@section('section_products')
    <h3>Подкатегория: {{$tovar_podcategory->name}}</h3>
    @foreach($tovar_podcategory->tovars as $tovar)
        <div><a href="{{url('products/'.$tovar_category->id.'/'.$tovar_podcategory->id.'/'.$tovar->id)}}">{{$tovar->name}}</a></div>
    @endforeach
    <p>Описание:</p>
    <p>{{$tovar_podcategory->description}}</p>
@endsection