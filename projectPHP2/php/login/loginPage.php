<?php
$RLVL='../../';
require_once $RLVL.'includer.php';
require_once $RLVL.HEAD;
require_once $RLVL.FACTORY;
getHEAD($RLVL);
    ?>

  <body>

    <div class='page'>
    <?php
    $factory=Factory::GetInstance();
      include_once $RLVL.loginForm;

      include_once $RLVL.topMenu;
      showTopMenu($RLVL);


      ?>
      <div class='pageContent'>
<?php
    echo "<div class='login'>";
      callLoginForm('User Number', 'Password', 'LOG IN');
      $REG=$RLVL.registerPage;
      $factory->FCreateClickDivTemplate($REG,1,'DONT HAVE ACCOUNT </br>
      JOIN US!');
      /*
    echo <<<END
    <a href=$REG>
    <div class='register'>


    </div>
    </a>
    END;
//*/



    echo "</div>";

    ?>

  </div>
</div>
  </body>
</html>
