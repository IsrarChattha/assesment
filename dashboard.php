<?php
session_start();
include 'login.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'template/header.php' ?>

<body>
    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
    <button>
        <?php unset($_SESSION['username']); ?>
        <a href="index.php">Logout</a>
    </button>
</body>

</html>