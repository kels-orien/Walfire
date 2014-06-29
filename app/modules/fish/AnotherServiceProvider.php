<?php namespace App\Modules\Fish;

use App\Modules\ModuleRegistry\Models\ModuleRegistry;

class AnotherServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function register()
    {
        // Register facades
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            //ModuleRegistry::registryAdminModule('fish');
        });
    }

}