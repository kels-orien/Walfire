<?php namespace App\Modules\ModuleRegistry\Models;

use Illuminate\Database\Eloquent\Model;

class ModuleRegistry {

    protected static $adminModule = array();

    public static function registryAdminModule($module,$facade=null) {
        if($facade != null) $module = array($module,$facade);
        array_push(Self::$adminModule,$module);
        return true;
    }

    public static function getAdminModule() {
        return Self::$adminModule;
    }
}
