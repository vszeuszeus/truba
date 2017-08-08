<?php

namespace App\Policies;

use App\User;
use App\User_request;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserRequestPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function before(User $user)
    {
        $roles = $user->roles()->get();
        foreach($roles as $role) {
            if ($role->id === 1) return true;
        }
        return "";
    }

    public function show(User $user)
    {
        $roles = $user->roles()->get();
        foreach($roles as $role) {
            if ($role->id === 3) return true;
        }
        return false;
    }

    public function set_complite(User $user)
    {
        $roles = $user->roles()->get();
        foreach($roles as $role) {
            if ($role->id === 3) return true;
        }
        return false;
    }

    public function destroy(User $user)
    {
        $roles = $user->roles()->get();
        foreach($roles as $role) {
            if ($role->id === 3) return true;
        }
        return false;
    }
}
