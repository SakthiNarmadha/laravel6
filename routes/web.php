<?php
//laravel container is the application and we can access as app()
//app()->bind('example',function(){
    //we can read any of the conflict file using filename and key
    $foo = config('services.foo');
    return new\App\Example($foo);
//});
//Route::get('/',function(){
    $example = resolve('example');

    ddd($example);
//});
Auth::routes();
Route::get('/home','HomeController@index')->name('home');
