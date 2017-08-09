@extends('pages.tovars')
@section('section_products')
    <h3>Все категории товаров</h3>
    @foreach($categories as $category)
        <div><a href="{{url('products/'.$category->id)}}">{{$category->name}}</a></div>
    @endforeach
@endsection