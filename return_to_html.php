<!DOCTYPE html>
<html>

<head>
    <title>swap_dynamic</title>
</head>

<body>
    <?php
    $result = "";
    if (isset($_POST['submit'])) {
        $no1 = $_POST['no1'];
        $no2 = $_POST['no2'];
        $result .= "Original numbers: $no1 and $no2\n";

        $temp = $no2;
        $no2 = $no1;
        $no1 = $temp;

        $result .= "After swapping using three variables: $no1 and $no2";
    }
    ?>

    <form method="post">
        <input type="text" name="no1" placeholder="Enter number 1"><br>
        <input type="text" name="no2" placeholder="Enter number 2"><br>
        <input type="submit" name="submit">
    </form>

    <textarea rows="5" cols="50" readonly><?php echo $result; ?></textarea>
</body>

</html>
