<?php
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];
$d = $_GET["d"];
$ten = 10;
error_reporting(0); //remove division by 0

function Calculate($ten, $a, $b, $c, $d)
{
    switch ($ten) {

        //Additions and subtractions only.
        case $a + $b + $c + $d:
            echo $a . "+" . $b . "+" . $c . "+" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a + $b + $c - $d:
            echo $a . "+" . $b . "+" . $c . "-" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a + $b - $c - $d:
            echo $a . "+" . $b . "-" . $c . "-" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a - $b - $c - $d:
            echo $a . "-" . $b . "-" . $c . "-" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a - $b - $c + $d:
            echo $a . "-" . $b . "-" . $c . "+" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a + $b - $c + $d:
            echo $a . "+" . $b . "-" . $c . "+" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a - $b + $c + $d:
            echo $a . "-" . $b . "+" . $c . "+" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a - $b + $c - $d:
            echo $a . "-" . $b . "+" . $c . "-" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;

        //Multiplications and Division only
        case $a * $b * $c * $d:
            echo $a . "*" . $b . "*" . $c . "*" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a * $b * $c / $d:
            echo $a . "*" . $b . "*" . $c . "/" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a * $b / $c / $d:
            echo $a . "*" . $b . "/" . $c . "/" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a / $b / $c / $d:
            echo $a . "/" . $b . "/" . $c . "/" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a / $b / $c * $d:
            echo $a . "/" . $b . "/" . $c . "*" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a * $b / $c * $d:
            echo $a . "*" . $b . "/" . $c . "*" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a / $b * $c * $d:
            echo $a . "/" . $b . "*" . $c . "*" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a / $b * $c / $d:
            echo $a . "/" . $b . "*" . $c . "/" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;

        //One Multiplication
        case $a * $b + $c + $d:
            echo $a . "*" . $b . "+" . $c . "+" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a * $b + $c - $d:
            echo $a . "*" . $b . "+" . $c . "-" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a * $b - $c + $d:
            echo $a . "*" . $b . "-" . $c . "+" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a * $b - $c - $d:
            echo $a . "*" . $b . "-" . $c . "-" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;

        //One Division
        case $a / $b + $c + $d:
            echo $a . "/" . $b . "+" . $c . "+" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a / $b + $c - $d:
            echo $a . "/" . $b . "+" . $c . "-" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a / $b - $c + $d:
            echo $a . "/" . $b . "-" . $c . "+" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a / $b - $c - $d:
            echo $a . "/" . $b . "-" . $c . "-" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;

        //Two Multiplications
        case $a * $b * $c + $d:
            echo $a . "*" . $b . "*" . $c . "+" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a * $b * $c - $d:
            echo $a . "*" . $b . "*" . $c . "-" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;

        //One Multiplication and one division
        case $a * $b / $c + $d:
            echo $a . "*" . $b . "/" . $c . "+" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a * $b / $c - $d:
            echo $a . "*" . $b . "/" . $c . "-" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;

        //Two Divisions
        case $a / $b / $c + $d:
            echo $a . "/" . $b . "/" . $c . "+" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a / $b / $c - $d:
            echo $a . "/" . $b . "/" . $c . "-" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;

        //Brackets
        case $a * ($b + $c) - $d:
            echo $a . "(" . $b . "+" . $c . ")-" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a * ($b + $c) + $d:
            echo $a . "(" . $b . "+" . $c . ")+" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a * ($b - $c) + $d:
            echo $a . "(" . $b . "-" . $c . ")+" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a * ($b - $c) - $d:
            echo $a . "(" . $b . "-" . $c . ")-" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        //2
        case $a * ($b + $c + $d):
            echo $a . "(" . $b . "+" . $c . "+" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        case $a * ($b + $c - $d):
            echo $a . "(" . $b . "+" . $c . "-" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        case $a * ($b - $c + $d):
            echo $a . "(" . $b . "-" . $c . "+" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        case $a * ($b - $c - $d):
            echo $a . "(" . $b . "-" . $c . "-" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        //3
        case $a / ($b + $c) - $d:
            echo $a . "/(" . $b . "+" . $c . ")-" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a / ($b + $c) + $d:
            echo $a . "/(" . $b . "+" . $c . ")+" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a / ($b - $c) + $d:
            echo $a . "/(" . $b . "-" . $c . ")+" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        case $a / ($b - $c) - $d:
            echo $a . "/(" . $b . "-" . $c . ")-" . $d . "=10";

            $win = 1;
            echo "<br>";
            break;
        //4
        case $a / ($b + $c + $d):
            echo $a . "/(" . $b . "+" . $c . "+" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        case $a / ($b + $c - $d):
            echo $a . "/(" . $b . "+" . $c . "-" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        case $a / ($b - $c + $d):
            echo $a . "/(" . $b . "-" . $c . "+" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        case $a / ($b - $c - $d):
            echo $a . "/(" . $b . "-" . $c . "-" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        //5
        case $a * $b * ($c + $d):
            echo $a . "*" . $b . "(" . $c . "+" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        case $a * $b * ($c - $d):
            echo $a . "*" . $b . "(" . $c . "-" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        //6
        case $a * ($b * $c + $d):
            echo $a . "*(" . $b . "*" . $c . "+" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        case $a * ($b * $c - $d):
            echo $a . "*(" . $b . "*" . $c . "-" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        //7&8
        case $a * $b / ($c + $d):
            echo $a . "*" . $b . "/(" . $c . "+" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        case $a * $b / ($c - $d):
            echo $a . "*" . $b . "/(" . $c . "-" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        //9&10
        case $a / $b * ($c + $d):
            echo $a . "/" . $b . "*(" . $c . "+" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        case $a / $b * ($c - $d):
            echo $a . "/" . $b . "*(" . $c . "-" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        //11
        case $a / $b / ($c + $d):
            echo $a . "/" . $b . "/(" . $c . "+" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        case $a / $b / ($c - $d):
            echo $a . "/" . $b . "/(" . $c . "-" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        //12
        case $a / ($b / $c + $d):
            echo $a . "/(" . $b . "/" . $c . "+" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        case $a / ($b / $c - $d):
            echo $a . "/(" . $b . "/" . $c . "-" . $d . ")=10";

            $win = 1;
            echo "<br>";
            break;
        default:
            break;
    }
    if ($win == 1){
        return true;
    }
}

for ($i = 0; $i <= 4; $i++) {
    $temp1 = $a;
    $a = $b;
    $b = $c;
    $c = $d;
    $d = $temp1;
    if (Calculate($ten, $a, $b, $c, $d) == true){
        break;
    }
    for ($j = 0; $j <= 3; $j++) {
        $temp2 = $b;
        $b = $c;
        $c = $d;
        $d = $temp2;
        if (Calculate($ten, $a, $b, $c, $d) == true){
            break 2;
        }
        for ($k = 0; $k <= 2; $k++) {
            $temp3 = $c;
            $c = $d;
            $d = $temp3;
            if (Calculate($ten, $a, $b, $c, $d) == true){
                break 3;
            }
        }
    }
}
if ($i >= 4){
    echo "There are no possible solutions";
}
?>
<br>
<br>
<a href="index.php">Go back</a>
