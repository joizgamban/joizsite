<?php
session_start();

$conn = mysqli_connect('localhost', 'joiz', 'joizgamban12');

mysqli_select_db($conn, 'joizsite');

$name = $_POST['username'];
$password = $_POST['password'];

$s = " select * from users_register where username = '$name' && password = '$password'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
    $_SESSION['username'] = $name;
    header('location:welcome.php');
}
else{
    header('location:index.php');
}
?>