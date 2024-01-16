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
    exit();
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
                echo $a . " × (" . $b . " + " . $c . ") - " . $d . " = " . $ten;
                $win = true;
                break;
            case $a * ($b + $c) + $d:
                echo $a . " × (" . $b . " + " . $c . ") + " . $d . " = " . $ten;
                $win = true;
                break;
            case $a * ($b - $c) + $d:
                echo $a . " × (" . $b . " - " . $c . ") + " . $d . " = " . $ten;
                $win = true;
                break;
            case $a * ($b - $c) - $d:
                echo $a . " × (" . $b . " - " . $c . ") - " . $d . " = " . $ten;
                $win = true;
                break;
            //2
            case $a * ($b + $c + $d):
                echo $a . " × (" . $b . " + " . $c . " + " . $d . ") = " . $ten;
                $win = true;
                break;
            case $a * ($b + $c - $d):
                echo $a . " × (" . $b . " + " . $c . " - " . $d . ") = " . $ten;
                $win = true;
                break;
            case $a * ($b - $c + $d):
                echo $a . " × (" . $b . " - " . $c . " + " . $d . ") = " . $ten;
                $win = true;
                break;
            case $a * ($b - $c - $d):
                echo $a . " × (" . $b . " - " . $c . " - " . $d . ") = " . $ten;
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
                echo $a . " × (" . $b . " × " . $c . " + " . $d . ") = " . $ten;
                $win = true;
                break;
            case $a * ($b * $c - $d):
                echo $a . " × (" . $b . " × " . $c . " - " . $d . ") = " . $ten;
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
    <style>
        body {
            background-color: #121212;
            color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        div#inputbuttons {
            text-align: center;
        }

        input[type="number"] {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            font-size: 20px;
            width: 50px;
            margin: 5px;
        }

        input[type="number"]:focus {
            outline: none;
            border: 2px solid #4285f4;
        }

        input[type="submit"] {
            background-color: #4285f4;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 20px;
            cursor: pointer;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #357ae8;
        }
        span#results {
            font-size: 50px;
        }

        @media (max-width: 600px) {
            input[type="number"] {
                width: 80%;
            }
        }
    </style>
</head>
<body>
<div id="inputbuttons">
    <div style="text-align: center; margin-bottom: 20px;">
        <span id="results"></span>
    </div>
    <input type="number" maxlength="1" max="9" min="0" step="1" placeholder="1" name="a" inputmode="numeric" pattern="[0-9]*">
    <input type="number" maxlength="1" max="9" min="0" step="1" placeholder="2" name="b" inputmode="numeric" pattern="[0-9]*">
    <input type="number" maxlength="1" max="9" min="0" step="1" placeholder="3" name="c" inputmode="numeric" pattern="[0-9]*">
    <input type="number" maxlength="1" max="9" min="0" step="1" placeholder="4" name="d" inputmode="numeric" pattern="[0-9]*">
    <br>
    <input type="submit" name="submit" id="submitBtn">
</div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(() => {


        $('#submitBtn').on('click', function (event) {
            event.preventDefault();
            var inputValues = $('input[type="number"]').map(function(){
                return $(this).val();
            }).get().join('');

            if(inputValues.length !== 4){
                alert('Please enter 1 digits for each input.');
                return false; // Prevent form submission
            }


            let a = $('input[name="a"]').val();
            let b = $('input[name="b"]').val();
            let c = $('input[name="c"]').val();
            let d = $('input[name="d"]').val();

            $.ajax({
                url: 'index.php',
                type: 'POST',
                data: {
                    a: a,
                    b: b,
                    c: c,
                    d: d,
                    submit: ''
                },
                success: function (data) {
                    console.log(data);
                    $('#results').html(data);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error('Error:', errorThrown);
                }
            });
        });
    });
</script>
</html>
