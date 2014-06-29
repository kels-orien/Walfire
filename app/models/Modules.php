<?php
class Modules {

    public static  function getActiveAdminModule($section) {
        $modules = \App\Modules\ModuleRegistry\Models\ModuleRegistry::getAdminModule();
        $moduleList = array();
        ModuleRegistry::registryAdminModule(1);
        foreach($modules as $module) {
            if($module[0]::getSettings("administrator." . $section)) {
                $moduleList[] = $module[0];
            }
        }

        return $moduleList;
    }
}
