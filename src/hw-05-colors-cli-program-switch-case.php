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

// Switch-case construction for checking a color typed by user in CLI
switch ($value) {
    case $colorGreen:
        $color = $value;
        break;
    case $colorRed:
        $color = $value;
        break;
    case $colorBlue:
        $color = $value;
        break;
    case $colorBrown:
        $color = $value;
        break;
    case $colorViolet:
        $color = $value;
        break;
    case $colorBlack:
        $color = $value;
        break;
    default:
        $color = $alternativeColor;
}

echo "$color is a good choice" . PHP_EOL;



