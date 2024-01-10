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
        $numbersArray = array_map('intval', explode(',', $numbersInput));

        if (!empty($numbersArray)) {
            $maxNumber = max($numbersArray);
            echo "The largest number is: $maxNumber";
        } else {
            echo "Please enter valid numbers.";
        }
    }
    ?>
</body>
</html>
