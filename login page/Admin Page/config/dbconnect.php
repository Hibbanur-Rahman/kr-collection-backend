<?php 
    $server="localhost";
    $user="root";
    $password="";
    $db="House_of_vardha";


    $conn=mysqli_connect($server,$user,$password,$db);

    if(!$conn){
        die("connection Failed:".mysqli_connect_error());
    }
?>