<?php
$a = $_GET["a"];
$b = $_GET["b"];
$d = $_GET["c"];
$c = $_GET["d"];
$ten = 10;
error_reporting(0); //remove division by 0

switch ($ten) {

    //Additions and subtractions only.
    case $a+$b+$c+$d:
        echo $a."+".$b."+".$c."+".$d. "=10";
        break;
    case $a+$b+$c-$d:
        echo $a."+".$b."+".$c."-".$d. "=10";
        break;
    case $a+$b-$c-$d:
        echo $a."+".$b."-".$c."-".$d. "=10";
        break;
    case $a-$b-$c-$d:
        echo $a."-".$b."-".$c."-".$d. "=10";
        break;
    case $a-$b-$c+$d:
        echo $a."-".$b."-".$c."+".$d. "=10";
        break;
    case $a+$b-$c+$d:
        echo $a."+".$b."-".$c."+".$d. "=10";
        break;
    case $a-$b+$c+$d:
        echo $a."-".$b."+".$c."+".$d. "=10";
        break;
    case $a-$b+$c-$d:
        echo $a."-".$b."+".$c."-".$d. "=10";
        break;

    //Multiplications and Division only
    case $a*$b*$c*$d:
        echo $a."*".$b."*".$c."*".$d. "=10";
        break;
    case $a*$b*$c/$d:
        echo $a."*".$b."*".$c."/".$d. "=10";
        break;
    case $a*$b/$c/$d:
        echo $a."*".$b."/".$c."/".$d. "=10";
        break;
    case $a/$b/$c/$d:
        echo $a."/".$b."/".$c."/".$d. "=10";
        break;
    case $a/$b/$c*$d:
        echo $a."/".$b."/".$c."*".$d. "=10";
        break;
    case $a*$b/$c*$d:
        echo $a."*".$b."/".$c."*".$d. "=10";
        break;
    case $a/$b*$c*$d:
        echo $a."/".$b."*".$c."*".$d. "=10";
        break;
    case $a/$b*$c/$d:
        echo $a."/".$b."*".$c."/".$d. "=10";
        break;

    //One Multiplication
    case $a*$b+$c+$d:
        echo $a."*".$b."+".$c."+".$d. "=10";
        break;
    case $a*$b+$c-$d:
        echo $a."*".$b."+".$c."-".$d. "=10";
        break;
    case $a*$b-$c+$d:
        echo $a."*".$b."-".$c."+".$d. "=10";
        break;
    case $a*$b-$c-$d:
        echo $a."*".$b."-".$c."-".$d. "=10";
        break;

    //One Division
    case $a/$b+$c+$d:
        echo $a."/".$b."+".$c."+".$d. "=10";
        break;
    case $a/$b+$c-$d:
        echo $a."/".$b."+".$c."-".$d. "=10";
        break;
    case $a/$b-$c+$d:
        echo $a."/".$b."-".$c."+".$d. "=10";
        break;
    case $a/$b-$c-$d:
        echo $a."/".$b."-".$c."-".$d. "=10";
        break;

    //Two Multiplications
    case $a*$b*$c+$d:
        echo $a."*".$b."*".$c."+".$d. "=10";
        break;
    case $a*$b*$c-$d:
        echo $a."*".$b."*".$c."-".$d. "=10";
        break;

    //One Multiplication and one division
    case $a*$b/$c+$d:
        echo $a."*".$b."/".$c."+".$d. "=10";
        break;
    case $a*$b/$c-$d:
        echo $a."*".$b."/".$c."-".$d. "=10";
        break;

    //Two Divisions
    case $a/$b/$c+$d:
        echo $a."/".$b."/".$c."+".$d. "=10";
        break;
    case $a/$b/$c-$d:
        echo $a."/".$b."/".$c."-".$d. "=10";
        break;

    //Brackets
    case $a*($b+$c)-$d:
        echo $a."(".$b."+".$c.")-".$d. "=10";
        break;
    case $a*($b+$c)+$d:
        echo $a."(".$b."+".$c.")+".$d. "=10";
        break;
    case $a*($b-$c)+$d:
        echo $a."(".$b."-".$c.")+".$d. "=10";
        break;
    case $a*($b-$c)-$d:
        echo $a."(".$b."-".$c.")-".$d. "=10";
        break;
    //2
    case $a*($b+$c+$d):
        echo $a."(".$b."+".$c."+".$d. ")=10";
        break;
    case $a*($b+$c-$d):
        echo $a."(".$b."+".$c."-".$d. ")=10";
        break;
    case $a*($b-$c+$d):
        echo $a."(".$b."-".$c."+".$d. ")=10";
        break;
    case $a*($b-$c-$d):
        echo $a."(".$b."-".$c."-".$d. ")=10";
        break;
    //3
    case $a/($b+$c)-$d:
        echo $a."/(".$b."+".$c.")-".$d. "=10";
        break;
    case $a/($b+$c)+$d:
        echo $a."/(".$b."+".$c.")+".$d. "=10";
        break;
    case $a/($b-$c)+$d:
        echo $a."/(".$b."-".$c.")+".$d. "=10";
        break;
    case $a/($b-$c)-$d:
        echo $a."/(".$b."-".$c.")-".$d. "=10";
        break;
    //4
    case $a/($b+$c+$d):
        echo $a."/(".$b."+".$c."+".$d. ")=10";
        break;
    case $a/($b+$c-$d):
        echo $a."/(".$b."+".$c."-".$d. ")=10";
        break;
    case $a/($b-$c+$d):
        echo $a."/(".$b."-".$c."+".$d. ")=10";
        break;
    case $a/($b-$c-$d):
        echo $a."/(".$b."-".$c."-".$d. ")=10";
        break;
    //5
    case $a*$b*($c+$d):
        echo $a."*".$b."(".$c."+".$d. ")=10";
        break;
    case $a*$b*($c-$d):
        echo $a."*".$b."(".$c."-".$d. ")=10";
        break;
    //6
    case $a*($b*$c+$d):
        echo $a."*(".$b."*".$c."+".$d. ")=10";
        break;
    case $a*($b*$c-$d):
        echo $a."*(".$b."*".$c."-".$d. ")=10";
        break;
    //7&8
    case $a*$b/($c+$d):
        echo $a."*".$b."/(".$c."+".$d. ")=10";
        break;
    case $a*$b/($c-$d):
        echo $a."*".$b."/(".$c."-".$d. ")=10";
        break;
    //9&10
    case $a/$b*($c+$d):
        echo $a."/".$b."*(".$c."+".$d. ")=10";
        break;
    case $a/$b*($c-$d):
        echo $a."/".$b."*(".$c."-".$d. ")=10";
        break;
    //11
    case $a/$b/($c+$d):
        echo $a."/".$b."/(".$c."+".$d. ")=10";
        break;
    case $a/$b/($c-$d):
        echo $a."/".$b."/(".$c."-".$d. ")=10";
        break;
    //12
    case $a/($b/$c+$d):
        echo $a."/(".$b."/".$c."+".$d. ")=10";
        break;
    case $a/($b/$c-$d):
        echo $a."/(".$b."/".$c."-".$d. ")=10";
        break;
    default:
        header("Location: calculation3.php?a=". $_GET["a"] ."&b=". $_GET["b"] ."&c=". $_GET["c"] ."&d=". $_GET["d"] ."");
}
?>
<br>
<br>
<a href="index.php">Go back</a>
