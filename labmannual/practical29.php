<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        ConsumerNumber: <input type="text" name="cnum"><br>
        Name : <input type="text" name="name"><br>
        PreviousReading : <input type="number" name="previousR"><br>
        PresentReading :  <input type="number" name="presentR"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>


<?php

$cnum = $_GET['cnum'];
$name = $_GET['name'];
$previousR = $_GET['previousR'];
$presentR = $_GET['presentR'];

echo "<h1>ELECTRICITY BILL</h1><br>";

$unitConsumed  = $presentR - $previousR;
$bill = 0;

if ($unitConsumed  < 100) {
    $bill = $unitConsumed * 3;
}elseif($unitConsumed > 100 && $unitConsumed  < 200){
    $bill = $unitConsumed * 4;
}elseif($unitConsumed > 200 && $unitConsumed  < 300){
    $bill = $unitConsumed * 5;
}else{
    $bill = $unitConsumed * 6;
}


echo "ConsumerNumber : $cnum <br>";
echo "Name : $name<br>";
echo "Previous reading : $previousR<br>";
echo "Present Reading : $presentR<br>";
echo "Units Consumed : $unitConsumed<br>";
echo "Total Bill = $bill";

?>