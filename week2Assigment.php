
<?php
// Question 1
echo "<h3>1. Greatest and Smallest Number</h3>";
$x = 12;
$y = 25;
$z = 7;
$big = $x;
$small = $x;
if ($y > $big) {
    $big = $y;
}
if ($z > $big) {
    $big = $z;
}
if ($y < $small) {
    $small = $y;
}
if ($z < $small) {
    $small = $z;
}
echo "Greatest number: $big <br>";
echo "Smallest number: $small";
// Question 2
echo "<h3>2. Divisible by 3 and 5</h3>";
$n = 30;
if ($n % 3 == 0 && $n % 5 == 0) {
    echo "$n is divisible by both 3 and 5";
} elseif ($n % 3 == 0) {
    echo "$n is divisible by 3";
} elseif ($n % 5 == 0) {
    echo "$n is divisible by 5";
} else {
    echo "$n is divisible by none";
}
// Question 3
echo "<h3>3. Odd Numbers from 2 to 20</h3>";
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}
echo "<br>Even numbers from 35 to 7: ";
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo "$i ";
    }
}
// Question 4
echo "<h3>4. Divisible by 2 and 5</h3>";
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo "$i ";
    }
}
// Question 5
echo "<h3>5. Reverse Number</h3>";
$number = 12345;
$answer = 0;
while ($number > 0) {
    $last = $number % 10;
    $answer = $answer * 10 + $last;
    $number = (int)($number / 10);
}
echo "Reverse number is: $answer";
// Question 6
echo "<h3>6. LCM</h3>";
$a = 8;
$b = 12;
$lcm = $a;
while ($lcm % $b != 0) {
    $lcm = $lcm + $a;
}
echo "LCM of $a and $b is: $lcm";
// Question 7
echo "<h3>7. HCF</h3>";
$a = 18;
$b = 24;
$hcf = 1;
for ($i = 1; $i <= $a; $i++) {
    if ($a % $i == 0 && $b % $i == 0) {
        $hcf = $i;
    }
}
echo "HCF of $a and $b is: $hcf";
// Question 8
echo "<h3>8. Multiplication Table</h3>";
for ($i = 1; $i <= 12; $i++) {
    for ($j = 1; $j <= 12; $j++) {
        echo ($i * $j) . "&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
}
// Question 9
echo "<h3>9. Prime or Non-Prime</h3>";
$number = 19;
$count = 0;
for ($i = 1; $i <= $number; $i++) {
    if ($number % $i == 0) {
        $count++;
    }
}
if ($count == 2) {
    echo "$number is a Prime number";
} else {
    echo "$number is a Non-Prime number";
}
// Question 10
echo "<h3>10. Prime Numbers from 10 to 50</h3>";
for ($number = 10; $number <= 50; $number++) {
    $count = 0;
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $count++;
        }
    }
    if ($count == 2) {
        echo "$number ";
    }
}
?>