<?php
// session_start();
ob_start();

include './../dbconnection.php';
$email = $_GET["email"];


$view = mysqli_query($con,"SELECT * FROM `bhagyaroop_signup` WHERE `semail` = '$email' ");
$row = mysqli_num_rows($view);
for($i=1; $i<=$row; $i++){
    $data = mysqli_fetch_assoc($view);

    $gender = $data['gender'];

    $v1=$data['reference'];
    $v2=$data['detail'];

    $v3=$data['aboutme'];
    $v4=$data['fullname'];
    $v5=$data['mname'];
    $v6=$data['lname'];
    $v7=$data['date'];
    $v8=$data['mar_stat'];
    $v9=$data['height'];
    $v10=$data['weight'];
    $v11=$data['shape'];
    $v12=$data['color'];
    $v13=$data['blood'];
    $v14=$data['language'];
    $v15=$data['pass_status'];
    $v16=$data['pass_details'];
    $v17=$data['disable'];
    $v18=$data['detail1'];
    $v19=$data['medical_history'];
    $v20=$data['detail2'];


    $v21=$data['medium_education'];
    $v22=$data['education_level'];
    $v23=$data['detail3'];
    $v24=$data['education_field'];
    $v25=$data['detail4'];
    $v26=$data['education_university'];
    $v27=$data['add_quali'];
    $v28=$data['add_laguage'];


    $v29=$data['occ'];
    $v30=$data['detail5'];
    $v31=$data['work_field'];
    $v32=$data['detail6'];
    $v33=$data['duration'];
    $v34=$data['company_name'];
    $v35=$data['designation'];
    $v36=$data['work_country'];
    $v37=$data['income'];


    $v38=$data['bdate'];
    $v39=$data['btime'];
    $v40=$data['bplace'];
    $v41=$data['village'];
    $v42=$data['bcity'];
    $v43=$data['state'];
    $v44=$data['bcountry'];
    $v45=$data['caste'];
    $v46=$data['detail7'];
    $v47=$data['subcaste'];
    $v48=$data['bmsign'];
    $v49=$data['constel'];
    $v50=$data['charan'];
    $v51=$data['gotra'];
    $v52=$data['gan'];
    $v53=$data['manglik'];
    $v54=$data['naad'];
    $v55=$data['horoscope_status'];
    $addv1 = $data['rashi'];


    $v56=$data['diet'];
    $v57=$data['detail8'];
    $v58=$data['smoking'];
    $v59=$data['drink'];
    $v60=$data['spec'];
    $v61=$data['sprots'];
    $v62=$data['hobbies'];


    $v63=$data['countr'];
    $v64=$data['detail9'];
    $v65=$data['address'];
    $v66=$data['pincode'];
    $v67=$data['mobile'];
    $ccode1 = $data['ccode1'];
    $v68=$data['mmobile'];
    $ccode2 = $data['ccode2'];
    $v69=$data['email'];
    $v70=$data['memail'];


    $v71=$data['refname'];
    $v72=$data['refmobile'];
    $v73=$data['refemail'];
    $v74=$data['refrelation'];
    $ccode3 = $data['ccode3'];
    
    $v75=$data['flive'];
    $v76=$data['focc'];
    $v77=$data['fdetail'];
    $v78=$data['fnplace'];
    $v79=$data['mlive'];
    $v80=$data['mocc'];
    $v81=$data['msur'];
    $v82=$data['mnp'];
    $v83=$data['nbro'];
    $v84=$data['broms'];
    $v85=$data['nsis'];
    $v86=$data['sisms'];
    $v87=$data['aboutf'];
    $v88=$data['familymedhis'];
    $v89=$data['famildis'];
    $v90=$data['detail10'];
    
    
    $v91=$data['marital_stst'];
    $v92=$data['castes'];
    $v93=$data['detail11'];
    $v94=$data['sub_cast'];
    $v95=$data['heigh'];
    $v96=$data['weigh'];
    $v97=$data['differce_in_age'];
    $v98=$data['level'];
    $v99=$data['detail15'];
    $v100=$data['field'];
    $v101=$data['detail16'];
    $v102=$data['parner'];
    $v103=$data['occupation'];
    $v104=$data['detail12'];
    $v105=$data['country'];
    $v106=$data['city'];
    $v107=$data['diets'];
    $v108=$data['detail13'];
    $v109=$data['smoke'];
    $v110=$data['drin'];
    $v111=$data['other'];
    $v112=$data['dnd'];
    $v113=$data['detail14'];
}


/*
$view = mysqli_query($con,"SELECT * FROM `bhagyaroop_signup` ");
$row = mysqli_num_fields($view);

for($i=1; $i<=$row; $i++){
    $data = mysqli_fetch_field($view);
    $colums = "{$data->name}";
    $colums1 = "'$colums'";
    $var1 = "$";
    $var2 = "v";
    echo $var1."".$var2."".$i."=".$var1."data[".$colums1."];<br>";
}
*/

ob_end_flush();
?>