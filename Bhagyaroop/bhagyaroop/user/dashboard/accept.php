<?php
session_start();
ob_start();
include './../../../dbconnection.php';
if(!(isset($_SESSION['user1']))){
    header("location:./../../login.php");
}

$sender = $_POST['sender'];
$receiver = $_POST['receiver'];
$status = $_POST['status'];

$obtainedRows = "SELECT * FROM `notification`";
$obtainedRowsExecute = mysqli_query($con, $obtainedRows);
$finalRows = mysqli_num_rows($obtainedRowsExecute);
$count = $finalRows + 1;

$updateStatus = "DELETE FROM `interest` WHERE `senderemail`='$sender' AND `receiveremail`='$receiver' ";
$updateStatusExecute = mysqli_query($con,$updateStatus);

if($updateStatusExecute == true){

    $insertNotification = "INSERT INTO `notification`(`serial`, `senderemail`, `receiveremail`, `status`, `views`,`remind`) 
                           VALUES ('$count','$sender','$receiver','$status','pending','')";

    $insertNotificationExecute = mysqli_query($con,$insertNotification);
    if($insertNotificationExecute == true){
        header("location:./?responce=1&page=0");
    }else{
        echo "Error 1".mysqli_error($con);
    }

}else{
    echo "Error 1".mysqli_error($con);
}

ob_end_flush();
?>