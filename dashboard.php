<?php
session_start();
?>
<?php
$name = $_SESSION['username'] ?? 'Guest';

?>

<!DOCTYPE html>
<html lang="en">


<?php include 'template/header.php' ?>

<body>
    <h1>Welcome <?php echo htmlspecialchars($name); ?></h1>
    <button> <a href="dashboard.php">Logout<?php unset($_SESSION['username']); ?></a></button>
</body>

</html>