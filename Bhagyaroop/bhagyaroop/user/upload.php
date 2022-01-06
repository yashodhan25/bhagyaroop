<?php
session_start();
ob_start();
include './../../dbconnection.php';
if(!(isset($_SESSION['user1']))){
    header("location:./../login.php");
}

$email = $_SESSION["user1"];

/* ------------------------------------------------------------------------------------------------------------ */

$pfile_name1 = $_FILES['fileToUpload1']['name']; // get file name
$pfile_name2 = $_FILES['fileToUpload2']['name']; // get file name
$pfile_name3 = $_FILES['fileToUpload3']['name']; // get file name
$pfile_name4 = $_FILES['fileToUpload4']['name']; // get file name
$pfile_name5 = $_FILES['fileToUpload5']['name']; // get file name
$pfile_name11 = $_FILES['fileToUpload11']['name']; // get file name

$pfile_name9 = $_FILES['fileToUpload9']['name']; // get file name
$pfile_name10 = $_FILES['fileToUpload10']['name']; // get file name

$pfile_name6 = $_FILES['fileToUpload6']['name']; // get file name
$pfile_name7 = $_FILES['fileToUpload7']['name']; // get file name
$pfile_name8 = $_FILES['fileToUpload8']['name']; // get file name
$pfile_name12 = $_FILES['fileToUpload12']['name']; // get file name
$pfile_name13 = $_FILES['fileToUpload13']['name']; // get file name
$pfile_name14 = $_FILES['fileToUpload14']['name']; // get file name
$pfile_name15 = $_FILES['fileToUpload15']['name']; // get file name

/* ------------------------------------------------------------------------------------------------------------ */

if($pfile_name9 !== NULL){
    $file_source_location9 = $_FILES['fileToUpload9']['tmp_name']; // get source path
    $file_target_location9 = "./documents/$pfile_name9"; // target location
    $move9 = move_uploaded_file($file_source_location9,$file_target_location9); //(temp folder,"Path");
}else{
    $pfile_name9 = "";
}

/* ------------------------------------------------------------------------------------------------------------ */

if($pfile_name10 !== NULL){
    $file_source_location10 = $_FILES['fileToUpload10']['tmp_name']; // get source path
    $file_target_location10 = "./documents/$pfile_name10"; // target location
    $move10 = move_uploaded_file($file_source_location10,$file_target_location10); //(temp folder,"Path");
}else{
    $pfile_name10 = "";
}

/* ------------------------------------------------------------------------------------------------------------ */

// Save Receipt
$file_source_location11 = $_FILES['fileToUpload11']['tmp_name']; // get source path
$file_target_location11 = "./documents/$pfile_name11"; // target location
$move11 = move_uploaded_file($file_source_location11,$file_target_location11); //(temp folder,"Path");

// save uploaded pdf

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


/* ------------------------------------------------------------------------------------------------------------ */

// save uploaded Image

$file_source_location6 = $_FILES['fileToUpload6']['tmp_name']; // get source path
$file_target_location6 = "./documents/$pfile_name6"; // target location
$move6 = move_uploaded_file($file_source_location6,$file_target_location6); //(temp folder,"Path");

$file_source_location7 = $_FILES['fileToUpload7']['tmp_name']; // get source path
$file_target_location7 = "./documents/$pfile_name7"; // target location
$move7 = move_uploaded_file($file_source_location7,$file_target_location7); //(temp folder,"Path");

$file_source_location8 = $_FILES['fileToUpload8']['tmp_name']; // get source path
$file_target_location8 = "./documents/$pfile_name8"; // target location
$move8 = move_uploaded_file($file_source_location8,$file_target_location8); //(temp folder,"Path");

if($pfile_name12 !== NULL){
    $file_source_location12 = $_FILES['fileToUpload12']['tmp_name']; // get source path
    $file_target_location12 = "./documents/$pfile_name12"; // target location
    $move12 = move_uploaded_file($file_source_location12,$file_target_location12); //(temp folder,"Path");
}else{
    $pfile_name12 = "";
}

if($pfile_name13 !== NULL){
    $file_source_location13 = $_FILES['fileToUpload13']['tmp_name']; // get source path
    $file_target_location13 = "./documents/$pfile_name13"; // target location
    $move13 = move_uploaded_file($file_source_location13,$file_target_location13); //(temp folder,"Path");
}else{
    $pfile_name13 = "";
}

if($pfile_name14 !== NULL){
    $file_source_location14 = $_FILES['fileToUpload14']['tmp_name']; // get source path
    $file_target_location14 = "./documents/$pfile_name14"; // target location
    $move14 = move_uploaded_file($file_source_location14,$file_target_location14); //(temp folder,"Path");
}else{
    $pfile_name14 = "";
}

if($pfile_name15 !== NULL){
    $file_source_location15 = $_FILES['fileToUpload15']['tmp_name']; // get source path
    $file_target_location15 = "./documents/$pfile_name15"; // target location
    $move15 = move_uploaded_file($file_source_location15,$file_target_location15); //(temp folder,"Path");
}else{
    $pfile_name15 = "";
}

/* ------------------------------------------------------------------------------------------------------------ */

$update = "UPDATE `upload` SET `file1`='$pfile_name1',`file2`='$pfile_name2',`file3`='$pfile_name3',`file4`='$pfile_name4',`file5`='$pfile_name5',`file6`='$pfile_name6',`file7`='$pfile_name7',`file8`='$pfile_name8',`file9`='$pfile_name9',`file10`='$pfile_name10',`file11`='$pfile_name11',`file12`='$pfile_name12',`file13`='$pfile_name13',`file14`='$pfile_name14',`file15`='$pfile_name15' WHERE `semail`='$email' "; 
$run = mysqli_query($con,$update);

if($run){
    header('location:./fileupload.php?a=1');
}else{
    echo "Error ! ".mysqli_error($con);
}

/* ------------------------------------------------------------------------------------------------------------ */

ob_end_flush();
?>