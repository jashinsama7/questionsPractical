<!-- 
<?php
echo "Hello World";
?> -->




<!-- <?php
        $a = 200;
        $b = 140;
        $c = 90;
        echo " Numbers are $a , $b , $c <br>";
        if ($a > $b && $a > $c) {
            echo "$a is greatest";
        } else if ($b > $c) {
            echo "$b is greatest";
        } else {
            echo "$c is greatest";
        }
        ?> -->




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        Enter a number : <input type="number" name="num">
    </form>
</body>
</html>

<?php

    $num = $_GET['num'];

    if ($num % 2  == 0) {
        echo "[$num ] is  even!";
    } else {
        echo "[$num]  is  odd!";
    }
    ?>