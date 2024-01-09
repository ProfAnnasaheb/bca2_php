<?php
    $result1 = "";
    $result2 = "";

    if (isset($_POST['submit'])) {
        $no1 = $_POST['no1'];
        $no2 = $_POST['no2'];

        $temp = $no2;
        $no2 = $no1;
        $no1 = $temp;

        $result1 = $no1;
        $result2 = $no2;
    }
    ?>

<!DOCTYPE html>
<html>

<head>
    <title>swap_dynamic</title>
</head>

<body>
     <form method="post">
        <input type="text" name="no1" placeholder="Enter number 1"><br>
        <input type="text" name="no2" placeholder="Enter number 2"><br>
        <input type="submit" name="submit">
    </form>

    <input type="text" value="<?php echo $result1; ?>"><br>
    <input type="text" value="<?php echo $result2; ?>">
</body>

</html>
