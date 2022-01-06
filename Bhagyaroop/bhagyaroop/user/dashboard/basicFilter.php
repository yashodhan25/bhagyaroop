<?php

// include './../../../dbconnection.php';

$obtainArray = array(); 

$columnArray = array(); 


// Get Marrital Status

if(!(isset($_POST['marital_status']))){
    $marital_status_query_final = "";
}else{
    $arr0 = $_POST['marital_status']; // Array 0
    $len0 = sizeof($arr0);
    $marital_status_query = "";
    for ($a=0; $a< $len0;$a++){
        $marital_status = $arr0[$a];
        $marital_status_query = $marital_status_query."'".$marital_status."', ";
    }
    $marital_status_query_final = rtrim($marital_status_query, ", ");
    array_push($obtainArray,"$marital_status_query_final");
    array_push($columnArray,"`mar_stat`");
}


// Get Educational Level
if(!(isset($_POST['educational_level']))){
    $educational_level_query_final = "";
}else{
    $arr1 = $_POST['educational_level']; // Array 1
    $len1 = sizeof($arr1);
    $educational_level_query = "";
    for ($b=0; $b< $len1;$b++){
        $educational_level = $arr1[$b];
        $educational_level_query = $educational_level_query."'".$educational_level."', ";
    }
    $educational_level_query_final = rtrim($educational_level_query, ", ");
    array_push($obtainArray,"$educational_level_query_final");
    array_push($columnArray,"`education_field`");
}

// Get Annual Income
if(!(isset($_POST['annual_income']))){
    $annual_income_query_final = "";
}else{
    $arr2 = $_POST['annual_income']; // Array 2
    $len2 = sizeof($arr2);
    $annual_income_query = "";
    for ($c=0; $c< $len2;$c++){
        $annual_income = $arr2[$c];
        $annual_income_query = $annual_income_query."'".$annual_income."', ";
    }
    $annual_income_query_final = rtrim($annual_income_query, ", ");
    array_push($obtainArray,"$annual_income_query_final");
    array_push($columnArray,"`income`");
}

// Get Birth Year
if(!(isset($_POST['birth_year']))){
    $birth_year_query_final = "";
}else{
    $arr4_value = $_POST['birth_year']; // Array 4

    if($arr4_value == ""){
        $birth_year_query_final = "";
    }else{
        include 'birthyear.php';
        $len4 = sizeof($arr4);
        $birth_year_query = "";
        for ($e=0; $e< $len4;$e++){
            $birth_year = $arr4[$e];
            $birth_year_query = $birth_year_query."'".$birth_year."', ";
        }
        $birth_year_query_final = rtrim($birth_year_query, ", ");
        array_push($obtainArray,"$birth_year_query_final");
        array_push($columnArray,"`birth_year`");
    }
}

// Get Height

if(!(isset($_POST['height_cm']))){
    $height_cm_query_final = "";
}else{
    $arr5_value = $_POST['height_cm']; // Array 5

    if($arr5_value == ""){
        $height_cm_query_final = "";
    }else{
        include 'height.php';
        $len5 = sizeof($arr5);
        $height_cm_query = "";
        for ($f=0; $f< $len5;$f++){
            $height_cm = $arr5[$f];
            $height_cm_query = $height_cm_query."'".$height_cm."', ";
        }
        $height_cm_query_final = rtrim($height_cm_query, ", ");
        array_push($obtainArray,"$height_cm_query_final");
        array_push($columnArray,"`height`");
    }

}

// Get Cast
if(!(isset($_POST['caste']))){
    $caste_query_final = "";
}else{
    $arr3 = $_POST['caste']; // Array 3
    $len3 = sizeof($arr3);
    $caste_query = "";
    for ($d=0; $d< $len3;$d++){
        $caste = $arr3[$d];
        $caste_query = $caste_query."'".$caste."', ";
    }
    $caste_query_final = rtrim($caste_query, ", ");
    array_push($obtainArray,"$caste_query_final");
    array_push($columnArray,"`caste`");
}


// Get Diet

if(!(isset($_POST['diet']))){
    $diet_query_final = "";
}else{
    $arr6 = $_POST['diet']; // Array 1
    $len6 = sizeof($arr6);
    $diet_query = "";
    for ($g=0; $g< $len6;$g++){
        $diet = $arr6[$g];
        $diet_query = $diet_query."'".$diet."', ";
    }
    $diet_query_final = rtrim($diet_query, ", ");
    array_push($obtainArray,"$diet_query_final");
    array_push($columnArray,"`diet`");
}

if(!(isset($_POST['smooking']))){
    $smooking_query_final = "";
}else{
    // Get Smooking
    $arr7 = $_POST['smooking']; // Array 3
    $len7 = sizeof($arr7);
    $smooking_query = "";
    for ($h=0; $h< $len7;$h++){
        $smooking = $arr7[$h];
        $smooking_query = $smooking_query."'".$smooking."', ";
    }
    $smooking_query_final = rtrim($smooking_query, ", ");
    array_push($obtainArray,"$smooking_query_final");
    array_push($columnArray,"`smoking`");
}

