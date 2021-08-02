<?php
$RLVL='../../';
require_once $RLVL.'includer.php';
require_once $RLVL.HEAD;
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

    session_unset();


    print("LOGED OUT SUCCESFULLY");
    $IND=$RLVL.INDEX;
    echo<<<END
    <br><br>
    <a href=$IND>
    <div class='continue'>
     CONTINUE <br>
     TO MAIN
    </div>
    </a>
    END;

    ?>

  </div>
</div>
  </body>
</html>
