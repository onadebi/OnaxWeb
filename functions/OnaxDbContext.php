<?php

$server = "localhost.";
$username = "root";
$password ="";
$database = "";

$con = new mysqli($server, $username,$password,$database);

if(mysqli_connect_errno())
{
    echo "<script>alert('".mysql_connect_errno()."');</script>";
    echo "<h2><strong>Failed to connect to MySql: ".  mysqli_connect_error() ."</strong></h2>";
}

?>