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

//if(!$DBcon){
  //echo 'Couldnt connect to data base';
  //echo "Error".$connection->connect_errno," Descryption".$connection->connect_error;
//}else{
  //echo 'Connected successfully';
//echo 'itWorked';
/*
  $log=$_POST['userN'];
  $pas=$_POST['userP'];

  $sqlQuestion=
  " SELECT userInd, password, attempts
    FROM loginfo
    WHERE userInd='$log'and password='$pas';"
  ;


  $DBans=@$DBcon->query($sqlQuestion);
  $row=@mysqli_fetch_array($DBans);
//*/
  //if(!$row==null)
  $dataBase=DataBase::GetInstance();
  if($dataBase->LogInCheck($_POST['userN'],$_POST['userP'])){

    //session_start();
    //$_SESSION['dataBaseCon']=$DBcon;


/*
    $sqlQuestion=
    " SELECT name, surrname, privLvl
      FROM users
      WHERE indexNum='$log';"
      ;

      $DBans=$_SESSION['dataBaseCon']->query($sqlQuestion);
      $row=@mysqli_fetch_array($DBans);
//*/
    //echo "LOGED IN AS :: ";
    //echo $row['name'];
    //echo "  ";
    //echo $row['surrname'];
    //=================================================================
    //user

    //tak w sumie to poniżej nie ma sensu XD
    //można by odrazu zapisywać do _SESSION bez wzywania konstruktora
    

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
    //=================================================================

  //echo @$row['userInd'];
  //echo @$row['password'];
  //echo @$row['attempts'];
  //sesion_close();
  }else{
    echo "<br>WRONG PASSWORD OR USSER INDEX<br><br>";
    $RETRY=$RLVL.loginPage;
    echo<<<END
    <a href=$RETRY>
    <div class='continue'>
     RETRY<br>
     ...
    </div>
    </a>
    END;
  }

//}
$IND=$RLVL.INDEX;
echo<<<END
<a href=$IND>
<div class='continue'>
 CONTINUE <br>
 TO MAIN
</div>
</a>
END;

//}
?>
</div>
</div>
</body>
