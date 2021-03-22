<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);

if(!conn){
    die("sorry failed to establish a connection: ".mysqli_connect_error());
}
else{
    echo "connection was successfull";
}
?>