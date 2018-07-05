<?php

class Router{
  public $requestMethod;
  public $arGet = array();
  public $arPost = array();
  
  public function __construct(){
  
  }
  
  public function get($path, $callback){
    $this->arGet[$path] = $callback;
  }
  
  public function post($path, $callback){
    $this->arPost[$path] = $callback;
  }
  
  public function runGet(){
    if(in_array($_SERVER["REQUEST_URI"], array_keys($this->arGet))){
      $key = $_SERVER["REQUEST_URI"];
      $callback = $this->arGet[$key];
      call_user_func($callback);
    }
    
  }
  
  public function runPost(){
  
  }
  
  public function run(){
    switch($_SERVER["REQUEST_METHOD"]){
      case "GET":
        $this->runGet();
        break;
      case "POST":
        $this->runPost();
        break;
    }
    
  }
}