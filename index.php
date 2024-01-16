<?php

if (isset($_POST['submit'])) {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $d = $_POST["d"];
    $ten = 10;
    unset($_POST);
    error_reporting(0); //remove division by 0

    $foundSolution = false;

    for ($i = 0; $i <= 4; $i++) {
        $temp1 = $a;
        $a = $b;
        $b = $c;
        $c = $d;
        $d = $temp1;

        if (@calculate($ten, $a, $b, $c, $d)) {
            $foundSolution = true;
            break;
        }

        for ($j = 0; $j <= 3; $j++) {
            $temp2 = $b;
            $b = $c;
            $c = $d;
            $d = $temp2;

            if (@calculate($ten, $a, $b, $c, $d)) {
                $foundSolution = true;
                break 2;
            }

            for ($k = 0; $k <= 2; $k++) {
                $temp3 = $c;
                $c = $d;
                $d = $temp3;

                if (@calculate($ten, $a, $b, $c, $d)) {
                    $foundSolution = true;
                    break 3;
                }
            }
        }
    }

    if (!$foundSolution) {
        echo "There are no possible solutions";
    }
}


function Calculate($ten, $a, $b, $c, $d): bool {
    $win = false;
    try {
        switch ($ten) {
            //Additions and subtractions only.
            case $a + $b + $c + $d:
                echo $a . " + " . $b . " + " . $c . " + " . $d . " = " . $ten;
                $win = true;
                break;
            case $a + $b + $c - $d:
                echo $a . " + " . $b . " + " . $c . " - " . $d . " = " . $ten;
                $win = true;
                break;
            case $a + $b - $c - $d:
                echo $a . " + " . $b . " - " . $c . " - " . $d . " = " . $ten;
                $win = true;
                break;
            case $a - $b - $c - $d:
                echo $a . " - " . $b . " - " . $c . " - " . $d . " = " . $ten;
                $win = true;
                break;
            case $a - $b - $c + $d:
                echo $a . " - " . $b . " - " . $c . " + " . $d . " = " . $ten;
                $win = true;
                break;
            case $a + $b - $c + $d:
                echo $a . " + " . $b . " - " . $c . " + " . $d . " = " . $ten;
                $win = true;
                break;
            case $a - $b + $c + $d:
                echo $a . " - " . $b . " + " . $c . " + " . $d . " = " . $ten;
                $win = true;
                break;
            case $a - $b + $c - $d:
                echo $a . " - " . $b . " + " . $c . " - " . $d . " = " . $ten;
                $win = true;
                break;

            //Multiplications and Division only
            case $a * $b * $c * $d:
                echo $a . " × " . $b . " × " . $c . " × " . $d . " = " . $ten;
                $win = true;
                break;
            case $a * $b * $c / $d:
                echo $a . " × " . $b . " × " . $c . " ÷ " . $d . " = " . $ten;
                $win = true;
                break;
            case $a * $b / $c / $d:
                echo $a . " × " . $b . " ÷ " . $c . " ÷ " . $d . " = " . $ten;
                $win = true;
                break;
            case $a / $b / $c / $d:
                echo $a . " ÷ " . $b . " ÷ " . $c . " ÷ " . $d . " = " . $ten;
                $win = true;
                break;
            case $a / $b / $c * $d:
                echo $a . " ÷ " . $b . " ÷ " . $c . " × " . $d . " = " . $ten;
                $win = true;
                break;
            case $a * $b / $c * $d:
                echo $a . " × " . $b . " ÷ " . $c . " × " . $d . " = " . $ten;
                $win = true;
                break;
            case $a / $b * $c * $d:
                echo $a . " ÷ " . $b . " × " . $c . " × " . $d . " = " . $ten;
                $win = true;
                break;
            case $a / $b * $c / $d:
                echo $a . " ÷ " . $b . " × " . $c . " ÷ " . $d . " = " . $ten;
                $win = true;
                break;

            //One Multiplication
            case $a * $b + $c + $d:
                echo $a . " × " . $b . " + " . $c . " + " . $d . " = " . $ten;
                $win = true;
                break;
            case $a * $b + $c - $d:
                echo $a . " × " . $b . " + " . $c . " - " . $d . " = " . $ten;
                $win = true;
                break;
            case $a * $b - $c + $d:
                echo $a . " × " . $b . " - " . $c . " + " . $d . " = " . $ten;
                $win = true;
                break;
            case $a * $b - $c - $d:
                echo $a . " × " . $b . " - " . $c . " - " . $d . " = " . $ten;
                $win = true;
                break;

            //One Division
            case $a / $b + $c + $d:
                echo $a . " ÷ " . $b . " + " . $c . " + " . $d . " = " . $ten;
                $win = true;
                break;
            case $a / $b + $c - $d:
                echo $a . " ÷ " . $b . " + " . $c . " - " . $d . " = " . $ten;
                $win = true;
                break;
            case $a / $b - $c + $d:
                echo $a . " ÷ " . $b . " - " . $c . " + " . $d . " = " . $ten;
                $win = true;
                break;
            case $a / $b - $c - $d:
                echo $a . " ÷ " . $b . " - " . $c . " - " . $d . " = " . $ten;
                $win = true;
                break;

            //Two Multiplications
            case $a * $b * $c + $d:
                echo $a . " × " . $b . " × " . $c . " + " . $d . " = " . $ten;
                $win = true;
                break;
            case $a * $b * $c - $d:
                echo $a . " × " . $b . " × " . $c . " - " . $d . " = " . $ten;
                $win = true;
                break;

            //One Multiplication and one division
            case $a * $b / $c + $d:
                echo $a . " × " . $b . " ÷ " . $c . " + " . $d . " = " . $ten;
                $win = true;
                break;
            case $a * $b / $c - $d:
                echo $a . " × " . $b . " ÷ " . $c . " - " . $d . " = " . $ten;
                $win = true;
                break;

            //Two Divisions
            case $a / $b / $c + $d:
                echo $a . " ÷ " . $b . " ÷ " . $c . " + " . $d . " = " . $ten;
                $win = true;
                break;
            case $a / $b / $c - $d:
                echo $a . " ÷ " . $b . " ÷ " . $c . " - " . $d . " = " . $ten;
                $win = true;
                break;

            //Brackets
            case $a * ($b + $c) - $d:
                echo $a . "(" . $b . " + " . $c . ") - " . $d . " = " . $ten;
                $win = true;
                break;
            case $a * ($b + $c) + $d:
                echo $a . "(" . $b . " + " . $c . ") + " . $d . " = " . $ten;
                $win = true;
                break;
            case $a * ($b - $c) + $d:
                echo $a . "(" . $b . " - " . $c . ") + " . $d . " = " . $ten;
                $win = true;
                break;
            case $a * ($b - $c) - $d:
                echo $a . "(" . $b . " - " . $c . ") - " . $d . " = " . $ten;
                $win = true;
                break;
            //2
            case $a * ($b + $c + $d):
                echo $a . "(" . $b . " + " . $c . " + " . $d . ") = " . $ten;
                $win = true;
                break;
            case $a * ($b + $c - $d):
                echo $a . "(" . $b . " + " . $c . " - " . $d . ") = " . $ten;
                $win = true;
                break;
            case $a * ($b - $c + $d):
                echo $a . "(" . $b . " - " . $c . " + " . $d . ") = " . $ten;
                $win = true;
                break;
            case $a * ($b - $c - $d):
                echo $a . "(" . $b . " - " . $c . " - " . $d . ") = " . $ten;
                $win = true;
                break;
            //3
            case $a / ($b + $c) - $d:
                echo $a . " ÷ (" . $b . " + " . $c . ") - " . $d . " = " . $ten;
                $win = true;
                break;
            case $a / ($b + $c) + $d:
                echo $a . " ÷ (" . $b . " + " . $c . ") + " . $d . " = " . $ten;
                $win = true;
                break;
            case $a / ($b - $c) + $d:
                echo $a . " ÷ (" . $b . " - " . $c . ") + " . $d . " = " . $ten;
                $win = true;
                break;
            case $a / ($b - $c) - $d:
                echo $a . " ÷ (" . $b . " - " . $c . ") - " . $d . " = " . $ten;
                $win = true;
                break;
            //4
            case $a / ($b + $c + $d):
                echo $a . " ÷ (" . $b . " + " . $c . " + " . $d . ") = " . $ten;
                $win = true;
                break;
            case $a / ($b + $c - $d):
                echo $a . " ÷ (" . $b . " + " . $c . " - " . $d . ") = " . $ten;
                $win = true;
                break;
            case $a / ($b - $c + $d):
                echo $a . " ÷ (" . $b . " - " . $c . " + " . $d . ") = " . $ten;
                $win = true;
                break;
            case $a / ($b - $c - $d):
                echo $a . " ÷ (" . $b . " - " . $c . " - " . $d . ") = " . $ten;
                $win = true;
                break;
            //5
            case $a * $b * ($c + $d):
                echo $a . " × " . $b . "(" . $c . " + " . $d . ") = " . $ten;
                $win = true;
                break;
            case $a * $b * ($c - $d):
                echo $a . " × " . $b . "(" . $c . " - " . $d . ") = " . $ten;
                $win = true;
                break;
            //6
            case $a * ($b * $c + $d):
                echo $a . "×(" . $b . " × " . $c . " + " . $d . ") = " . $ten;
                $win = true;
                break;
            case $a * ($b * $c - $d):
                echo $a . "×(" . $b . " × " . $c . " - " . $d . ") = " . $ten;
                $win = true;
                break;
            //7&8
            case $a * $b / ($c + $d):
                echo $a . " × " . $b . " ÷ (" . $c . " + " . $d . ") = " . $ten;
                $win = true;
                break;
            case $a * $b / ($c - $d):
                echo $a . " × " . $b . " ÷ (" . $c . " - " . $d . ") = " . $ten;
                $win = true;
                break;
            //9&10
            case $a / $b * ($c + $d):
                echo $a . " ÷ " . $b . "×(" . $c . " + " . $d . ") = " . $ten;
                $win = true;
                break;
            case $a / $b * ($c - $d):
                echo $a . " ÷ " . $b . "×(" . $c . " - " . $d . ") = " . $ten;
                $win = true;
                break;
            //11
            case $a / $b / ($c + $d):
                echo $a . " ÷ " . $b . " ÷ (" . $c . " + " . $d . ") = " . $ten;
                $win = true;
                break;
            case $a / $b / ($c - $d):
                echo $a . " ÷ " . $b . " ÷ (" . $c . " - " . $d . ") = " . $ten;
                $win = true;
                break;
            //12
            case $a / ($b / $c + $d):
                echo $a . " ÷ (" . $b . " ÷ " . $c . " + " . $d . ") = " . $ten;
                $win = true;
                break;
            case $a / ($b / $c - $d):
                echo $a . " ÷ (" . $b . " ÷ " . $c . " - " . $d . ") = " . $ten;
                $win = true;
                break;
            default:
                //echo "<br>";
                break;
        }
    } catch (DivisionByZeroError $e) {
        //echo "Error: " . $e->getMessage();
    }
    return $win;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Make 10 Calculator</title>
</head>
<body>
<pre>Insert 4 digits to make</pre>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="number" max="9" min="0" placeholder="1" name="a">
    <input type="number" max="9" min="0" placeholder="2" name="b">
    <input type="number" max="9" min="0" placeholder="3" name="c">
    <input type="number" max="9" min="0" placeholder="4" name="d">
    <!--<input type="number" value="" . $ten name="value" disabled style="position: relative; top: 10px; left: 180px; max-width: 30px">  for future-->
    <br>
    <br>
    <input type="submit" name="submit">
</form>

</body>
</html>
