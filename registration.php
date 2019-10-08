<?php

session_start();
header('location:index.php');

$conn = mysqli_connect('localhost', 'joiz', 'joizgamban12');

mysqli_select_db($conn, 'joizsite');

$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = " select * from users_register where username = '$name'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
    echo "Username Already Taken!";
}
else{
    $reg = "Insert into users_register(username, email, password) values ('$name', '$email', '$password')";
    mysqli_query($conn, $reg);
    echo "Registration Successful!";
}
?>