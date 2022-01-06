<?php
session_start();
ob_start();
include './../../../dbconnection.php';
if(!(isset($_SESSION['user1']))){
    header("location:./../../login.php");
}
$email = $_SESSION['user1'];

if(isset($_GET['photo1'])){
    $update = "UPDATE `upload` SET `file6`='' WHERE `semail`='$email' "; 
    $run = mysqli_query($con,$update);
    if($run){
        header('location:./photo.php');
    }else{
        echo "Error ! ".mysqli_error($con);
    }
}

if(isset($_GET['photo2'])){
    $update = "UPDATE `upload` SET `file7`='' WHERE `semail`='$email' ";
    $run = mysqli_query($con,$update);
    if($run){
        header('location:./photo.php');
    }else{
        echo "Error ! ".mysqli_error($con);
    } 
}

if(isset($_GET['photo3'])){
    $update = "UPDATE `upload` SET `file8`='' WHERE `semail`='$email' ";
    $run = mysqli_query($con,$update);
    if($run){
        header('location:./photo.php');
    }else{
        echo "Error ! ".mysqli_error($con);
    } 
}

if(isset($_GET['photo4'])){
    $update = "UPDATE `upload` SET `file12`='' WHERE `semail`='$email' "; 
    $run = mysqli_query($con,$update);
    if($run){
        header('location:./photo.php');
    }else{
        echo "Error ! ".mysqli_error($con);
    }
}

if(isset($_GET['photo5'])){
    $update = "UPDATE `upload` SET `file13`='' WHERE `semail`='$email' "; 
    $run = mysqli_query($con,$update);
    if($run){
        header('location:./photo.php');
    }else{
        echo "Error ! ".mysqli_error($con);
    }
}

if(isset($_GET['photo6'])){
    $update = "UPDATE `upload` SET `file14`='' WHERE `semail`='$email' "; 
    $run = mysqli_query($con,$update);
    if($run){
        header('location:./photo.php');
    }else{
        echo "Error ! ".mysqli_error($con);
    }
}

if(isset($_GET['photo7'])){
    $update = "UPDATE `upload` SET `file15`='' WHERE `semail`='$email' "; 
    $run = mysqli_query($con,$update);
    if($run){
        header('location:./photo.php');
    }else{
        echo "Error ! ".mysqli_error($con);
    }
}

ob_end_flush();
?>