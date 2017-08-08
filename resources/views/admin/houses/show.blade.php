@extends('layouts.admin')

@section('content')
    <nav class="nav_admin">
        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header btn_admin active active-admin"><i class="material-icons">home</i>Коттеджи</div>
                <div class="collapsible-body">
                    <p class="collapsible_section">
                        <a href="{{secure_url('/admin/houses/show')}}"><span>Все коттеджи</span></a><span class="collapsible_section_number">{{$count_houses}}</span>
                    </p>
                    <p class="collapsible_section">
                        <a href="{{secure_url('/admin/houses/show?list=const_true')}}"><span>Построенные</span></a><span class="collapsible_section_number">{{$const_true_count}}</span>
                    </p>
                    <p class="collapsible_section">
                        <a href="{{secure_url('/admin/houses/show?list=const_false')}}"><span>Не построенные</span></a><span class="collapsible_section_number">{{$const_false_count}}</span>
                    </p>
                    <p class="collapsible_section">
                        <a href="{{secure_url('/admin/houses/show?list=avail_true')}}"><span>Проданные</span></a><span class="collapsible_section_number">{{$avai_true_count}}</span>
                    </p>
                    <p class="collapsible_section">
                        <a href="{{secure_url('/admin/houses/show?list=avail_false')}}"><span>Не проданные</span></a><span class="collapsible_section_number">{{$avai_false_count}}</span>
                    </p>
                </div>
            </li>
        </ul>
        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header btn_admin "><i class="material-icons">assignment</i>Заявки</div>
                <div class="collapsible-body">
                    <p class="collapsible_section">
                        <a href="{{secure_url('/admin/requests/show')}}"><span>Все заявки</span></a><span class="collapsible_section_number">{{$user_request_count}}</span>
                    </p>
                    <p class="collapsible_section">
                        <a href="{{secure_url('/admin/requests/show?list=ended')}}"><span>Завершенные</span></a><span class="collapsible_section_number">{{$request_ended}}</span>
                    </p>
                    <p class="collapsible_section">
                        <a href="{{secure_url('/admin/requests/show?list=noended')}}"><span>Не завершенные</span></a><span class="collapsible_section_number">{{$request_noended}}</span>
                    </p>
                </div>
            </li>
        </ul>
        <a  href="{{secure_url('/admin/users/show')}}" class="btn_admin waves-effect waves-light btn"><i class="material-icons">group</i>Пользователи</a>
    </nav>

    <section class="content_admin">
        <div class="frame_admin">
            <h3 class="title_frame_admin">
                {{$title_section or 'Все коттеджи'}}
            </h3>
            <p>{{$title_description or ''}}</p>
            <table style="width: 100%;" cellpadding="30">
                <tbody>
                <tr class="header_tr_admin">
                    <td>№</td>
                    <td>Адрес</td>
                    <td>Статус готовности</td>
                    <td>Процент готовности</td>
                    <td>Статус доступности</td>
                    <td>Функции</td>
                </tr>
                @foreach($houses as $house)
                    <tr>
                        <td><form id="form-{{$house->id}}" method="POST" action="{{secure_url('admin/houses/save/'.$house->id)}}"></form>{{$house->id}}</td>
                        <td>{{$house->address}}</td>
                        <td>
                            <select name="constraction_status" form="form-{{$house->id}}">
                                @foreach($cons_stat as $cons)
                                    <option @if($house->constraction_status_id === $cons->id) selected @endif>{{$cons->name}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>{{$house->constraction_percent}}%</td>
                        <td>
                            <select name="availability_status" form="form-{{$house->id}}">
                                @foreach($avai_stats as $avai)
                                    <option @if($house->availability_status_id === $avai->id) selected @endif>{{$avai->name}}</option>
                                @endforeach
                            </select></td>
                        <td>
                             <button form="form-{{$house->id}}" type="submit" class="table_button_admin" >Сохранить</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection



