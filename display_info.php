<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Student Information</title>
</head>
<body>
    <h2>Student Information</h2>
    <p>Roll: <?php echo $_SESSION['roll']; ?></p>
    <p>Name: <?php echo $_SESSION['name']; ?></p>
    <p>Class: <?php echo $_SESSION['class']; ?></p>
    <p>Contact: <?php echo $_SESSION['contact']; ?></p>
    <p>Email: <?php echo $_SESSION['emailid']; ?></p>
    <h1>State: <?php echo $_SESSION['state']; ?></h1>
</body>
</html>
