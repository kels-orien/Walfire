<?php namespace App\Modules\ModuleRegistry;

class ModuleRegistryServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function register()
    {
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('ModuleRegistry', 'App\Modules\ModuleRegistry\Facades\ModuleRegistryFacade');
            \ModuleRegistry::registryAdminModule("ModuleRegistry",'App\Modules\ModuleRegistry\Facades\ModuleRegistryFacade');

            // Artisan::call('dump-autoload');
        });
    }
}
