<?php


// Custom 404 page
App::missing(function($exception)
{
    return Response::view('content::404', array(), 404);
});
