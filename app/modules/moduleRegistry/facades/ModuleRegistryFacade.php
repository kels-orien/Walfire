<?php namespace App\Modules\ModuleRegistry\Facades;

use Illuminate\Support\Facades\Facade;

class ModuleRegistryFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return new \App\Modules\ModuleRegistry\Models\ModuleRegistry; }

}
