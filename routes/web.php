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

Route::get('/hi', function () {
    return response('<h1>Hello World</h1>');
});



// Route::get('/hello/{id}', function ($id) {
//     dd($id);
//     return response('response'.$id);
    
// })->where('id','[0-9]+');
