<?php

class AdministratorController extends Controller {

    protected function showSettings()
    {
        return View::make('administrator.settings')
            ->with('user', Sentry::findUserByID(Sentry::getUser()->id));
    }

}
