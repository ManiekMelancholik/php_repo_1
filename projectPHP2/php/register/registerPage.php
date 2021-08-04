<?php $RLVL='../../';
require_once $RLVL.'includer.php';
require_once $RLVL.HEAD;
require_once $RLVL.DATABASE;
require_once $RLVL.COOKIEMENAGER;
require_once $RLVL.FACTORY;
require_once $RLVL.CHECKER;
//require_once $RLVL.inpForm;
getHEAD($RLVL);
    ?>

  <body>
    <div class='page'>
    <?php

      //include_once "templates/loginForm.php";
      //include_once "templates/inputForm.php";
      include_once $RLVL.topMenu;
      showTopMenu($RLVL);


      ?>
      <div class='pageContent'>
<?php

//createInputInstance
//($autoCheck,$action,$method,$numOfElements,$inpType,$inpVarName,$inpText,$inpValue,
//$formDivClass="",$inpDivClass="",$inpClass="",$submitClass="",$submitValue=""){
$varNames=array();
$varNames[0]='name';
$varNames[1]='surrname';
$varNames[2]='email';
$varNames[3]='password';
$varNames[4]='confirm';

$values=array();
$divContInd=0;
$action=$RLVL.registerPage;
$method='post';
$divElemInd=0;
$divInpInd=0;
$divSubInd=0;
$submVal='REGISTER';
/*
if(isset($_COOKIE['name'])){
  $values[0]=$_COOKIE['name'];
}else{
  $values[0]='';
}
if(isset($_COOKIE['surrname'])){
  $values[1]=$_COOKIE['surrname'];
}else{
  $values[1]='';
}
if(isset($_COOKIE['email'])){
  $values[2]=$_COOKIE['email'];
}else{
  $values[2]='';
}
//ITS BETTER AND SAFER TO DONT KEEP THESE IN A COOKIE BUT FOR SAKE OF TIME ILL KEEP IT THAT WAY
if(isset($_COOKIE['password'])){
  $values[3]=$_COOKIE['password'];
}else{
  $values[3]='';
}
if(isset($_COOKIE['confirm'])){
  $values[4]=$_COOKIE['confirm'];
}else{
  $values[4]='';
}
//*/
//createInputInstance(1,$RLVL.register,'post',5,'text',$varNames,$varNames,$values);
$dataBase=DataBase::GetInstance();
$factory=Factory::GetInstance();
$cm=CM::GetInstance();
$checker=Checker::GetInstance();

$cm->CookieSetForRegister($varNames,count($varNames));
//##FCreateInputInstance
//+++++++++++++++ATRIBUTES+++++++++++++++++++++++++++++
//$inpDivContainerInd0,
//$A1,$M2,$noe3,$inpDivElementInd4,
//$T5, $N7,$inpDivInputInd8,$inpDivSubmitInd10,$SV11
//+++++++++++++++++++++++++++++++++++++++++++++++++++++
$factory->FCreateInputTemplate(
  $divContInd,
  $action,
  $method,
  count($varNames),
  $divElemInd,
  $varNames,
  $varNames,
  $divInpInd,
  $divSubInd,
  $submVal
);
$e_mail='email';
//CookieCheckAllSetForRegister($varNames,count($varNames));
if(isset($_POST[$e_mail])){
  if(!$_POST[$e_mail]==''){
    if($dataBase->RegisterCheck($_POST[$e_mail])){
      echo('THIS EMAIL IS ALREADY IN USE');
      $cm->CookieDeleteCookie($e_mail);
    }
  }
}
if($checker->CheckerAllSetForRegister($varNames,count($varNames))){
  $cm->CookieDeleteRegister($varNames,count($varNames));
}

    ?>

    </div>
</div>
  </body>
</html>
