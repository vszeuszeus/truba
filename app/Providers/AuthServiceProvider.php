<?php

namespace App\Providers;

use App\House;
use App\Policies\HousePolicy;
use App\User_request;
use App\Policies\UserRequestPolicy;
use App\User;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        /*'App\Model' => 'App\Policies\ModelPolicy',
        'App\User_request' => 'App\Policies\UserRequestPolicy.php',
        'App\House' => 'App\Policies\HousePolicy.php' */
        User::class => UserPolicy::class,
        User_request::class => UserRequestPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
