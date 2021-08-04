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
      //echo 'TRUE';
    }else{
      //echo 'FALSE';
      return false;
    }
  }
}
