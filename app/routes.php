<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    echo '=)';
});

Route::group(array('prefix' => 'admin', 'as' => 'admin','before' => 'authAdministrator'), function()
{
    Route::get('/', 'AdministratorController@showDashboard');
    Route::get('/{slug}', 'AdministratorController@showMenu');

    /*Route::group(array('prefix' => 'settings'), function()
    {
        Route::get('/', 'AdministratorController@showSettings');
        Route::get('/{slug}', 'AdministratorController@showSettingsSlugable');
    });*/
});