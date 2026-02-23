<?php
session_start();

if(!isset($_SESSION['email']))
{
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="dashboard">

    <h1>Welcome <?php echo $_SESSION['role']; ?> 🎓</h1>

    <p><?php echo $_SESSION['email']; ?></p>

    <div class="menu">

        <a href="floor.php">Select Classroom Floor</a>

        <a href="logout.php">Logout</a>

    </div>

</div>

</body>
</html>