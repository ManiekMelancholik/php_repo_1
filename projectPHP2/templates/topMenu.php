<?php
session_set_cookie_params(3600,"/");
session_start();

//include_once inpForm;

//require_once "index.php";
//require_once "loginPage.php";
//require_once "shop.php";
function showTopMenu($ROOTLVL){
  require_once $ROOTLVL.'includer.php';
  require_once $ROOTLVL.USER;
  $IND=$ROOTLVL.INDEX;
echo <<<END
<div class='topMenuContainer'>
  <a href=$IND>
    <div class=topMenuObj>

       MENU
    </div>

  </a>

END;
if(!isset($_SESSION['user'])){
  $TMLP=$ROOTLVL.loginPage;
  echo <<<END
    <a href=$TMLP>
      <div class=topMenuObj>

         LOG IN
      </div>
    </a>
  END;
}else{
  $TMLP=$ROOTLVL.logoutPage;
  echo <<<END
      <a href=$TMLP>
        <div class=topMenuObj>

           LOG OUT
        </div>
      </a>
  END;
}
$SHOP=$ROOTLVL.shop;
echo <<<END
  <a href=$SHOP>
    <div class=topMenuObj>

       SHOP
    </div>
  </a>



END;
if(isset($_SESSION['user'])){
echo "<div class='loggerInfo'>";
$user=new User($_SESSION['user.Name'],$_SESSION['user.Surrname'],$_SESSION['user.PrivLvl']);
//$_SESSION['user']->getFullName();//nie można zapisać odnośnika do boiektu w SESII
echo "Loged as:  ";
$user->getFullName();

echo "</div>";
}else{
  echo "<div class='loggerInfo'> You are not loged in </div>";
}


echo '</div>';
}
