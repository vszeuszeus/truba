<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Role_user;
use App\Constraction_status;
use App\Availability_status;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name = "Admin";
        $user->email = "tumaradmin@mail.ru";
        $user->password = bcrypt('123123');
        $user->save();

        $nrole = new Role();
        $nrole->name = 'Администратор';
        $nrole->name_eng = 'Administrator';
        $nrole->save();

        $nrole = new Role();
        $nrole->name = 'Менеджер коттеджей';
        $nrole->name_eng = 'HouseManager';
        $nrole->save();

        $nrole = new Role();
        $nrole->name = 'Менеджер заявок';
        $nrole->name_eng = 'RequestManager';
        $nrole->save();

        $r_u = new Role_user();
        $r_u->user_id = 1;
        $r_u->role_id = 1;
        $r_u->save();

        $a_s = new Availability_status();
        $a_s->name = 'Продан';
        $a_s->name_eng = 'Sold';
        $a_s->save();

        $a_s = new Availability_status();
        $a_s->name = 'Не продан';
        $a_s->name_eng = 'NoSold';
        $a_s->save();

        $a_s = new Constraction_status();
        $a_s->name = 'Построен';
        $a_s->name_eng = 'Build';
        $a_s->save();

        $a_s = new Constraction_status();
        $a_s->name = 'Не построен';
        $a_s->name_eng = 'NoBuild';
        $a_s->save();


    }
}
