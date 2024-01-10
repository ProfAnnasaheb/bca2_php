<!DOCTYPE html>
<html>
<head>
    <title>Find_Max_Number</title>
</head>
<body>
    <form method="post">
        <label>Enter numbers (comma-separated):</label><br>
        <input type="text" name="numbers"><br>
        <input type="submit" name="submit">
    </form>

<?php
if (isset($_POST['submit'])) {
    $numbersInput = $_POST['numbers'];
    $a = array_map('intval', explode(',', $numbersInput));
    //$a = array(10, 30, 89, 64, 23);
    $z = $a[0];
    $s = count($a);
    for ($i = 0; $i < $s; $i++) {
        if ($a[$i] > $z)     // if we put < symbol in place of > symbol then it will find smallest number
            $z = $a[$i];
}
echo "Largest element in the array is  $z";
}

?>
</body>
</html>