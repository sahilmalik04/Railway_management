<?php

session_start();

?>

<html>
    <head>
        <title> My account.in </title>
</head>

<body>
    <h3 style="display:inline;"> Name: </h3> 
<h4 style="display: inline; color: gray;"> <?php  echo $_SESSION['username']; ?> </h2> &nbsp;
<a href="#"> Edit </a>

</body>
</html>