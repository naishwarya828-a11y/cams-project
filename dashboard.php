<?php
session_start();

/* check login */
if(!isset($_SESSION['user'])){
    header("Location: login.html");
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

    <h2>Welcome to Classroom Management System</h2>

    <h3>Select Your Role</h3>

    <div class="container">

        <a href="floor.php?role=student">
            <button class="role-btn">Student</button>
        </a>

        <a href="floor.php?role=teacher">
            <button class="role-btn">Teacher</button>
        </a>

        <a href="floor.php?role=admin">
            <button class="role-btn">Admin</button>
        </a>

    </div>

    <br><br>

    <a href="logout.php">
        <button class="logout-btn">Logout</button>
    </a>

</body>
</html>