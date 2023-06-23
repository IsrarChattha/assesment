<?php

global $username;
global $password;

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

echo $username;
echo $password;

$servername = 'localhost:3306';
$user = 'root';
$pass = 'adil123';
$dbName = 'users';

// Connection Establishment
$conn = mysqli_connect($servername, $user, $pass, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

////////////////////////////////////////////////
//Inserting username and password into users database


mysqli_close($conn);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form id="loginForm" action="login.php" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <label">Username</label>
                        <input type="text" name="username">
                </div>
                <div class="col-md-6">
                    <label">Password</label>
                        <input type="password" name="password">
                </div>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
    <script>
        $("#loginForm").ajaxSubmit({
            url: 'login.php',
            type: 'POST'
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>