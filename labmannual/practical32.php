<!-- <?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "reglog");

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script> alert('Username or Email Has Already Taken'); </script>";
    } else {
        if ($password == $confirmpassword) {
            $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
            mysqli_query($conn, $query);
            echo "<script> alert('Registration Successful'); </script>";
        } else {
            echo "<script> alert('Password Does Not Match'); </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Registration</h2>
        <hr>
        <form method="post">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" required value=""> <br>
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username" required value=""> <br>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required value=""> <br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" required value=""> <br>
            <label for="confirmpassword">Confirm Password</label><br>
            <input type="password" name="confirmpassword" id="confirmpassword" required value=""> <br>
            <button type="submit" name="submit">Register</button>
        </form>
        <br>
    </div>
</body>

</html> -->


<?php
$conn = mysqli_connect("localhost", "root", "", "reglog");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tb_user";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No results found";
}
?>