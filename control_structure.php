<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Control Structures</title>
</head>
<body>
    <h1>PHP Control Structures</h1>

    <h2>If / elseif / else</h2>
    <?php
    $mark = 84;
    if ($mark >= 90) {
        $grade = 'A';
    } elseif ($mark >= 80) {
        $grade = 'B';
    } elseif ($mark >= 70) {
        $grade = 'C';
    } elseif ($mark >= 60) {
        $grade = 'D';
    } elseif ($mark >= 50) {
        $grade = 'E';
    } else {
        $grade = 'F';
    }
    echo 'Mark: ' . $mark . ', grade: ' . $grade;
    ?>

    <h2>Switch</h2>
    <?php
    $month = 'May';
    switch ($month) {
        case 'January':
        case 'February':
        case 'March':
            $season = 'Winter';
            break;
        case 'April':
        case 'May':
        case 'June':
            $season = 'Spring';
            break;
        case 'July':
        case 'August':
        case 'September':
            $season = 'Summer';
            break;
        case 'October':
        case 'November':
        case 'December':
            $season = 'Autumn';
            break;
        default:
            $season = 'Unknown';
    }
    echo htmlspecialchars($month, ENT_QUOTES, 'UTF-8') . ' is in ' . $season . '.';
    ?>

    <h2>Ternary operator</h2>
    <?php
    echo $mark >= 50 ? 'PASS' : 'FAIL';
    ?>

    <p><a href="index.php">Home</a></p>
</body>
</html>