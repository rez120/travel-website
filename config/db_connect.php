<?php 

$conn = mysqli_connect("localhost","reza","","travel_db");
    if(!$conn){
        echo "Connection error: ".mysqli_connect_error();
    }

?>