<?php $RLVL='../../';
require_once $RLVL.'includer.php';
require_once $RLVL.HEAD;
getHEAD($RLVL); ?>

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
    echo "<div class='continue'>";

    echo "<a href='logout.php'>
    CONFIRM LOG OUT
    </a>
    ";




    echo "</div>";

    ?>

  </div>
</div>
  </body>
</html>
