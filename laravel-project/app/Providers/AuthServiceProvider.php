<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('admin-publ',function($user){
            return $user->hasAnyRoles(['админ','публикатор']);
            });
            Gate::define('publ',function($user){
                return $user->hasAnyRoles(['публикатор']);
                });
        Gate::define('all-users',function($user){
            return $user->hasAnyRoles(['потребител']);
        });

        Gate::define('edit-users',function($user){
        return $user->hasRole('админ');
        });

        Gate::define('admin',function($user){
            return $user->hasRole('админ');
            });
    }
}
