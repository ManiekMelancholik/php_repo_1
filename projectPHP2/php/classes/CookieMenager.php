<?php
$RLVL="../../";
require_once $RLVL.'includer.php';
class CM{
  //noe = number of elements
  private static CM $instance;
  private function __construct(){

  }
  public static function GetInstance(){
    if(!isset(self::$instance)){
      self::$instance=new CM();
    }
    return self::$instance;
  }
  public function CookieSetValues($arr,$names,$noe){
    for($i=0;$i<$noe;$i++){
      if(isset($_COOKIE[$names[$i]])){
        $arr[$i]=$_COOKIE[$names[$i]];
      }else{
        $arr[$i]="";
      }
    }
    return $arr;
  }
  public function CookieSetForRegister($names,$noe){
    for($i=0;$i<$noe;$i++){
      if(isset($_POST[ $names[$i] ])){
        if(isset($_COOKIE[ $names[$i] ])){
          $_COOKIE[ $names[$i] ]=$_POST[ $names[$i] ];
        }else{
          //echo("COOCKIE SET");
          setcookie($names[$i],$_POST[$names[$i]],time()+3600);
        }
      }
    }
  }
  public function CookieDeleteRegister($names,$noe){
    for($i=0;$i<$noe;$i++){
      //if(isset($_COOKIE[ $names[$i] ])){
        setcookie($names[$i],$_POST[$names[$i]],time()-3600);
      //}

    }
  }
  public function CookieDeleteCookie($name){
    //if(isset($_COOKIE[$name])){
      setcookie($name,'',time()-3600);
    //}

  }
}
