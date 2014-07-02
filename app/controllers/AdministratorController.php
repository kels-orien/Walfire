<?php

class AdministratorController extends Controller {

    protected function showDashboard() {
        return View::make('administrator.dashboard')
            ->with("dashboard_active",true)
            ->with('user', Sentry::getUser());
    }

    protected function showMenu($slug = null)
    {
        return View::make('administrator.'.$slug)
            ->with($slug."_active",true)
            ->with('user', Sentry::getUser());
    }

}
