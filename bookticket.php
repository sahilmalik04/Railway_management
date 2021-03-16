<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "malik0088";
$conn = new mysqli('localhost', 'root', '', 'railway');

if ($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}
echo"";

mysqli_select_db($conn, 'railway');

$fromcity = $_POST['fromcity'];
$tocity = $_POST['tocity'];
$date = $_POST['date'];
$passenger = $_POST['box'];
$class = $_POST['boxes'];
$booking_id = (rand(100,10000));


$s = " select * from booktic where fromcity = '$fromcity' ";

$result = mysqli_query($conn, $s);

$reg = "insert into booktic(fromcity, tocity, date, passenger, class, booking_id)
        values ('$fromcity', '$tocity', '$date', '$passenger', '$class', '$booking_id')";
        mysqli_query($conn, $reg);
        echo('<h2 style="color:green;"> Your Tickets has been booked successfully.......</h2>');
        echo('<h4> Booking Details: </h4>');
        echo "<table cellpadding='8' border='2' style=' padding: 8px; text-align: center; margin-top:8px ';
        <tr>
        <th> From City </th>
        <th> To </th> 
        <th> Date </th>
        <th> Passenger </th>
        <th> Class </th> 
        <th> Booking_id </th>
        </tr>

        <tr> 
        <td> $fromcity </td>
        <td> $tocity </td>
        <td> $date </td>
        <td> $passenger </td>
        <td> $class </td>
        <td> $booking_id </td>
        </tr> 
        </table> 
        <button style='background-color:black; color: white; font-weight:bold;cursor:pointer; margin-top: 20px ';> Print Receipt </button>"; 

?>


<html>
    <style>
        body{
            margin-top:20px;
        }
    </style>
<html>