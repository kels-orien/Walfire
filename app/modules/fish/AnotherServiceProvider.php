<?php namespace App\Modules\Fish;

use App\Modules\Content\Models\Entry;

class AnotherServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function register()
    {
        \Log::debug("AnotherServiceProvider registered");

        // Register facades
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            Entry::registryAdminModule('fish');
        });
    }

}