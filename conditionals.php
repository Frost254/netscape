<?php

$num = 22;
$num2 = 45;


if ($num > $num2) {
    echo "<br>";
    echo "The first number is greater than the second number";
} elseif ($num2 > $num) {
    echo "<br>";
    echo "The second number is greater than the first number";
} else {
    echo "<br>";
    echo "The numbers are equal";
}

if ($num % 2 == 0 && $num2 % 2 == 0) {
    echo "<br>";
    echo "The numbers are even";
} else {
    echo "<br>";
    echo "The numbers are odd";
}

if ($num % 2 == 0 || $num2 % 2 == 0) {
    echo "<br>";
    echo "One of the numbers is even";
} else {
    echo "<br>";
    echo "The numbers are odd";
}

$mark = 24;

if ($mark >= 70) {
    echo "<br>";
    echo "You passed the exam with a grade of A";
}
else if ($mark >= 60) {
    echo "<br>";
    echo "You passed the exam with a grade of B";
}
else if ($mark >= 50) {
    echo "<br>";
    echo "You passed the exam with a grade of C";
}
else if ($mark >= 40) {
    echo "<br>";
    echo "You passed the exam with a grade of D";
}
else if ($mark >= 30) {
    echo "<br>";
    echo "You passed the exam with a grade of D";
}
 else {
    echo "<br>";
    echo "You failed the exam";
}
?>