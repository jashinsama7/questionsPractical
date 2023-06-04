<!-- <?php
$a = 3;
echo gettype($a) . "<br>";

$b = 3.2;
echo gettype($b) . "<br>";

$c = "Hello";
echo gettype($c) . "<br>";

$d = array();
echo gettype($d) . "<br>";

$e = array("red", "green", "blue");
echo gettype($e) . "<br>";

$f = NULL;
echo gettype($f) . "<br>";

$g = false;
echo gettype($g) . "<br>";
?> -->


<!-- <?php
$a = "32"; // string 
settype($a, "integer"); 
echo "$a<br>";


$b = 32; // integer 
settype($b, "string"); 
echo "$b<br>";

$c = true; // boolean 
settype($c, "integer");
echo "$c<br>"; 
?> -->

<!-- <?php
$a = 0;
// True because $a is set
if (isset($a)) {
  echo "True Variable 'a' is not null and is SET.<br>";
}

$b = null;
// False because $b is NULL
if (isset($b)) {
  echo "True Variable 'b' is not null and is SET.<br>";
}else{
    echo "False variable 'b' is null or not SET";
}
?> -->


<?php
$a = "Value of a is Present";
echo "The value of variable 'a' before unset: " . $a . "<br>";
unset($a);
echo "The value of variable 'a' after unset: ";
?>