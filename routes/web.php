<?php

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
    Event::fire(new UserSignedUp('John', 25));
});