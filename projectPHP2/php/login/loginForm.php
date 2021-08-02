<?php
function callLoginForm($userName,$pass,$subVal){
echo<<<END
<div class='loginForm_Container'>
  <form action='login.php' method='post'>
    $userName
    <div class='loginForm_Item'>

      <input type='text' name='userN'>
    </div>
      $pass
    <div class='loginForm_Item'>

      <input type='password' name='userP' >
    </div>

    <div class='loginForm_Submit'>
      <input type='submit' value='$subVal'>
    </div>

  </form>
</div>
END;

}

 ?>
