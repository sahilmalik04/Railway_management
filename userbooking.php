<html>
    <style>
        body{
            background-color: lightgray;
        }
        </style>
        </html>
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

$query = "select * from booktic";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total != 0){
    echo"<h4 style='font-size: 20px; margin-left: 10px; font-weight: 900; color: red; text-decoration: underline';> History </h4>"; 
    ?>
        <table cellpadding="8">
            <tr>
                <th> fromcity </th>
                <th> tocity </th>
                <th> date </th>
                <th> passenger </th>
                <th> class </th>
                <th> booking_id </th>
            </tr>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        
        echo "<tr>
        <td> ".$result['fromcity']."</td>
        <td> ".$result['tocity']." </td>
        <td> ".$result['date']." </td>
        <td> ".$result['passenger']." </td>
        <td> ".$result['class']." </td>
        <td> ".$result['booking_id']." </td>
        </tr>";
    }
}else{
    echo "no records";
}
?>
</table>