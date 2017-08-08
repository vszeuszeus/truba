@extends('layouts.admin')

@section('content')
    <nav class="nav_admin">
        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header btn_admin"><i class="material-icons">home</i>Коттеджи</div>
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
                <div class="collapsible-header btn_admin"><i class="material-icons">assignment</i>Заявки</div>
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
        <a  href="{{secure_url('/admin/users/show')}}" class="btn_admin waves-effect waves-light btn  active active-admin"><i class="material-icons">group</i>Пользователи</a>
    </nav>

    <section class="content_admin">
        <div class="frame_admin">
            <h3 class="title_frame_admin">
                Все пользователи
            </h3>
            <p></p>
            <table style="width: 100%;" cellpadding="30">
                <tbody>
                <tr class="header_tr_admin">
                    <td>№</td>
                    <td>Имя</td>
                    <td>Почтовый адрес</td>
                    <td>Менеджер коттеджей</td>
                    <td>Менеджер заявок</td>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><?php $count_role2 = 0; $role_pivot_id = 0;?>
                            @foreach($user->roles as $role)
                                @if($role->id === 2) <?php $count_role2++; $role_pivot_id = $role->pivot->id; ?> @endif
                            @endforeach
                            @if($count_role2)
                                <a href="{{secure_url('admin/users/destroy_role2/'.$role_pivot_id)}}" class="table_button_admin">Деактивировать</a>
                            @else
                                <a href="{{secure_url('admin/users/add_role2/'.$user->id)}}" class="table_button_admin">Активировать</a>
                            @endif
                            <?php $count_role2 = 0; $role_pivot_id = 0;?>
                        </td>
                        <td><?php $count_role3 = 0; $role_pivot_id2 = 0;?>
                            @foreach($user->roles as $role)
                                @if($role->id === 3) <?php $count_role3++; $role_pivot_id2 = $role->pivot->id; ?> @endif
                            @endforeach
                            @if($count_role3)
                                <a href="{{secure_url('admin/users/destroy_role3/'.$role_pivot_id2)}}" class="table_button_admin">Деактивировать</a>
                            @else
                                <a href="{{secure_url('admin/users/add_role3/'.$user->id)}}" class="table_button_admin">Активировать</a>
                            @endif
                            <?php $count_role3 = 0; $role_pivot_id2 = 0;?>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection



