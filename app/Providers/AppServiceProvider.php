<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        view()->composer('*',function($view){
            $view->with([
                'addressreceive' => User::find(1),
            ]);
        });
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