if(!(isset($_POST['drink']))){
    $drink_query_final = "";
}else{
    // Get Drink
    $arr8 = $_POST['drink']; // Array 3
    $len8 = sizeof($arr8);
    $drink_query = "";
    for ($m=0; $m< $len8;$m++){
        $drink = $arr8[$m];
        $drink_query = $drink_query."'".$drink."', ";
    }
    $drink_query_final = rtrim($drink_query, ", ");
    array_push($obtainArray,"$drink_query_final");
    array_push($columnArray,"`drink`");
}

if(!(isset($_POST['spl']))){
    $spl_query_final = "";
}else{
    // Get spl
    $arr9 = $_POST['spl']; // Array 3
    $len9 = sizeof($arr9);
    $spl_query = "";
    for ($l=0; $l< $len9;$l++){
        $spl = $arr9[$l];
        $spl_query = $spl_query."'".$spl."', ";
    }
    $spl_query_final = rtrim($spl_query, ", ");
    array_push($obtainArray,"$spl_query_final");
    array_push($columnArray,"`spec`");
}

if(!(isset($_POST['rashi']))){
    $rashi_query_final = "";
}else{
    // Get Rashi
    $arr10 = $_POST['rashi']; // Array 3
    $len10 = sizeof($arr10);
    $rashi_query = "";
    for ($o=0; $o< $len10;$o++){
        $rashi = $arr10[$o];
        $rashi_query = $rashi_query."'".$rashi."', ";
    }
    $rashi_query_final = rtrim($rashi_query, ", ");
    array_push($obtainArray,"$rashi_query_final");
    array_push($columnArray,"`rashi`");
}

if(!(isset($_POST['naadi']))){
    $naadi_query_final = "";
}else{
    // Get Naadi
    $arr11 = $_POST['naadi']; // Array 3
    $len11 = sizeof($arr11);
    $naadi_query = "";
    for ($p=0; $p< $len11;$p++){
        $naadi = $arr11[$p];
        $naadi_query = $naadi_query."'".$naadi."', ";
    }
    $naadi_query_final = rtrim($naadi_query, ", ");
    array_push($obtainArray,"$naadi_query_final");
    array_push($columnArray,"`naad`");
}

if(!(isset($_POST['manglik']))){
    $manglik_query_final = "";
}else{
    // Get Manglik
    $arr12 = $_POST['manglik']; // Array 3
    $len12 = sizeof($arr12);
    $manglik_query = "";
    for ($r=0; $r< $len12;$r++){
        $manglik = $arr12[$r];
        $manglik_query = $manglik_query."'".$manglik."', ";
    }
    $manglik_query_final = rtrim($manglik_query, ", ");
    array_push($obtainArray,"$manglik_query_final");
    array_push($columnArray,"`manglik`");
}


// Get Country
$user_Country = $_POST['country'];

// Get Language
$lang_known = $_POST['lang_known'];

// Get Mother Tounge
$mother_tounge = $_POST['mother_tounge'];




$obtainArraySize = sizeof($obtainArray);
$columnArraySize = sizeof($columnArray);

$obtainQuery = "";
for($obtainValues=0; $obtainValues<$columnArraySize; $obtainValues++){
    $col = $columnArray[$obtainValues];
    $val = $obtainArray[$obtainValues];

    $obtainQuery = $obtainQuery."AND ".$col." IN (".$val.") ";
}


// Query for Basic Search
$filterQuery = "SELECT * FROM `bhagyaroop_signup`       

                WHERE 

                `payment_status`='paid'
                AND `gender`='$requiredgender'

                $obtainQuery

                AND `bcountry` LIKE '%$user_Country%'
                AND `add_laguage` LIKE '%$lang_known%'
                AND `language` LIKE '%$mother_tounge%'
                
                ";


/* --------------------------------------------------- */

$obtain = mysqli_query($con,$filterQuery);
$obtainRows = mysqli_num_rows($obtain);

// Counting Row after all Filterations
$addonobtain = mysqli_query($con,$filterQuery);
$addonobtainRows = mysqli_num_rows($addonobtain);

if($addonobtainRows != 0){
    
    $email_people1 = "";
    for($addon=0; $addon<=$addonobtainRows; $addon++){

        $addonobtainData = mysqli_fetch_assoc($addonobtain);

        $addon_person_dnd = $addonobtainData['dnd'];
        $addon_email_people = $addonobtainData['semail'];

        if($addon_person_dnd == "Any" || strpos("$addon_person_dnd", "$v45") !== false){
            $email_people1 = $email_people1."'".$addon_email_people."', ";
        }

    }

    if($email_people1 != ""){
        $email_people1 = rtrim($email_people1, ", ");
        $resultFound = mysqli_num_rows(mysqli_query($con,"SELECT * FROM `bhagyaroop_signup` WHERE `semail` IN ($email_people1) "));
    }else{
        $resultFound = 0;
    }
    
}else{
    $resultFound = 0;
}
?>