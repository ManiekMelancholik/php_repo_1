<?php
$RLVL='../../';
require_once $RLVL.'includer.php';
require_once $RLVL.HEAD;
getHEAD($RLVL);
    ?>

  <body>
    <div class='page'>
    <?php

      include_once $RLVL.loginForm;

      include_once $RLVL.topMenu;
      showTopMenu($RLVL);


      ?>
      <div class='pageContent'>
<?php
    echo "<div class='login'>";
      callLoginForm('User Number', 'Password', 'LOG IN');
      $REG=$RLVL.registerPage;
    echo <<<END
    <a href=$REG>
    <div class='register'>
      DONT HAVE ACCOUNT </br>
      JOIN US!


    </div>
    </a>
    END;




    echo "</div>";

    ?>

  </div>
</div>
  </body>
</html>
