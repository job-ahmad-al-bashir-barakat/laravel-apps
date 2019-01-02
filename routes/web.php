<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

class message {

    public $body;

    public function __construct()
    {
        $this->body = 'ahmed';
    }
}

Route::get('/', function () {

    \App\Events\SendMessage::dispatch();

    return view('welcome');
});
