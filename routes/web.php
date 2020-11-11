<?php

use Illuminate\Support\Facades\Route;
use Simplexi\SuperModule\SuperModule;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greet/{name}', function($sName) {
    $oSuper = new SuperModule();
    return $oSuper->greet($sName);
});
