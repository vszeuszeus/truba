<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\House;
use App\User;
use App\User_request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        $count_houses = House::all()->count();
        $const_true_count = House::where('constraction_status_id', 1)->count();
        $const_false_count = $count_houses - $const_true_count;

        $avai_true_count = House::where('availability_status_id', 1)->count();
        $avai_false_count = $count_houses - $avai_true_count;

        $user_request_count = User_request::all()->count();
        $request_ended = User_request::where('status', 1)->count();
        $request_noended = $user_request_count - $request_ended;

        view()->share('count_houses', $count_houses);
        view()->share('const_true_count', $const_true_count);
        view()->share('const_false_count', $const_false_count);
        view()->share('avai_true_count', $avai_true_count);
        view()->share('avai_false_count', $avai_false_count);
        view()->share('user_request_count', $user_request_count);
        view()->share('request_ended', $request_ended);
        view()->share('request_noended', $request_noended);
        */
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
