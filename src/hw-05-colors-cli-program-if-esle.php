<?php

$colorGreen = 'green';
$colorRed = 'red';
$colorBlue = 'blue';
$colorBrown = 'brown';
$colorViolet = 'violet';
$colorBlack = 'black';

$alternativeColor = 'white';


echo "Choose a color" . PHP_EOL;;
$value = trim(fgets(STDIN));

// If - else if construction for checking a color typed by user in CLI
if ($value === $colorGreen) {
    echo "$colorGreen is a good choice" . PHP_EOL;
} else if ($value === $colorRed) {
    echo "$colorRed is a good choice" . PHP_EOL;
} else if ($value === $colorBlue) {
    echo "$colorBlue is a good choice" . PHP_EOL;
} else if ($value === $colorBrown) {
    echo "$colorBrown is a good choice" . PHP_EOL;
} else if ($value === $colorViolet) {
    echo "$colorViolet is a good choice" . PHP_EOL;
} else if ($value === $colorBlack) {
    echo "$colorBlack is a good choice" . PHP_EOL;
} else {
    echo "Well. It's a $alternativeColor color" . PHP_EOL;
}
