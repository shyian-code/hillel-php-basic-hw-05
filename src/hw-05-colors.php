<?php
$colorGreen = 'green';
$colorRed = 'red';
$colorBlue = 'blue';
$colorBrown = 'brown';
$colorViolet = 'violet';
$colorBlack = 'black';

$alternativeColor = 'white';

//Change a color for checking a color
$value = 'blue';

echo "If else construction: " . PHP_EOL;
// If - else if construction for checking a color
if ($value === $colorGreen) {
    echo "It's a $colorGreen color" . PHP_EOL;
} else if ($value === $colorRed) {
    echo "It's a $colorRed color" . PHP_EOL;
} else if ($value === $colorBlue) {
    echo "It's a $colorBlue color" . PHP_EOL;
} else if ($value === $colorBrown) {
    echo "It's a $colorBrown color" . PHP_EOL;
} else if ($value === $colorViolet) {
    echo "It's a $colorViolet color" . PHP_EOL;
} else if ($value === $colorBlack) {
    echo "It's a $colorBlack color" . PHP_EOL;
} else {
    echo "Well. It's a $alternativeColor color" . PHP_EOL;
}


// Switch-case construction for checking a color
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

echo "\n";
echo "Switch case construction: " . PHP_EOL;
echo "$color is a good choice" . PHP_EOL;