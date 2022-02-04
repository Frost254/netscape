<?php 

$value = "orange";
switch($value) {
    case "red":
         echo "Your favorite color is red";
            break;
    case "blue":
         echo "Your favorite color is blue";
            break;
    case "green":
            echo "Your favorite color is green";
                break;
    case "yellow":
            echo "Your favorite color is yellow";
                break;
    case "orange":
            echo "Your favorite color is orange";
                break;
    default:    
            echo "Your favorite color is not red, blue, green, yellow, or orange";  
}

//while loop
$i = 100;
while ($i > 0) {
    echo "<br>";
    echo $i;
    $i -=10;
    echo "<br>";
}

//do while loop
$i = 100;
do {
    echo "<br>";
    echo $i;
    $i -=10;
} while ($i > 0);

?>