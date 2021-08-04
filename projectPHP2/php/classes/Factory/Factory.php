<?php
$RLVL="../../";
require_once $RLVL.'includer.php';

require_once $RLVL.COOKIEMENAGER;
//TEMPLATS
require_once $RLVL.FInpForm;

class Factory{
  private static Factory $instance;
  private $divClasesSets;
  private CM $cookieMenager;
  private function __construct(){
    $this->divClasesSets=array();

    $divClasesSet1=array('IDC','IDE','IDI','IDS');
    $this->divClasesSets[0]=$divClasesSet1;
    $this->cookieMenager=CM::GetInstance();
  }
  public static function GetInstance(){
    if(!isset(self::$instance)){
      self::$instance = new Factory();
    }
    return self::$instance;
  }

  public function FCreateInputTemplate(
    $inpDivContainerInd0,
    $A1,
    $M2,
    $noe3,
    $inpDivElementInd4,
    $T5,
    $N7,
    $inpDivInputInd8,
    $inpDivSubmitInd10,
    $SV11
  ){
    //4-8 ALL ARRAYS
    $arr4=array(); //->$this->divClasesSet1[1]
    $T6=array();
    $V9=array();
    for($i=0;$i<$noe3;$i++){
      //ARR4 SHOULD BE NORMAL VAR NOT ARR BUT IN CASE OF FURHER CHANGES I AM PLANING IT IS BETTER TO LEAVE IT LIKE THAT
      $arr4[$i]=$this->divClasesSets[$inpDivElementInd4][1];
      $T6[$i]='text';
    }
    //COULD HAVE USED ARRAY_FILL() BUT ANYWAY
    if(count($N7)==1){
      for($i=1;$i<$noe3;$i++){
        $N7[$i]=$N7[$i-1];
      }
    }
    $V9=$this->cookieMenager->CookieSetValues($V9,$N7,$noe3);


    $passArr=array(
    $this->divClasesSets[$inpDivContainerInd0][0] ,
    $A1 ,
    $M2 ,
    $noe3,
    $arr4 ,
    $T5 ,
    $T6 ,
    $N7,
    $this->divClasesSets[$inpDivInputInd8][2] ,
    $V9 ,
    $this->divClasesSets[$inpDivSubmitInd10][3] ,
    $SV11
  );
  //AT LEAST
  FTemplateCallInput($passArr);
  }
}
