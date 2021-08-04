<?php
//NO LONGER USED, SEE PHP/CLSSES/FACTORY/FACTORYTEMPLATES/INPUTFORM.PHP


/*
function createInputInstance($autoCheck,$action,$method,$numOfElements,$inpType,$inpVarName,$inpText,$inpValue,$formDivClass="",$inpDivClass="",$inpClass="",$submitClass="",$submitValue=""){

$error= false;
if($autoCheck==true){
  if($numOfElements<0){
    echo "$numOfElements in negative pos 4 in function call, make sure it is positive number";
  }
  $types='button
  checkbox
  color
  date
  datetime-local
  email
  file
  hidden
  image
  month
  number
  password
  radio
  range
  reset
  search
  submit
  tel
  text
  time
  url
  week';
  if(!(str_ends_with($action,'.php') or str_ends_with($action,'.html'))){
    echo 'wrong extension!!! <hr>';
    $error=true;
  }
  for($i=0; $i<count($inpType);$i++){
    if(!str_contains($types,$inpType[i])){

      $error=true;
      echo "Found invalid type at position $i <hr>";
    }
  }
  if($method!='post' or $method!='get'){
    $error=true;
    echo 'invalid method. Use post or get method<hr>';
  }


}

if($error==false){
  $inpDivClass=array_merge($inpDivClass,    array_fill(count($inpDivClass),  ($numOfElements-count($inpDivClass)),   $inpDivClass[count($inpDivClass)]));
  $inpVarName=array_merge($inpVarName,      array_fill(count($inpVarName),   ($numOfElements-count($inpVarName)),    $inpVarName[count($inpVarName)]));
  $inpType=array_merge($inpType,            array_fill(count($inpType),      ($numOfElements-count($inpType)),       $inpType[count($inpType)]));
  $inpClass=array_merge($inpClass,          array_fill(count($inpClass),     ($numOfElements-count($inpClass)),      $inpClass[count($inpClass)]));
  $inpValue=array_merge($inpValue,          array_fill(count($inpValue),     ($numOfElements-count($inpValue)),      $inpValue[count($inpValue)]));

echo ("<div clas=$formDivClass>
  <form action=$action method=$method>");
    for($i=0; $i<$numOfElements; $i++){
      echo ("<div class=$inpDivClass[$i]>
              $inpText[$i]
              <input type=$inpType[$i] name=$inpVarName[$i] class=$inpClass[$i] value=$inpValue[$i]>
            </div>");
    }
echo ("<input type='submit' class=$submitClass value=$submitValue>
  </form>
</div>");

}

}


 ?>
