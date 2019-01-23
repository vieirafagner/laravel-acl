<?php

namespace App\Providers;

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
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('Coordenador',function ($user){

            if($user->level == 'Coordenador'){
                return true;
            }

            return false;
        });

        Gate::define('Estagiário',function ($user){

            if($user->level == 'Estagiário'){
                return true;
            }

            return false;
        });

        Gate::define('Professor',function ($user){

            if($user->level == 'Professor'){
                return true;
            }

            return false;
        });
    }
}
