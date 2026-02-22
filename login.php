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

if ($result->num_rows > 0) {
    echo "Login Successful";
} else {
    echo "Invalid Login";
}
?>
