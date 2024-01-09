
<!DOCTYPE html>
<html>
<head>
      <title>swap_dynamic</title>
</head>
<body>
    <form method="GET">
    <input type="text" name="no1"><br>
    <input type="text" name="no2"><br>
    <input type="submit" name="submit">
    </form>
    </body>
</html>
<?php
if (isset($_GET['submit'])) {
   $no1=$_GET['no1'];
   $no2=$_GET['no2'];
   echo $no1;
   echo "<br>";
   echo $no2;
   $temp=$no2;
   $no2=$no1;
   $no1=$temp;
   echo "After using three variables numbers are $no1 and $no2";
}
?>
