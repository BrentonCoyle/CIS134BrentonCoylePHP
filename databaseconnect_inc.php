<?php

$host = "localhost";
$user= "root";
$password = "";
$database="bc_database";

$DBConnect = @new mysqli($host,$user,$password,$database);

if ($DBConnect->connect_error)
    echo "The database server is not available at the moment. " .
        "Connect Error is " . $DBConnect->connect_errno .
        " " . $DBConnect->connect_error . ".";
?>