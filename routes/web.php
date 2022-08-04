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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/store/{catagory?}/{item?}', function ($catagory = null, $item = null) {
    if (isset($catagory)) {
        if (isset($item)) {
            return 'catagory---' . ($catagory) . '--and item--' . ($item);
        }
        return "catagory {$catagory}";
    }

    return 'nothing';
});
