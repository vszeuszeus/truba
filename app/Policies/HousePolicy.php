<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HousePolicy
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

    public function show_index(User $user)
    {
        $roles = $user->roles()->get();
        foreach($roles as $role) {
            if ($role->id === 2 or $role->id === 3) return true;
        }
        return false;
    }

    public function save(User $user)
    {
        $roles = $user->roles()->get();
        foreach($roles as $role) {
            if ($role->id === 2) return true;
        }
        return false;
    }
}
