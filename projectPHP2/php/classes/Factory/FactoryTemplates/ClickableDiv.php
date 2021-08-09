<?php
function FTemplateCallClickDiv(&$IND,&$class,&$value){
  echo<<<END
  <a href=$IND>
  <div class='$class'>
   $value
  </div>
  </a>
  END;
}
