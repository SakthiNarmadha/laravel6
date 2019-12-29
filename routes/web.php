<?php
//laravel container is the application and we can access as app()
//app()->bind('example',function(){
    //we can read any of the conflict file using filename and key
    $foo = config('services.foo');
    return new\App\Example($foo);
//});
Route::get('/',function(){
    
    
    
    
    //if we want to accesss the user request we use 
    //$request->session()->get('name');

    //provide an array to put into the session
    //session(['name'=>'JohnDoe']);
    
    //to fetch or get from the session we use
    // return session('name');
 
   //if there is nothing in the section based on the keyword user given
   //session('foobar','default');

   //we can delete from the session
  // session()->forget('name');


   return view('welcome');
});
   //after submitting the form the user reload to next page where he 
   //the flash message
   //flash message it is useful for providing quick message to the user
    //that you have created a mail etc
   Route::post('projects',function(){
       session()->flash('message','Your project has been created');
       return redirect('/');
   
});
//Auth::routes();
//Route::get('/home','HomeController@index')->name('home');
