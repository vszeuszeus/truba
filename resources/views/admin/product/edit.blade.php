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
            </h3><br>
            @include('common.errors')
            @include('common.session_message')
            <form method="post" action="{{url('/admin/product/update/'.$tovar->id)}}" enctype="multipart/form-data">

                <img style="width:200px; height:200px;" @if($tovar->path) src="{{asset('storage/app/public/products/thumbs/'.$tovar->path)}}" @else src="{{asset('public/img/no-avatar.png')}}" @endif/><br><br>
                <div class="input-field">
                    <input id="tovar_name" name="name" type="text" value="{{$tovar->name}}"/>
                    <label for="tovar_name">Наименование товара</label>
                </div>
                {{csrf_field()}}

                <label style="color:#1a4774;">Категория товара:</label>
                <select style="display:block; border:1px solid black;" id="tovar_category" name="tovar_category" >
                    <option value="" disabled selected>Выберите категорию</option>
                    @foreach($categories as $tovar_category)
                        <option @if($tovar_category->id == $tovar->tovar_podcategory->tovar_category->id) selected @endif value="{{$tovar_category->id}}">{{$tovar_category->name}}</option>
                    @endforeach
                </select><br>

                <div id="tovar_podcategories" class="input-field">
                    <select name="tovar_podcategory" style="display:block; border:1px solid black;">
                        @foreach($categories as $tovar_category2)
                            @if($tovar_category2->id == $tovar->tovar_podcategory->tovar_category->id)
                                @foreach($tovar_category2->tovar_podcategories as $tovar_podcategory)
                                    <option @if($tovar_podcategory->id == $tovar->tovar_podcategory_id) selected @endif value="{{$tovar_podcategory->id}}">{{$tovar_podcategory->name}}</option>
                                @endforeach
                            @endif
                        @endforeach
                    </select>
                </div><br>


                <div class="file-field input-field">
                    <div class="btn">
                        <span>Выбрать файл</span>
                        <input name="image" type="file"/>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Изображение товара">
                    </div>
                </div>
                <br>
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea" name="description">{{$tovar->description}}</textarea>
                    <label for="textarea1">Описание товара</label>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Сохранить
                    <i class="material-icons right">save</i>
                </button>

                <?php print "<script>var categories = " . $categories . ";</script>"; ?>
            </form>
        </div>
    </section>
@endsection



