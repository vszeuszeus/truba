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
                Добавление товара
            </h3><br><br>
            @include('common.errors')
            @include('common.session_message')
            <form method="post" action="{{url('/admin/product/store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="input-field">
                    <input id="tovar_name" name="tovar_name" type="text"/>
                    <label style="color:#1a4774;" for="tovar_name">Наименование товара</label>
                </div>

                <label style="color:#1a4774;">Категория товара:</label>
                <select style="display:block; border:1px solid black;" id="tovar_category" name="tovar_category" >
                    <option value="" disabled selected>Выберите категорию</option>
                    @foreach($categories as $tovar_category)
                        <option value="{{$tovar_category->id}}">{{$tovar_category->name}}</option>
                    @endforeach
                </select><br>

                <div id="tovar_podcategories" class="input-field">

                </div>

                <div class="file-field input-field">
                    <div class="btn">
                        <span>Выбрать файл</span>
                        <input name="image" type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Изображение товара">
                    </div>
                </div>
                <br>
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea" name="description"></textarea>
                    <label for="textarea1">Описание товара</label>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Добавить
                    <i class="material-icons right">add</i>
                </button>

                <?php print "<script>var categories = " . $categories . ";</script>"; ?>
            </form>
        </div>
    </section>
@endsection



