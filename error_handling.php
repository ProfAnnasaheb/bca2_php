<?php

//error handler function
function customError($errno, $errstr) {
  echo "<b>Error:</b> $errno and Error sting is: $errstr";
}

//set error handler
set_error_handler("customError");

//trigger error
echo($test);

echo "<br>";
$a = 10;
$b = 0;
 
// This will generate error
echo($a / $b);

?>