@extends('layouts.admin')

@section('content')
    <nav class="nav_admin">
        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header btn_admin active active-admin"><i class="material-icons">home</i>Товар
                </div>
                <div class="collapsible-body">
                    <p class="collapsible_section">
                        <a href="{{url('/admin/product/show')}}"><span>Все товары</span></a>
                    </p>
                    <p class="collapsible_section">
                        <a href="{{url('/admin/product_category/show')}}"><span>Категории товаров</span></a>
                    </p>
                    <p class="collapsible_section">
                        <a href="{{url('/admin/product_podcategory/show')}}"><span>Подкатегории товаров</span></a>
                    </p>
                </div>
            </li>
        </ul>

        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header btn_admin"><i class="material-icons">home</i>Услуги</div>
                <div class="collapsible-body">
                    <p class="collapsible_section">
                        <a href="{{url('/admin/service/show')}}"><span>Все услуги</span></a>
                    </p>
                    <p class="collapsible_section">
                        <a href="{{url('/admin/service_category/show')}}"><span>Категории услуг</span></a>
                    </p>
                </div>
            </li>
        </ul>

        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header btn_admin "><i class="material-icons">assignment</i>Заявки</div>
                <div class="collapsible-body">
                    <p class="collapsible_section">
                        <a href="{{url('/admin/requests/show')}}"><span>Все заявки</span></a><span
                                class="collapsible_section_number"></span>
                    </p>
                    <p class="collapsible_section">
                        <a href="{{url('/admin/requests/show?list=ended')}}"><span>Завершенные</span></a><span
                                class="collapsible_section_number"></span>
                    </p>
                    <p class="collapsible_section">
                        <a href="{{url('/admin/requests/show?list=noended')}}"><span>Не завершенные</span></a><span
                                class="collapsible_section_number"></span>
                    </p>
                </div>
            </li>
        </ul>
    </nav>

    <section class="content_admin">
        <div class="frame_admin">
            <h3 class="title_frame_admin">
                Все товары
            </h3>
            <a href="{{url('/admin/product/create/')}}" class="table_button_admin" >Добавить товар</a>
            <p>{{$title_description or ''}}</p>
            <table style="width: 100%;" cellpadding="30">
                <tbody>
                <tr class="header_tr_admin">
                    <td>№</td>
                    <td>Имя</td>
                    <td>Категория</td>
                    <td>Подкатегория</td>
                    <td>Функции</td>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->tovar_podcategory->tovar_category->name}}</td>
                        <td>{{$product->tovar_podcategory->name}}</td>
                        <td>
                            <a href="{{url('/admin/product/edit/'.$product->id)}}" class="table_button_admin" >Редактировать</a>
                            <a href="{{url('/admin/product/destroy/'.$product->id)}}" class="table_button_admin" >Удалить</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection



