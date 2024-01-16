
<!DOCTYPE html>
<html>
<head>
      <title>Simple_Calculator</title>
</head>
<body>
    <fieldset>
        <legend>The Simple Graphic Calculator</legend>
    <form method="post">
    <input type="text" name="no1" placeholder="Enter Number 1"><br>
    <input type="text" name="no2" placeholder="Enter Number 2"><br>
    <label for="opr">Choose a Operation:</label>
    <select name="opr" id="opr">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    </select><br>
    <input type="submit" name="submit">
    </form>
</fieldset>
    </body>
</html>
<?php
if (isset($_POST['submit'])) {
   $no1=$_POST['no1'];
   $no2=$_POST['no2'];
   $opr=$_POST['opr'];
   echo "First Given numbers is $no1";
   echo "<br>";
   echo "Second Given numbers is $no2";
   echo "<br>";
   echo "Selected Operator is $opr";
   echo "<br>";
   
   switch($opr)
	{
		case "+": $ans=$no1+$no2;
			  echo "Addition is: $ans";
			  break; 
		case "-": $ans=$no1-$no2;
			  echo "Sub is: $ans";
			  break;
		case "*": $ans=$no1*$no2;
			  echo "Mul is: $ans";
			  break;
		case "/": $ans=$no1/$no2;
			  echo "Div is: $ans";
			  break;
		default: echo "Selected invalid choice";
	}
  
}
?>
