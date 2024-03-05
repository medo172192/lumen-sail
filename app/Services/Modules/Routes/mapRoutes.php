<?php

namespace App\Services\Modules\Routes;
use Nwidart\Modules\Facades\Module;

class mapRoutes{

    public $route_path;

    public function __construct() {
       $this->route_path = "/routes/web.php";
    }
    
    /**
     * @return Void
    */
    public function load($app) :void
    {

        if( Module::has('Admin') && Module::isEnabled('Admin') ){
            $app->router->group([], function ($router) {
                require_once  module_path("Admin").$this->route_path;
            });
        }
       
    }
}