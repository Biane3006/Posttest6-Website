<?php
ob_start();
session_start();
ob_end_clean();

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

if ($username == 'admin' && $password == '123' && $role == 'admin'){
    $_SESSION['admin'] = $username;
    header("Location: admin.php");
}else if($username == 'user' && $password == '123' && $role == 'user'){
    $_SESSION['siswa'] = $username;
    header("Location: user.php");
}else{
	header("Location: login.php?login_error");
}

?>

