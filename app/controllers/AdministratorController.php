<?php

class AdministratorController extends Controller {

    protected function showSettings()
    {
        return View::make('administrator.settings')
            ->with('user', Sentry::getUser())
            ->with('modules',Modules::getActiveAdminModule("settings"));

       dd(ModuleRegistry::getAdminModule());
    }

}
