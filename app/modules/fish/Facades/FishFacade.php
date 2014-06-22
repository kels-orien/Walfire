<?php namespace App\Modules\Fish\Facades;

use Illuminate\Support\Facades\Facade;

class EntryFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return new \App\Modules\Fish\Models\Fish; }

}