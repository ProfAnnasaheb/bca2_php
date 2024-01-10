<?php
session_start();

if (isset($_POST['submit'])) {
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $contact = $_POST['contact'];
    $emailid = $_POST['emailid'];
    $state = $_POST['state'];

    // Store data in session
    $_SESSION['roll'] = $roll;
    $_SESSION['name'] = $name;
    $_SESSION['class'] = $class;
    $_SESSION['contact'] = $contact;
    $_SESSION['emailid'] = $emailid;
    $_SESSION['state'] = $state;

    // Redirect to another page
    header("Location: display_info.php");
    exit();
}
?>
