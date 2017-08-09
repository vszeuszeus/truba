@extends('pages.tovars')
@section('section_products')
    <h3>Категория: {{$tovar_category->name}}</h3>
    @foreach($tovar_category->tovar_podcategories as $category)
        <div><a href="{{url('products/'.$tovar_category->id.'/'.$category->id)}}">{{$category->name}}</a></div>
    @endforeach
    <p>Описание:</p>
    <p>{{$tovar_category->description}}</p>
@endsection