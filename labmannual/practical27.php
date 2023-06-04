<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        Number 1 : <input type="number" name="num1"><br>
        NUmber 2 : <input type="number" name="num2"><br>
        <button type="submit">Swap</button>
    </form>
</body>

</html>

<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

echo "Numbers before swapping are num1 = $num1 and num2 = $num2<br>";

$temp  = $num1;
$num1 = $num2;
$num2 = $temp;

echo "Numbers after swapping are num1 = $num1 and num2 = $num2<br>";

?>