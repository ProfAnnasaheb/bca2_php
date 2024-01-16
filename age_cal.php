<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Age Calculator</title>
</head>
<body>
    <form action="" method="post">
    <input type="date" name="birthdaytime">
    <input type="submit" name="submit" value="Calculate current age">
    </form>

</body>
</html>
<?php
    if (isset($_POST['submit']))
    {
        $birthday=$_POST['birthdaytime'];
        $dob = new DateTime($birthday);
        $now = new DateTime();
        $difference = $now->diff($dob);
        $age = $difference->y;
        echo "Your age is $age Years";
   }

?>