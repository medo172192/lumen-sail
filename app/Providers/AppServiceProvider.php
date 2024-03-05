<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        // Sail Docker Images And Containers
        $this->app->register(\Laravel\Sail\SailServiceProvider::class);
        // Jwt-auth for Lumen
        $this->app->register(\Tymon\JWTAuth\Providers\LumenServiceProvider::class);
        // Add arisan commands
        if (env('APP_ENV') === 'local') {
            $this->app->bind(\Illuminate\Database\ConnectionResolverInterface::class, \Illuminate\Database\ConnectionResolver::class);
            $this->app->register(\Niellles\LumenCommands\LumenCommandsServiceProvider::class);
        }
        // Add spaite permissions for lumen
        $this->app->register(\Spatie\Permission\PermissionServiceProvider::class);
        

        // modules
        // $this->app->register(\Modules\Admin\Providers\AdminServiceProvider::class);   

    }
}
