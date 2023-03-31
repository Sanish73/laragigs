<?php

use Illuminate\Http\Request;
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
    return view('listings',[
        'heading'=> 'sanish thapa',
        'listings'=>[
           
        ]

    ]);
});



// Route::get('/hello/{id}', function ($id) {
//     dd($id);
//     return response('response'.$id);
    
// })->where('id','[0-9]+');


// //this is API
// Route::get('/post', function () {
//     return response()->json([
//         'posts'=>[
//             [
//                  'title'=>'post'

//             ]
           
//         ]
//             ]);
//    });