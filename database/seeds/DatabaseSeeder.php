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

        $this->call(TovarCategSeed::class);
        $this->call(TovarPodCategSeed::class);
        $this->call(TovarSeed::class);
        $this->call(ServiceCategSeed::class);




    }
}
