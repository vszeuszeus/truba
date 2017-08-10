@extends('layouts.admin')

@section('content')
    <nav class="nav_admin">
        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header btn_admin active active-admin"><i class="material-icons">home</i>Товар</div>
                <div class="collapsible-body">
                    <p class="collapsible_section">
                        <a href="{{secure_url('/admin/products/show')}}"><span>Все товары</span></a>
                    </p>
                    <p class="collapsible_section">
                        <a href="{{secure_url('/admin/product_categories/show')}}"><span>Категории товаров</span></a>
                    </p>
                    <p class="collapsible_section">
                        <a href="{{secure_url('/admin/product_podcategories/show')}}"><span>Подкатегории товаров</span></a>
                    </p>
                </div>
            </li>
        </ul>

        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header btn_admin"><i class="material-icons">home</i>Услуги</div>
                <div class="collapsible-body">
                    <p class="collapsible_section">
                        <a href="{{secure_url('/admin/services/show')}}"><span>Все услуги</span></a>
                    </p>
                    <p class="collapsible_section">
                        <a href="{{secure_url('/admin/service_categories/show')}}"><span>Категории услуг</span></a>
                    </p>
                </div>
            </li>
        </ul>

        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header btn_admin "><i class="material-icons">assignment</i>Заявки</div>
                <div class="collapsible-body">
                    <p class="collapsible_section">
                        <a href="{{secure_url('/admin/requests/show')}}"><span>Все заявки</span></a><span class="collapsible_section_number"></span>
                    </p>
                    <p class="collapsible_section">
                        <a href="{{secure_url('/admin/requests/show?list=ended')}}"><span>Завершенные</span></a><span class="collapsible_section_number"></span>
                    </p>
                    <p class="collapsible_section">
                        <a href="{{secure_url('/admin/requests/show?list=noended')}}"><span>Не завершенные</span></a><span class="collapsible_section_number"></span>
                    </p>
                </div>
            </li>
        </ul>
    </nav>

    <section class="content_admin">
        <div class="frame_admin">
            <h3 class="title_frame_admin">
                Добавление товара
            </h3>
            <p>{{$title_description or ''}}</p>
            <form method="POST" action="{{url('/admin/procuct/create')}}">
                <input name="name" placeholder="Наименование товара"/>
                <select name="tovar_category">
                    @foreach()
                    @endforeach
                </select>
            </form>
        </div>
    </section>
@endsection



