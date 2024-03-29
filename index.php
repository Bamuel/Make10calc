<?php

if (isset($_POST['submit'])) {
    $foundSolution = false;

    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $d = $_POST["d"];
    $ten = 10;

    for ($i = 0; $i <= 4; $i++) {
        if ($foundSolution = calculate($ten, $a, $b, $c, $d)) {
            break;
        }
        $temp1 = $a;
        $a = $b;
        $b = $c;
        $c = $d;
        $d = $temp1;
        if ($foundSolution = calculate($ten, $a, $b, $c, $d)) {
            break;
        }

        for ($j = 0; $j <= 3; $j++) {
            $temp2 = $b;
            $b = $c;
            $c = $d;
            $d = $temp2;
            if ($foundSolution = calculate($ten, $a, $b, $c, $d)) {
                break 2;
            }

            for ($k = 0; $k <= 2; $k++) {
                $temp3 = $c;
                $c = $d;
                $d = $temp3;
                if ($foundSolution = calculate($ten, $a, $b, $c, $d)) {
                    break 3;
                }
            }
        }
    }

    if (!$foundSolution) {
        echo "There are no possible solutions";
    }
    else {
        echo $foundSolution;
    }
    exit();
}

function Calculate($ten, $a, $b, $c, $d) {
    $combinations = array("+", "-", "*", "/");
    for ($i = 0; $i < 4; $i++) {
        $op1 = $combinations[$i];
        for ($j = 0; $j < 4; $j++) {
            $op2 = $combinations[$j];
            for ($k = 0; $k < 4; $k++) {
                $op3 = $combinations[$k];
                // Test with parentheses in different positions
                for ($parenthesesPos = 0; $parenthesesPos < 4; $parenthesesPos++) {
                    switch ($parenthesesPos) {
                        case 0:
                            $expression = "$a $op1 $b $op2 $c $op3 $d";
                            break;
                        case 1:
                            $expression = "($a $op1 $b) $op2 $c $op3 $d";
                            break;
                        case 2:
                            $expression = "$a $op1 ($b $op2 $c) $op3 $d";
                            break;
                        case 3:
                            $expression = "$a $op1 $b $op2 ($c $op3 $d)";
                            break;
                    }

                    try {
                        $result = eval("return $expression;");
                    } catch (DivisionByZeroError $e) {
                        //echo "Error: " . $e->getMessage();
                        //continue; // Skip to the next iteration if division by zero occurs
                    }

                    if ($result == $ten) {
                        // change * to × and / to ÷
                        $expression = str_replace("*", "×", $expression);
                        $expression = str_replace("/", "÷", $expression);

                        return $expression . " = " . $ten;
                    }
                }
            }
        }
    }
    return false;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Make 10 Calculator</title>
    <meta charset="utf-8">
    <meta name="description" content="Make 10 Calculator">
    <meta name="author" content="Bamuel">
    <meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    </style>
</head>
<body>
<div id="inputbuttons">
    <div style="text-align: center; margin-bottom: 20px;">
        <span id="results"></span>
    </div>
    <input type="number" onClick="this.select();" maxlength="1" max="9" min="0" step="1" placeholder="1" name="a" inputmode="numeric" pattern="[0-9]*">
    <input type="number" onClick="this.select();" maxlength="1" max="9" min="0" step="1" placeholder="2" name="b" inputmode="numeric" pattern="[0-9]*">
    <input type="number" onClick="this.select();" maxlength="1" max="9" min="0" step="1" placeholder="3" name="c" inputmode="numeric" pattern="[0-9]*">
    <input type="number" onClick="this.select();" maxlength="1" max="9" min="0" step="1" placeholder="4" name="d" inputmode="numeric" pattern="[0-9]*">
    <br>
    <input type="submit" name="submit" id="submitBtn">
</div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(() => {
        $('input[type="number"]').on('input', function () {
            var currentInput = $(this);
            var nextInput = currentInput.next('input[type="number"]');

            if (currentInput.val().length === 1 && nextInput.length) {
                nextInput.focus();
                nextInput.select();
            }
        });

        $('#submitBtn').on('click', function (event) {
            event.preventDefault();
            var inputValues = $('input[type="number"]').map(function () {
                return $(this).val();
            }).get().join('');

            if (inputValues.length !== 4) {
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
