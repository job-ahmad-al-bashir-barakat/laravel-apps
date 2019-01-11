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

    public function __construct($message)
    {
        $this->body = $message;
    }
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/update',function () {
    \App\Events\SendMessage::dispatch(new message('Hi Koko'));
});