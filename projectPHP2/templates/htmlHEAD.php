<?php
function getHEAD($ROOTLVL){
require_once $ROOTLVL."includer.php";
$CSS=$ROOTLVL.divStyles;
echo<<<END
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>


  <link rel='stylesheet' href=$CSS >


  </head>
END;
}
