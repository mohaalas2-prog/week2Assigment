<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
</head>
<body>
    <h1>PHP Loops</h1>

    <h2>For loop</h2>
    <?php
    for ($number = 1; $number <= 5; $number++) {
        echo $number . ' ';
    }
    ?>

    <h2>While loop</h2>
    <?php
    $number = 5;
    while ($number >= 1) {
        echo $number . ' ';
        $number--;
    }
    ?>

    <h2>Do-while loop</h2>
    <?php
    $number = 1;
    do {
        echo $number . ' ';
        $number++;
    } while ($number <= 5);
    ?>

    <h2>Foreach loop</h2>
    <?php
    $subjects = ['PHP', 'HTML', 'CSS'];
    foreach ($subjects as $subject) {
        echo htmlspecialchars($subject, ENT_QUOTES, 'UTF-8') . '<br>';
    }
    ?>

    <p><a href="index.php">Home</a></p>
</body>
</html>