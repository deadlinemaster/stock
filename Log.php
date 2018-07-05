<?php
include "conf.php";

class Log{
  public static function write($message){
    global $arConf;
    
    if($arConf["DEBUG"] === true){
      echo "<pre>";
      print_r($message);
      echo "</pre>";
    }
    
  }
}