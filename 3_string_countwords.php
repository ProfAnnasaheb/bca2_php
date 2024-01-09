
<!DOCTYPE html>
<html>
<head>
      <title>swap_dynamic</title>
</head>
<body>
    <form method="post">
    <input type="text" name="str1"><br>
    <input type="submit" name="submit">
    </form>
    </body>
</html>
<?php
if (isset($_POST['submit'])) {
   $str1=$_POST['str1'];
   echo "Given string is:$str1";
   echo "<br>";
   $countt=str_word_count($str1);
   echo $countt;
}
else
{
    echo "someting went wrong....";
}

?>
