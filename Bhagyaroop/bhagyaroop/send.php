<?php

include './../dbconnection.php';

$first_name = $_POST['fname'];
$middle_name = $_POST['mname'];
$last_name = $_POST['lname'];

$full_name = $first_name." ".$middle_name." ".$last_name;

$gender = $_POST['r'];
$email = $_POST['email'];
$caste = $_POST['caste'];
$mobile = $_POST['code']."".$_POST['mobile'];
$pass = $_POST['pass1'];

$date = date("Y-m-d");

$insert = "INSERT INTO `users`(`full_name`, `email`,`mobile`, `gender`, `password`, `createDate`, `PID`) VALUES ('$full_name','$email','$mobile','$gender','$pass','$date','')";
$run = mysqli_query($con,$insert);

$insert1 = "INSERT INTO `bhagyaroop_signup`(`semail`, `reference`, `detail`, `aboutme`, `fullname`, `mname`, `lname`, `date`, `mar_stat`, `height`, `weight`, `shape`, `color`, `blood`, `language`, `pass_status`, `pass_details`, `disable`, `detail1`, `medical_history`, `detail2`, `medium_education`, `education_level`, `detail3`, `education_field`, `detail4`, `education_university`, `add_quali`, `add_laguage`, `occ`, `detail5`, `work_field`, `detail6`, `duration`, `company_name`, `designation`, `work_country`, `income`, `bdate`, `btime`, `bplace`, `village`, `bcity`, `state`, `bcountry`, `caste`, `detail7`, `subcaste`, `bmsign`, `constel`, `charan`, `gotra`, `gan`, `manglik`, `naad`, `horoscope_status`, `diet`, `detail8`, `smoking`, `drink`, `spec`, `sprots`, `hobbies`, `countr`, `detail9`, `address`, `pincode`, `mobile`, `mmobile`, `email`, `memail`, `refname`, `refmobile`, `refemail`, `refrelation`, `flive`, `focc`, `fdetail`, `fnplace`, `mlive`, `mocc`, `msur`, `mnp`, `nbro`, `broms`, `nsis`, `sisms`, `aboutf`, `familymedhis`, `famildis`, `detail10`, `marital_stst`, `castes`, `detail11`, `sub_cast`, `heigh`, `weigh`, `differce_in_age`, `level`, `detail15`, `field`, `detail16`, `parner`, `occupation`, `detail12`, `country`, `city`, `diets`, `detail13`, `smoke`, `drin`, `other`, `dnd`, `detail14`, `rashi`, `gender`, `birth_year`, `payment_status`,`ccode1`, `ccode2`, `ccode3`) VALUES ('$email','','','','$first_name','$middle_name','$last_name','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','$caste','','','','','','','','','','','','','','','','','','','','','','','','$email','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','$gender','','','','','')";
$run1 = mysqli_query($con,$insert1);

$insert2 = "INSERT INTO `upload`(`semail`, `file1`, `file2`, `file3`, `file4`, `file5`, `file6`, `file7`, `file8`, `file9`, `file10`, `file11`, `file12`, `file13`, `file14`, `file15`) VALUES ('$email','','','','','','','','','','','','','','','')";
$run2 = mysqli_query($con,$insert2);

$insert3 = "INSERT INTO `usertype`(`email`, `type`, `status`, `paydate`) VALUES ('$email','','','$date')";
$run3 = mysqli_query($con,$insert3);

$insert4 = "INSERT INTO `verify`(`email`, `file1`, `file2`, `file3`, `file4`, `file3`, `file4`) VALUES ('$email','','','','','','')";
$run4 = mysqli_query($con,$insert4);

// New Added

$insert5 = "INSERT INTO `profilepicture`(`email`, `profilepicture`) VALUES ('$email','')";
$run5 = mysqli_query($con,$insert5);

$insert6 = "INSERT INTO `hiddenitem`(`email`, `status`) VALUES ('$email','') ";
$run6 = mysqli_query($con,$insert6);

$insert7 = "INSERT INTO `hiddenphoto`(`email`, `status`) VALUES ('$email','') ";
$run6 = mysqli_query($con,$insert7);

$insert8 = "INSERT INTO `updated`(`email`, `CP`, `PN`, `UA`, `ADDR`, `UI`, `INCOME`, `UE`, `EDU`) VALUES ('$email','','','','','','','','')";
$run8 = mysqli_query($con,$insert8);

$insert9 = "INSERT INTO `blocklist`(`email`, `status`) VALUES ('$email','') ";
$run9 = mysqli_query($con,$insert9);

if($run2){
    header('location:./?a=1');
}else{
    //echo "Error ! ".mysqli_error($con);
    header('location:./?b=1');
}
?>