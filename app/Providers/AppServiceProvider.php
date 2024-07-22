<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('admin',function(User $user){
           return $user->is_admin === 1 && $user->is_user === 0;
        }); 

        Gate::define('',function(user $user){
            return $user->is_admin === 0 && $user->is_user === 1;
        });
    }
}
