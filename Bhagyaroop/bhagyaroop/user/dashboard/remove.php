<?php
session_start();
ob_start();
include './../../../dbconnection.php';
if(!(isset($_SESSION['user1']))){
    header("location:./../../login.php");
}

/*
$obtainedRows = "SELECT * FROM `notification`";
$obtainedRowsExecute = mysqli_query($con, $obtainedRows);
$finalRows = mysqli_num_rows($obtainedRowsExecute);
for($i=1; $i<=$finalRows; $i++){
    $data = mysqli_fetch_assoc($obtainedRowsExecute);
    $email = $data['receiveremail'];
    echo $email."<br>";
}
*/

if(isset($_POST['event1'])){
    $serial = $_POST['serial'];
    $email1 = $_POST['email1'];
    $email2 = $_POST['email2']; 

    $remove = "DELETE FROM `notification` WHERE `remind`='$email1' AND `senderemail`='$email2' AND `serial`='$serial' ";
    $removeExecute = mysqli_query($con,$remove);
    if($removeExecute == true){
        $obtainedRows = "SELECT * FROM `notification`";
        $obtainedRowsExecute = mysqli_query($con, $obtainedRows);
        $finalRows = mysqli_num_rows($obtainedRowsExecute);
        for($i=1; $i<=$finalRows; $i++){
            $data = mysqli_fetch_assoc($obtainedRowsExecute);
            $email = $data['receiveremail'];
            $updateCount = mysqli_query($con, "UPDATE `notification` SET `serial`='$i' WHERE `receiveremail`='$email' ");
        }
        if($updateCount == true){
            header('location:./?page=0&deleted=0');
        }
    }
}else{
    echo "Error<br>";
}

if(isset($_POST['event2'])){
    $serial = $_POST['serial'];
    $email1 = $_POST['email1'];
    $email2 = $_POST['email2']; 

    $remove = "DELETE FROM `notification` WHERE `senderemail`='$email1' AND `receiveremail`='$email2' AND `serial`='$serial' ";
    $removeExecute = mysqli_query($con,$remove);
    if($removeExecute == true){
        $obtainedRows = "SELECT * FROM `notification`";
        $obtainedRowsExecute = mysqli_query($con, $obtainedRows);
        $finalRows = mysqli_num_rows($obtainedRowsExecute);
        for($i=1; $i<=$finalRows; $i++){
            $data = mysqli_fetch_assoc($obtainedRowsExecute);
            $email = $data['receiveremail'];
            $updateCount = mysqli_query($con, "UPDATE `notification` SET `serial`='$i' WHERE `receiveremail`='$email' ");
        }
        if($updateCount == true){
            header('location:./?page=0&deleted=0');
        }
    }
}else{
    echo "Error";
}

ob_end_flush();
?>