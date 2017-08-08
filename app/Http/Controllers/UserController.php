<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Role_user;

class UserController extends Controller
{
    public function show()
    {

        $this->authorize('show', User::class);
        return view('admin.users.show', [
            'users' => User::all()->load('roles')
        ]);

    }

    public function add_role2(User $user, Request $request)
    {

        $this->authorize('add_role', User::class);

        $new_role = new Role_user();
        $new_role->user_id = $user->id;
        $new_role->role_id = 2;
        $new_role->save();

        $request->session()->flash('session',['Роль успешно добавлена','Теперь пользователь имеет роль "Менеджер коттеджей"','positive']);
        return redirect()->back();

    }

    public function destroy_role2(Role_user $role_user, Request $request)
    {
        $this->authorize('destroy_role', User::class);
        $role_user->delete();

        $request->session()->flash('session',['Роль успешно удалена','Пользователь больше не имеет роли "Менеджер коттеджей"','positive']);
        return redirect()->back();
    }

    public function add_role3(User $user, Request $request)
    {

        $this->authorize('add_role', User::class);

        $new_role = new Role_user();
        $new_role->user_id = $user->id;
        $new_role->role_id = 3;
        $new_role->save();

        $request->session()->flash('session',['Роль успешно добавлена','Теперь пользователь имеет роль "Менеджер заявок"','positive']);
        return redirect()->back();

    }

    public function destroy_role3(Role_user $role_user, Request $request)
    {
        $this->authorize('destroy_role', User::class);
        $role_user->delete();

        $request->session()->flash('session',['Роль успешно удалена','Пользователь больше не имеет роли "Менеджер заявок"','positive']);
        return redirect()->back();
    }
}
