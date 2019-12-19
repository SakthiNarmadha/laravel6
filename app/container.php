<?php
namespace App;
//Its a container for services
//Its a place to store and retrieve a services
//services may be string, number,object
//created a class named container
//but laravel container is application we can access 
//using the app() helpoer functon
class container
{
//there is a method named bind()to store things in container
//representing an array 
protected $bindings=[];
public function bind($key,$value)
{
$this->bindings[$key]=$value;
}

//using resolve() to fetch data 
public function resolve($key)
{
    if(isset($this->bindings[$key])){
        //call_user_func is used to call the funcytion during runtime
        return call_user_func($this->bindings[$key]);
    }
}
}