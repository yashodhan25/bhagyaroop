<?php

include './../dbconnection.php';
$email = $_GET['email'];
$update = mysqli_query($con, "UPDATE `blocklist` SET `status`='' WHERE `email`='$email' ");
if($update == true){
    header('location:./block.php');
}

?>