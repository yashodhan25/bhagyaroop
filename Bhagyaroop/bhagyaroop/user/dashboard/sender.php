<?php
session_start();
ob_start();
include './../../../dbconnection.php';
if(!(isset($_SESSION['user1']))){
    header("location:./../../login.php");
}

$sender = $_POST['sender'];
$receiver = $_POST['receiver'];

$obtainedRows = "SELECT * FROM `interest`";
$obtainedRowsExecute = mysqli_query($con, $obtainedRows);
$finalRows = mysqli_num_rows($obtainedRowsExecute);
$count = $finalRows + 1;

$insert = "INSERT INTO `interest`(`serial`, `senderemail`, `receiveremail`) VALUES ('$count','$sender','$receiver')";
$inserExecute = mysqli_query($con, $insert);
if($inserExecute == true){
    header("location:./profile.php?responce=1&email=$receiver");
}else{
    echo "Error !".mysqli_error($con);
}

ob_end_flush();
?>