<?php

namespace App\Providers;

use App\Permission;
use App\User;
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
        \App\Post::class => \App\Policies\PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $permissions = Permission::with('roles')->get();
        foreach ($permissions as $permission) {

            Gate::define($permission->nome, function (User $user) use ($permission) { //passando as 3 permissoes: view_post, edit e delete.
                return $user->hasPermission($permission);

            });
        }

        Gate::before(function (User $user, $ability){

            if($user->hasAnyRoles('Adm'))
                return true;
        });
    }
}