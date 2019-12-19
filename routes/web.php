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

//<!--Route::get('/', function () {
   // return view('welcome');
//});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home')
//->middleware('auth');




    Route::get('/', function () {
//need to instantiate the created container
    $container = new \App\Container();
//if we need to store things in container we use the method add,put,bind
//when we call bind we need to give a key with associated data
    $container->bind('example',function(){
        //example is a key 
        return new\App\Example();
    });
    //resolve helper function is used to retrieve data from the container
    $example =$container->resolve('example');
    //ddd($example);
    $example->go();





});