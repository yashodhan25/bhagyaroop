<?php
session_start();
ob_start();

include './../dbconnection.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$_SESSION["userAdmin"] = $user;
$_SESSION["passAdmin"] = $pass;

if(!(isset($_SESSION['passAdmin']))){
    header("location:./");
}else{

    $query = "SELECT * FROM `admin` WHERE `username` ='$user' and `password` ='$pass' ";
    $run = mysqli_query($con,$query);
    $verify = mysqli_fetch_assoc($run);

    if($verify == true){
        header("location:./action.php");
    }else{
        session_destroy();
        header("location:./?a=1");
    }

}

ob_end_flush();
?>