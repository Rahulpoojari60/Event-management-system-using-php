<?php
session_start();
include_once 'classes/db1.php';

$usn = $_POST['usn'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($usn) || empty($password)) {
    echo "<script>
            alert('USN and Password are required');
            window.location.href='login.php';
          </script>";
    exit();
}

// Assuming the table name is 'users' and it contains columns 'usn' and 'password'
$sql = "SELECT * FROM users WHERE usn = '$usn' AND password = '$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['usn'] = $usn;
    echo "<script>
            alert('Login Successful');
            window.location.href='registered_events.php';
          </script>";
} else {
    echo "<script>
            alert('Invalid USN or Password');
            window.location.href='login.php';
          </script>";
}
?>
