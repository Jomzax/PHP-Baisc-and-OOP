<h3>If Else</h3>
<?php

$x = 3;

if ($x > 0) {
    echo "Positive";
} elseif ($x < 0) {
    echo "Negative";
}else{
    echo "Zero";
}
?>

<h3>Switch</h3>
<?php 

switch($x) {
    case 1: 
        echo "One";
        break;
    case 2: 
        echo "Two";
        break;
    case 3:
        echo "Three";
        break;
    default:
        echo "Unknown";
}
?>
