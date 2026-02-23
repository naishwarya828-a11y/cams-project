<?php
session_start();
include "db.php";

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "SELECT * FROM users 
            WHERE email='$email'
            AND password='$password'
            AND role='$role'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $role;

        header("Location: dashboard.php");
        exit();
    }
    else
    {
        echo "<script>alert('Invalid Login');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CAMS Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="login-container">

    <h2>CAMS Login</h2>

    <form method="POST">

        <input type="email" name="email" placeholder="Enter Email" required>

        <input type="password" name="password" placeholder="Enter Password" required>

        <select name="role">
            <option value="admin">Admin</option>
            <option value="student">Student</option>
        </select>

        <button type="submit" name="login">Login</button>

    </form>

</div>

</body>
</html>