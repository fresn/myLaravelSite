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

Route::get('/', function () {
    return view('welcome');
});

/**
 * Set /env for debug purpose
 */
Route::get('/env',function (){
    if(app()->environment()!=='production'){
        return dump($_ENV);
    }else{
        return'this is production env';
    }
});

Route::get('/db',function (){
   if(app()->environment()!=='production'){
       return DB::connection()->getConfig();
   }else{
       return 'this is production env';
   }
});
