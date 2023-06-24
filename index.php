<?php

session_start();


include 'login.php';


?>

<!DOCTYPE html>
<html lang="en">

<?php include 'template/header.php' ?>

<body>
    <h1>Home Page</h1>
    <form action="index.php" method="POST" id="myForm">
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