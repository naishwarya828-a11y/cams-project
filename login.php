<?php
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];


$sql = "SELECT * FROM users 
        WHERE email='$email'
        AND password='$password'
        AND role='$role'";

$result = $conn->query($sql);

header("Location: dashboard.php");
exit();
 
?>
