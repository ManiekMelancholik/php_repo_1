<?php
$RLVL='../../';
require_once $RLVL.'includer.php';
require_once $RLVL.HEAD;
getHEAD($RLVL);
    ?>

  <body>
<div class='page'>
<?php
//sesion_start();
//if(isset($_POST['userN'])and isset($_POST['userP'])){
require_once $RLVL.DATABASE;
require_once $RLVL.USER;
require_once $RLVL.CHECKER;
require_once $RLVL.FACTORY;
include_once $RLVL.topMenu;

//$connection=@new mysqli($host,$db_user,$db_pas,$db_name);
//if($connection->connect_errno!=0){


  /*
  if(!$_SESSION['dataBaseCon']){
    $_SESSION['dataBaseCon']=$DBcon;
    echo 'added';
  }else{
    echo 'already there';
  }
  //*/

  showTopMenu($RLVL);
  ?>
  <div class='pageContent'>
<?php

  $dataBase=DataBase::GetInstance();
  $checker=Checker::GetInstance();
  $factory=Factory::GetInstance();
  if($checker->CheckerInputCheck($_POST['userN'])){
    if($checker->CheckerInputCheck($_POST['userP'])){
      if($dataBase->LogInCheck($_POST['userN'],$_POST['userP'])){
            $row=$dataBase->GetLoggerInfo($_POST['userN']);
            $siteUser=new User($row['name'],$row['surrname'],$row['privLvl']);
            $_SESSION['user']=true;
            $_SESSION['user.Name']=$siteUser->getUserName();
            $_SESSION['user.Surrname']=$siteUser->getUserSurrname();
            $_SESSION['user.PrivLvl']=$siteUser->getUserPrivLvl();
            if(isset($_SESSION['user'])){
              echo "<br>LOGED IN <br><br>";

            }else{
              echo "<br>COULDNT LOG IN <br><br>";
            }

      }else{
        echo "<br>WRONG PASSWORD OR USSER INDEX<br><br>";
        $factory->FCreateClickDivTemplate($RLVL.loginPage,0,'RETRY');

        /*
        $RETRY=$RLVL.loginPage;
        echo<<<END
        <a href=$RETRY>
        <div class='continue'>
         RETRY<br>
         ...
        </div>
        </a>
        END;
        //*/
      }
    }
  }


//}
$factory->FCreateClickDivTemplate($RLVL.INDEX,0,'CONTINUE TO MAIN');
/*
$IND=$RLVL.INDEX;
echo<<<END
<a href=$IND>
<div class='continue'>
 CONTINUE <br>
 TO MAIN
</div>
</a>
END;
//*/
//}
?>
</div>
</div>
</body>
