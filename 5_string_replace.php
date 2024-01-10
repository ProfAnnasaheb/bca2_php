<!DOCTYPE html>
<html>
<head>
      <title>replace_word</title>
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
   $str1 = $_POST['str1'];
   echo "Given string is: $str1";
   echo "<br>";
   
   // Replace 'is' with 'was'
   $newStr = str_replace("is", "was", $str1);
   
   echo "After replacement: $newStr";
}
else {
    echo "Something went wrong....";
}
?>
