<?php

use App\User;
use App\Events\UserSignedUp;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('using-facade', function () {
    // app('events')->fire(new UserSignedUp(new User)); // works

    // Event::fire(new UserSignedUp(new User)); // works

    event(new UserSignedUp(new User)); // does not work
});