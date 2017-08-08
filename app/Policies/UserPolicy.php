<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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
        return false;
    }

    public function show()
    {
        return false;
    }

    public function add_role()
    {
        return false;
    }
}
