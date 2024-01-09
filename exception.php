<?php

function divideNumbers($numerator, $denominator) {
    try {
        if ($denominator == 0) {
            throw new Exception("Division by zero is not allowed.");
        }

        $result = $numerator / $denominator;
        echo "Result: $result";
    } catch (Exception $e) {
        echo "Exception caught: " . $e->getMessage();
    } finally {
        echo " This block always executes.";
    }
}

// Example usage
divideNumbers(10, 2); // Result: 5 This block always executes.
echo "<br>";

divideNumbers(8, 0); // Exception caught: Division by zero is not allowed. This block always executes.
echo "<br>";

divideNumbers(20, 4); // Result: 5 This block always executes.

?>
