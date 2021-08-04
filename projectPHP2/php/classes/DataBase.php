<?php
//session_start();
$RLVL='../../';
require_once $RLVL.'includer.php';
require_once $RLVL.DBCONECTION;
class DataBase{
  private static DataBase $instance;
  private mysqli $DBcon;

  private function __construct(){
    //echo"<h1> I AM ALIVE </h1>";
    $this->DBcon=new mysqli(host, db_user, db_pas, db_name);
  }

  public static function GetInstance(){
    if(!isset(self::$instance)){
      self::$instance=new DataBase();
    }
    return self::$instance;
  }
//RETURNS BOOLEAN VALUE DEPENDING ON THE DATA BASE ANS
  public function LogInCheck($log, $pas){

    $sqlQuestion=
    " SELECT userInd, password, attempts
      FROM loginfo
      WHERE userInd='$log'and password='$pas';
    ";
    try{
      $DBans=$this->DBcon->query($sqlQuestion);

    }catch(Exception $E){
      echo('<br>OOPS COULD NOT CONNECT TO DATA BASE<br><br>');
    }

    if(@mysqli_fetch_array($DBans)){
      return true;
    }else{
      return false;
    }
  }
  //NO OVERLOADING :/
  //FUNCTION CHECKS IF THERE EXISTS USER WITH CERTAIN E-MAIL ADRESS
  public function RegisterCheck($email){

    $sqlQuestion=
    " SELECT userInd, password, attempts
      FROM loginfo
      WHERE e-mail='$email';
    ";
    try{
      $DBans=$this->DBcon->query($sqlQuestion);

    }catch(Exception $E){
      echo('<br>OOPS COULD NOT CONNECT TO DATA BASE<br><br>');
    }

    if($DBans){
      return true;
    }else{
      return false;
    }
  }
//FUNCTION RETURNS INFORMATION TO CREATE NEW USER
  public function GetLoggerInfo($log){

      $sqlQuestion=
    " SELECT name, surrname, privLvl
      FROM users
      WHERE indexNum='$log';
      ";
      try{
        $DBans=$this->DBcon->query($sqlQuestion);

      }catch(Exception $E){
        echo('<br>OOPS COULD NOT CONNECT TO DATA BASE<br><br>');
      }
      $info=@mysqli_fetch_array($DBans);
      if(isset($info)){
        return $info;
      }else{
        echo('<br>PROBLEM OCCURED WHILE AQUIRING ESENTIAL DATA<br><br>');
      }
  }



}
