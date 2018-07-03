<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 03.07.18
 * Time: 9:24
 */
class File {
  
  private $id;
  private $name;
  private $size;
  private $width;
  private $height;
  private $description;
  private $active;
  private $dataCreate;
  private $dataUpdate;
  
//  public function get($var){
//    return $this[$var];
//  }
  
//  public function set($var, $value){
//    $this[$var] = $value;
//    return true;
//  }

    public function getName(){
      return $this->name;
    }
  
    public function setName($val){
      return $this->name = $val;
    }
}