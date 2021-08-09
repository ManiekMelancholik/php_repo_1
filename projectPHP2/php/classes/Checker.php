<?php
$RLVL="../../";
//NOE=NUMBER OF ELEMENTS
class Checker{
  private static Checker $instance;
  private function __construct(){

  }
  public static function GetInstance(){
    if(!isset(self::$instance)){
      self::$instance=new Checker();
    }
    return self::$instance;
  }
  public function CheckerAllSetForRegister($names,$noe){
    $n=0;
    for($i=0;$i<$noe;$i++){
      if(isset($_POST[ $names[$i] ])){
        if($_POST[ $names[$i] ]!=""){
          $n++;
        }else{
          break;
        }
      }
    }
    if($n==$noe){
      return true;
      echo 'TRUE';
    }else{
      return false;
      echo 'FALSE';
    }
  }
  public function CheckerEmailAdress($name){
    if(str_contains($name,';')){
      return false;
    }
    $arr=explode('',$name);
    $arr = array();
  }
  public function CheckerInputCheck($inp){
    $decision=true;
    $banedChars='"'."'".';*=+-#';
    for($i=0; $i<strlen($inp); $i++){
      if(str_contains($banedChars, $inp[ $i ])) {
        $decision=false;
        break;
      }

    }
    echo "Please dont use any of the following $banedChars ";
    return $decision;
  }
}
