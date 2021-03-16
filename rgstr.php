<?php

session_start();
$server_name = "localhost";
$username = "root";
$password = "";
$conn = new mysqli('localhost', 'root', '', 'railway');

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);    
}
$username = $_POST['username'];
$Name = $_POST['name'];
$LastName = $_POST['lstname'];
$Password = $_POST['pswrd'];
$Mobile = $_POST['phone'];
$Email = $_POST['email'];
$DOB = $_POST['dob'];
$Adress = $_POST['adress'];
$City = $_POST['city'];
$State = $_POST['state'];
$Country = $_POST['country'];

$s = " select * from registration where name = '$Name' ";

$result = mysqli_query($conn, $s);

$reg = "insert into registration(username, Name, LastName, Password, Mobile, Email, DOB, Adress, City, State, Country)
        values ('$username', '$Name', '$LastName', '$Password', '$Mobile', '$Email', '$DOB', '$Adress', '$City', '$State', '$Country')";
        mysqli_query($conn, $reg);
        echo ' <h3 style="color:green;"> Your account has been Registered successfully.. </h3> ';
        echo ' <h4> Now you can login at : </h4> ';
        echo ' <a href="login.html"> Login </a> ';
?>