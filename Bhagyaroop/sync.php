<?php
$con = mysqli_connect("localhost","root","","bhagya" ) or die ("error" . mysqli_error($con));

$view = mysqli_query($con,"SELECT * FROM `bhagyaroop_signup` ");
$row = mysqli_num_rows($view);
for($i=1; $i<=$row; $i++){
    $data = mysqli_fetch_assoc($view);
    $email = $data['semail'];
    $mobile = '+91'.$data['mobile'];

    // $insert = "INSERT INTO `profilepicture`(`email`, `profilepicture`) VALUES ('$email','')";
    // $insert = "INSERT INTO `hiddenitem`(`email`, `status`) VALUES ('$email','') ";
    // $insert = "INSERT INTO `hiddenphoto`(`email`, `status`) VALUES ('$email','') ";
    // $insert = "INSERT INTO `updated`(`email`, `CP`, `PN`, `UA`, `ADDR`, `UI`, `INCOME`, `UE`, `EDU`) VALUES ('$email','','','','','','','','')";
    // $insert = "UPDATE `users` SET `mobile`='$mobile' WHERE `email`='$email' ";
    $insert = "INSERT INTO `blocklist`(`email`, `status`) VALUES ('$email','') ";

    $execute = mysqli_query($con,$insert);
    if($execute == true){
        echo "Updated !<br>";
    }else{
        echo "Error !<br>";
    }

}

?>