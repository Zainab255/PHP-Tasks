<?php
session_start();


if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}


$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?></h2>
    <p>This is the dashboard page. You can add your content here.</p>
    <a href="logout.php">Logout</a>
</body>
</html>


<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
?>