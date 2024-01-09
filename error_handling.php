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

echo "<br>";

// 2. Accessing an array element that doesn't exist
$myArray = array("apple", "banana", "orange");
echo $myArray[3];

echo "<br>";

// 3. Attempting to divide by a string
$number = 10;
$string = "abc";
echo $number / $string;
echo "<br>";

?>