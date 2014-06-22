<?php namespace App\Modules\ModuleRegistry;

class ModuleRegistryServiceProvider extends \Illuminate\Support\ServiceProvider {

	public function register()
	{
		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('ModuleRegistry', 'App\Modules\ModuleRegistry\Facades\ModuleRegistryFacade');
            \ModuleRegistry::registryAdminModule("Module");

            // Artisan::call('dump-autoload');
		});
	}
}
