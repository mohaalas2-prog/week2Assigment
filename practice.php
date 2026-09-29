<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>
<body>
    <h1>PHP Practice</h1>

    <h2>1. Find the largest number</h2>
    <?php
    $numbers = [12, 25, 7];
    echo 'Largest: ' . max($numbers);
    ?>

    <h2>2. Check divisibility by 3 and 5</h2>
    <?php
    $value = 30;
    if ($value % 3 === 0 && $value % 5 === 0) {
        echo $value . ' is divisible by both 3 and 5.';
    } elseif ($value % 3 === 0) {
        echo $value . ' is divisible by 3.';
    } elseif ($value % 5 === 0) {
        echo $value . ' is divisible by 5.';
    } else {
        echo $value . ' is divisible by neither 3 nor 5.';
    }
    ?>

    <h2>3. Print odd numbers from 1 to 20</h2>
    <?php
    for ($number = 1; $number <= 20; $number++) {
        if ($number % 2 !== 0) {
            echo $number . ' ';
        }
    }
    ?>

    <p><a href="index.php">Home</a></p>
</body>
</html>