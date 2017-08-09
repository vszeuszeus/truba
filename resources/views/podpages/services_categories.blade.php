@extends('pages.services')
@section('section_products')
    <h3>Все категории услуг</h3>
    @foreach($category_serv as $category)
        <div><a href="{{url('services/'.$category->id)}}">{{$category->name}}</a></div>
    @endforeach
@endsection