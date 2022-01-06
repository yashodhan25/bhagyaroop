<?php
session_start();
ob_start();

include './../dbconnection.php';

$user = $_POST['email'];
$pass = $_POST['pass'];

$_SESSION["user1"] = $user;
$_SESSION["pass1"] = $pass;

if(!(isset($_SESSION['user1']))){
    header("location:./");
}else{

    $blockStatus = mysqli_num_rows( mysqli_query($con,"SELECT * FROM `blocklist` WHERE `status`='blocked' AND `email`='$user' ") );
    
    if($blockStatus >= 1){
        session_destroy();
        header("location:./login.php?block=1");
    }else{
        $query = "SELECT * FROM `users` WHERE `email` ='$user' and `password` ='$pass' ";
        $run = mysqli_query($con,$query);
        $verify = mysqli_fetch_assoc($run);

        if($verify == true){
            header("location:./user/plan.php");
        }else{
            session_destroy();
            header("location:./login.php?a=1");
        }
    }

}

ob_end_flush();
?>