<?php namespace App\Modules\ModuleRegistry\Models;

class ModuleRegistry {

    protected static $adminModule = array();

    protected static $moduleSettings = array(
        'administrator.settings' => true,
    );

    public static function registryAdminModule($module,$facade=null) {
        if($facade != null) $module = array($module,$facade);
        else $module = array($module);
        array_push(self::$adminModule,$module);
        return true;
    }

    public static function getAdminModule() {
        return self::$adminModule;
    }

    public static function getSettings($section) {
        if(in_array($section,self::$moduleSettings))
            return true;
        else
            return false;
    }
}
