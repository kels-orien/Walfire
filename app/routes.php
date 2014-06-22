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

Route::group(array('prefix' => 'admin','before' => 'auth'), function()
{
    $getAdminModule = ModuleRegistry::getAdminModule();
    Route::get('/', function()
    {

    });

    Route::group(array('prefix' => 'settings'), function()
    {
        Route::get('/', function()
        {

        });
    });
});