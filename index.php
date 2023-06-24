<?php

include 'login.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        form {
            margin-top: 10%;
            margin-left: 40%;
        }

        h1 {
            text-align: center;
        }

        #redColor {
            color: red;
        }

        #btn-submit {
            margin-top: 20px;
        }
    </style>

</head>

<body>
    <h1>Home Page</h1>
    <form action="index.php" method="POST">
        <label>Username</label>
        <input type="text" name="username">
        <div id="redColor"><?php echo htmlspecialchars($errors['username']); ?></div>
        <br> <br>
        <label>Password</label>
        <input type="password" name="password">
        <div id="redColor"><?php echo htmlspecialchars($errors['password']); ?></div>
        <!-- submit button -->
        <input type="submit" name="submit" value="Submit" id="btn-submit">
    </form>
</body>

</html>