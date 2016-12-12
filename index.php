<?php
/**
 * Created by PhpStorm.
 * User: Elizabeth
 * Date: 11/12/2016
 * Time: 2:54 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Make 10 Calculator</title>
    <link href="" rel="stylesheet" type="text/css">
</head>
<body>
<pre>Insert 4 digits to make</pre>
<form action="calculation.php" method="get">
    <input type="number" max="9" min="0" placeholder="1" name="a">
    <input type="number" max="9" min="0" placeholder="2" name="b">
    <input type="number" max="9" min="0" placeholder="3" name="c">
    <input type="number" max="9" min="0" placeholder="4" name="d">
    <!--<input type="number" value="10" name="value" disabled style="position: relative; top: 10px; left: 180px; max-width: 30px">  for future-->
    <br>
    <br>
    <input type="submit">
</form>

</body>
</html>
