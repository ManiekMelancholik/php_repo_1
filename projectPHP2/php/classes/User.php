<?php
class User{
  protected $instance;
  protected $name;
  protected $surrname;
  protected $privLvl;



  public function __construct($n,$sn,$pLvl){
    $this->name=$n;
    $this->surrname=$sn;
    $this->privLvl=$pLvl;

  }
  public function getFullName(){
    print($this->name." ".$this->surrname);
  }
  public function getUserName(){
    return $this->name;
  }
  public function getUserSurrname(){
    return $this->surrname;
  }
  public function getUserPrivLvl(){
    return $this->privLvl;
  }








}
