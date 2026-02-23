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
<title>Select Floor</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="floor-container">

<h1>Select Floor</h1>

<div class="floor-cards">

<a href="classrooms.php?floor=1" class="floor-card">Floor 1</a>

<a href="classrooms.php?floor=2" class="floor-card">Floor 2</a>

<a href="classrooms.php?floor=3" class="floor-card">Floor 3</a>

</div>

<br>
<a href="dashboard.php" class="back-btn">⬅ Back</a>

</div>

</body>
</html>