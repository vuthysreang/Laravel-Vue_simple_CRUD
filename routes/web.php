<?php

use Illuminate\Support\Facades\Route;

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


/* HOME WELCOME ROUTE */
Route::get('/', function () {
    return view('welcome');
});


/* GROUP ROUTE */
Route::prefix('api/view')->group(function () {

    // Sub-Route here

});
