
<!DOCTYPE html>
<html>
<head>
      <title>Multiplication table PHP</title>
</head>
<body>
    <form method="post">
    <input type="text" name="no1" placeholder="Enter Number:"><br>
    <input type="submit" name="submit">
    </form>
    </body>
</html>
<?php
if (isset($_POST['submit'])) {
   $no1=$_POST['no1'];
   echo "Given Number is $no1";
   echo "<br>";
   $i=1;
   echo "Multplication table is=";
   while($i<=10)
	{
		echo $no1*$i;
		$i++;
        }
}
?>
