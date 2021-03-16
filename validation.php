<?php

session_start();
$server_name = "localhost";
$username = "root";
$password = "";
$conn = new mysqli('localhost', 'root', '', 'railway');

if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$s = "select * from registration where username = '$username' && password = '$password' ";

$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num ==1){
    $_SESSION['username'] = $username;
    header('location: home.php'); 
}
else{
    echo"Incorrect Email And Password";
}
?>