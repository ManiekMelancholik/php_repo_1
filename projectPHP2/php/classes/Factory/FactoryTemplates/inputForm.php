<?php
function FTemplateCallInput($arr){
echo (
  "<div clas=$arr[0]>
  <form action=$arr[1] method=$arr[2]>"
);

    for($i=0; $i<$arr[3]; $i++){

      //echo"$i+++";
      $a=$arr[4][$i];
      $b=$arr[5][$i];
      $c=$arr[6][$i];
      $d=$arr[7][$i];
      $e=$arr[8];
      $f=$arr[9][$i];
      //echo ("$a+$b+$c+$d+$e+$f");
      echo (
        "<div class=$a>
            $b
              <input type=$c name=$d class=$e value=$f >
            </div>"
          );
    }

echo (
  "<input type='submit' class=$arr[10] value=$arr[11]>
  </form>
</div>"
);
}
