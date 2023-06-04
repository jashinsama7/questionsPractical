<?php

$conn = mysqli_connect("localhost", "root", "", "reglog");

if (isset($_POST["submit"])) {
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($password == $row['password']) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            echo "Logged in Successfully";
        } else {
            echo
            "<script> alert('Wrong Password'); </script>";
        }
    } else {
        echo
        "<script> alert('User Not Registered'); </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <hr>
        <form class="" action="" method="post" autocomplete="off">
            <label for="usernameemail">Username or Email</label><br>
            <input type="text" name="usernameemail" id="usernameemail" required value=""> <br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" required value=""> <br>
            <button type="submit" name="submit">Login</button>
        </form>
        <br>
    </div>
</body>

</html>