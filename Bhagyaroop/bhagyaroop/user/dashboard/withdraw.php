<?php
session_start();
ob_start();
include './../../../dbconnection.php';
if(!(isset($_SESSION['user1']))){
    header("location:./../../login.php");
}

$sender = $_POST['sender'];
$receiver = $_POST['receiver'];

$updateStatus = "DELETE FROM `interest` WHERE `senderemail`='$sender' AND `receiveremail`='$receiver' ";
$updateStatusExecute = mysqli_query($con,$updateStatus);

if($updateStatusExecute == true){
    header("location:./?responce=3&page=0");
}else{
    echo "Error 1".mysqli_error($con);
}

ob_end_flush();
?>