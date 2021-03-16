<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <title> Railway_home </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container bg">
        <h1> Railway Management </h1>
        <hr>

        <a href="#"> Home </a>
        <a href="availabletrains.html"> Available Trains </a> 
        <a href="booktic.html"> Book Ticket </a>
        <a href="userbooking.php"> My Bookings </a> 
        <a href="#"> My Account</a>
        <a href="logout.php" onclick="confirm()">  Logout</a>
        <br> <br>
        <h2 style="color:white; display:inline;"> Welcome
        <h4 style="display: inline; color: gray;"> <?php  echo $_SESSION['username']; ?> </h2>
       
    </div>
</body>

</html>
<script> 
        function confirm(){
            alert("Are you Sure? ");
        }
</script>