<?php
session_start();
ob_start();
include './../dbconnection.php';
if(!(isset($_SESSION['passAdmin']))){
    header("location:./../login.php");
}

$email = $_POST["email"];
$pfile_name1 = $_FILES['fileToUpload1']['name']; // get file name
$pfile_name2 = $_FILES['fileToUpload2']['name']; // get file name
$pfile_name3 = $_FILES['fileToUpload3']['name']; // get file name
$pfile_name4 = $_FILES['fileToUpload4']['name']; // get file name
$pfile_name5 = $_FILES['fileToUpload5']['name']; // get file name
$pfile_name6 = $_FILES['fileToUpload6']['name']; // get file name

if($pfile_name1 !== NULL){
    $file_source_location1 = $_FILES['fileToUpload1']['tmp_name']; // get source path
    $file_target_location1 = "./documents/$pfile_name1"; // target location
    $move1 = move_uploaded_file($file_source_location1,$file_target_location1); //(temp folder,"Path");
}else{
    $pfile_name1 = "";
}

if($pfile_name2 !== NULL){
    $file_source_location2 = $_FILES['fileToUpload2']['tmp_name']; // get source path
    $file_target_location2 = "./documents/$pfile_name2"; // target location
    $move2 = move_uploaded_file($file_source_location2,$file_target_location2); //(temp folder,"Path");
}else{
    $pfile_name2 = "";
}

if($pfile_name3 !== NULL){
    $file_source_location3 = $_FILES['fileToUpload3']['tmp_name']; // get source path
    $file_target_location3 = "./documents/$pfile_name3"; // target location
    $move3 = move_uploaded_file($file_source_location3,$file_target_location3); //(temp folder,"Path");
}else{
    $pfile_name3 = "";
}

if($pfile_name4 !== NULL){
    $file_source_location4 = $_FILES['fileToUpload4']['tmp_name']; // get source path
    $file_target_location4 = "./documents/$pfile_name4"; // target location
    $move4 = move_uploaded_file($file_source_location4,$file_target_location4); //(temp folder,"Path");
}else{
    $pfile_name4 = "";
}

if($pfile_name5 !== NULL){
    $file_source_location5 = $_FILES['fileToUpload5']['tmp_name']; // get source path
    $file_target_location5 = "./documents/$pfile_name5"; // target location
    $move5 = move_uploaded_file($file_source_location5,$file_target_location5); //(temp folder,"Path");
}else{
    $pfile_name5 = "";
}

if($pfile_name6 !== NULL){
    $file_source_location6 = $_FILES['fileToUpload5']['tmp_name']; // get source path
    $file_target_location6 = "./documents/$pfile_name6"; // target location
    $move6 = move_uploaded_file($file_source_location6,$file_target_location6); //(temp folder,"Path");
}else{
    $pfile_name6 = "";
}


$update = "UPDATE `upload` SET `file1`='$pfile_name1',`file2`='$pfile_name2',`file3`='$pfile_name3',`file4`='$pfile_name4',`file9`='$pfile_name5',`file10`='$pfile_name6' WHERE `semail`='$email' "; 
$run = mysqli_query($con,$update);

if($run){
    header("location:./upload.php?a=1&email=$email");
}else{
    echo "Error ! ".mysqli_error($con);
}


ob_end_flush();
?>