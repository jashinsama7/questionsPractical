<!-- <?php
// Set the cookie
$c_name = "user";
$c_value = "John Smith";
$expiry_time = time() + (86400 * 30); // 30 days

setcookie($c_name, $c_value, $expiry_time, "/"); // "/" means the cookie is available for the entire website

// Access the cookie
if(isset($_COOKIE[$c_name])) {
    echo "Cookie value: " . $_COOKIE[$c_name];
} else {
    echo "Cookie not set.";
}
?> -->


<?php

// Start the session

session_start();
$_SESSION['username'] = 'JohnSmith';
$_SESSION['email'] = 'johnSmith@email.com';

// Access the session variables
echo "Username: " . $_SESSION['username'] . "<br>";
echo "Email: " . $_SESSION['email'];

session_abort();
?>