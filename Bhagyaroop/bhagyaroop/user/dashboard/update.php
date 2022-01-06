<?php
session_start();
ob_start();

// error_reporting(0);

include './../../../dbconnection.php';

$email = $_SESSION["user1"];

if($_POST['step'] == 1){
    $a110 = $_POST['user'];
    $a111 = $_POST['referance'];

    $a1 = $_POST['aboutme'];
    $a2 = $_POST['fn'];
    $a112 = $_POST['mname'];
    $a113 = $_POST['lname'];
    $a3 = $_POST['db'];
    $a4 = $_POST['ms'];
    $a5 = $_POST['height'];
    $a6 = $_POST['weight'];
    $a7 = $_POST['btype'];
    $a8 = $_POST['comp'];
    $a9 = $_POST['blgrp'];
    $a10 = $_POST['mtg'];
    $a11 = $_POST['pp'];
    $a12 = $_POST['pp1'];
    $a13 = $_POST['disa'];
    $a14 = $_POST['disa1'];
    $a15 = $_POST['mdh'];
    $a16 = $_POST['mdh1'];

    $update = "UPDATE `bhagyaroop_signup` SET `reference`='$a110',`detail`='$a111',`aboutme`='$a1',`fullname`='$a2',`mname`='$a112',`lname`='$a113',`date`='$a3',`mar_stat`='$a4',`height`='$a5',`weight`='$a6',`shape`='$a7',`color`='$a8',`blood`='$a9',`language`='$a10',`pass_status`='$a11',`pass_details`='$a12',`disable`='$a13',`detail1`='$a14',`medical_history`='$a15',`detail2`='$a16' WHERE `semail`='$email' "; 

    $run = mysqli_query($con,$update);

    if($run){
        header('location:./edit.php?a=1&step=1');
    }else{
        header('location:./edit.php?q=1&step=1');
        //echo "Error !".mysqli_error($con);
    }

}

if($_POST['step'] == 2){

    $a17 = $_POST['edm'];

    $arr1 = $_POST['edl']; // Array

    $a18 = "";
    $len1 = sizeof($arr1);
    for ($a=0; $a< $len1;$a++){
        $a18 = $a18.$arr1[$a];
        if($a < $len1-1){
            $a18 = $a18." ,";
        }    
    }


    $a19 = $_POST['edl1'];
    $a20 = $_POST['edf'];
    $a21 = $_POST['edf1'];
    $a22 = $_POST['euc'];
    $a23 = $_POST['aqf'];
    $a24 = $_POST['alg'];

    $update = "UPDATE `bhagyaroop_signup` SET `medium_education`='$a17',`education_level`='$a18',`detail3`='$a19',`education_field`='$a20',`detail4`='$a21',`education_university`='$a22',`add_quali`='$a23',`add_laguage`='$a24' WHERE `semail`='$email' "; 

    $run = mysqli_query($con,$update);

    if($run){
        header('location:./edit.php?a=1&step=2');
    }else{
        header('location:./edit.php?q=1&step=2');
        //echo "Error !".mysqli_error($con);
    }


}

if($_POST['step'] == 3){
    $a25 = $_POST['occ'];
    $a26 = $_POST['occ1'];
    $a27 = $_POST['wfie'];
    $a28 = $_POST['wfie1'];
    $a29 = $_POST['dym'];
    $a30 = $_POST['cbn'];
    $a31 = $_POST['desgn'];
    $a32 = $_POST['wcc'];
    $a33 = $_POST['annin'];

    $update = "UPDATE `bhagyaroop_signup` SET `occ`='$a25',`detail5`='$a26',`work_field`='$a27',`detail6`='$a28',`duration`='$a29',`company_name`='$a30',`designation`='$a31',`work_country`='$a32',`income`='$a33' WHERE `semail`='$email' "; 

    $run = mysqli_query($con,$update);

    if($run){
        header('location:./edit.php?a=1&step=3');
    }else{
        header('location:./edit.php?q=1&step=3');
        //echo "Error !".mysqli_error($con);
    }
}

if($_POST['step'] == 4){
    $a34 = $_POST['wife'];
    $a35 = $_POST['time'];
    $a36 = $_POST['bp'];
    $a37 = $_POST['vi'];
    $a38 = $_POST['vc'];
    $a39 = $_POST['stc'];
    $a40 = $_POST['couE'];
    $a41 = $_POST['c'];
    $a42 = $_POST['c1'];
    $a43 = $_POST['s'];
    $a44 = $_POST['bms'];
    $a45 = $_POST['cont'];
    $a46 = $_POST['ss'];
    $a47 = $_POST['gotr'];
    $a48 = $_POST['gan'];
    $a49 = $_POST['man'];
    $a50 = $_POST['nad'];
    $a51 = $_POST['hor'];
    $add1 = $_POST['rashi'];
    $birth_date_year = substr($a34, 0, 4);

    $update = "UPDATE `bhagyaroop_signup` SET `bdate`='$a34',`btime`='$a35',`bplace`='$a36',`village`='$a37',`bcity`='$a38',`state`='$a39',`bcountry`='$a40',`caste`='$a41',`detail7`='$a42',`subcaste`='$a43',`bmsign`='$a44',`constel`='$a45',`charan`='$a46',`gotra`='$a47',`gan`='$a48',`manglik`='$a49',`naad`='$a50',`horoscope_status`='$a51',`rashi`='$add1', `birth_year`='$birth_date_year' WHERE `semail`='$email' "; 
    $run = mysqli_query($con,$update);

    if($run){
        header('location:./edit.php?a=1&step=4');
    }else{
        header('location:./edit.php?q=1&step=4');
        //echo "Error !".mysqli_error($con);
    }
}

if($_POST['step'] == 5){
    $a52 = $_POST['diet'];
    $a53 = $_POST['diet1'];
    $a54 = $_POST['smoke'];
    $a55 = $_POST['drink'];
    $a56 = $_POST['splt'];
    $a57 = $_POST['sfrts'];
    $a58 = $_POST['hobi'];

    $update = "UPDATE `bhagyaroop_signup` SET `diet`='$a52',`detail8`='$a53',`smoking`='$a54',`drink`='$a55',`spec`='$a56',`sprots`='$a57',`hobbies`='$a58' WHERE `semail`='$email' "; 
    $run = mysqli_query($con,$update);

    if($run){
        header('location:./edit.php?a=1&step=5');
    }else{
        header('location:./edit.php?q=1&step=5');
        //echo "Error !".mysqli_error($con);
    }
}

if($_POST['step'] == 6){
    $a59 = $_POST['coun'];
    $a60 = $_POST['coun1'];
    $a61 = $_POST['addr'];
    $a62 = $_POST['pin'];
    $a63 = $_POST['snum'];
    $a64 = $_POST['bnum'];
    $a65 = $_POST['manem'];
    $a66 = $_POST['mfemail'];
    $ccode1 = $_POST['ccode1'];
    $ccode2 = $_POST['ccode2'];

    $update = "UPDATE `bhagyaroop_signup` SET `ccode1`='$ccode1', `ccode2`='$ccode2', `countr`='$a59',`detail9`='$a60',`address`='$a61',`pincode`='$a62',`mobile`='$a63',`mmobile`='$a64',`email`='$a65',`memail`='$a66' WHERE `semail`='$email' "; 
    $run = mysqli_query($con,$update);

    if($run){
        header('location:./edit.php?a=1&step=6');
    }else{
        header('location:./edit.php?q=1&step=6');
        //echo "Error !".mysqli_error($con);
    }

}

if($_POST['step'] == 7){

    $a67 = $_POST['reln'];
    $a68 = $_POST['remail'];
    $a69 = $_POST['remob'];
    $a70 = $_POST['relmeb'];
    $ccode3 = $_POST['ccode3'];

    $update = "UPDATE `bhagyaroop_signup` SET `ccode3`='$ccode3', `refname`='$a67',`refmobile`='$a68',`refemail`='$a69',`refrelation`='$a70' WHERE `semail`='$email' "; 
    $run = mysqli_query($con,$update);

    if($run){
        header('location:./edit.php?a=1&step=7');
    }else{
        header('location:./edit.php?q=1&step=7');
        //echo "Error !".mysqli_error($con);
    }

}

if($_POST['step'] == 8){
    $a71 = $_POST['fath'];
    $a72 = $_POST['fatho'];
    $a73 = $_POST['fdt'];
    $a74 = $_POST['fdtn'];
    $a75 = $_POST['math'];
    $a76 = $_POST['matho'];
    $a77 = $_POST['mdt'];
    $a78 = $_POST['mdtn'];
    $a79 = $_POST['nb'];
    $a80 = $_POST['pay'];
    $a81 = $_POST['ns'];
    $a82 = $_POST['nmss'];
    $a83 = $_POST['afmaly'];
    $a84 = $_POST['fmh'];
    $a85 = $_POST['fdida'];
    $a86 = $_POST['fdida1'];

    $update = "UPDATE `bhagyaroop_signup` SET `flive`='$a71',`focc`='$a72',`fdetail`='$a73',`fnplace`='$a74',`mlive`='$a75',`mocc`='$a76',`msur`='$a77',`mnp`='$a78',`nbro`='$a79',`broms`='$a80',`nsis`='$a81',`sisms`='$a82',`aboutf`='$a83',`familymedhis`='$a84',`famildis`='$a85',`detail10`='$a86' WHERE `semail`='$email' "; 
    $run = mysqli_query($con,$update);

    if($run){
        header('location:./edit.php?a=1&step=8');
    }else{
        header('location:./edit.php?q=1&step=8');
        //echo "Error !".mysqli_error($con);
    }

}

if($_POST['step'] == 9){

    $arr0 = $_POST['a']; // Array 0
    $a87 = "";
    $len2 = sizeof($arr0);
    for ($b=0; $b< $len2;$b++){
        $a87 = $a87.$arr0[$b];
        if($b < $len2-1){
            $a87 = $a87." ,";
        }    
    }

    $arr1a = $_POST['b']; // Array 1
    $a88 = "";
    $len3 = sizeof($arr1a);
    for ($c=0; $c< $len3;$c++){
        $a88 = $a88.$arr1a[$c];
        if($c < $len3-1){
            $a88 = $a88." ,";
        }    
    }

    $a89 = $_POST['b1'];
    $a90 = $_POST['s1'];
    $a91 = $_POST['shet'];
    $a92 = $_POST['swe'];
    $a93 = $_POST['diffage'];

    $arr2 = $_POST['edfs']; // Array 2
    $a94 = "";
    $len4 = sizeof($arr2);
    for ($d=0; $d< $len4;$d++){
        $a94 = $a94.$arr2[$d];
        if($d < $len4-1){
            $a94 = $a94." ,";
        }    
    }


    $a95 = $_POST['edfs1'];
    
    $arr3 = $_POST['edls']; // array 3
    $a96 = "";
    $len5 = sizeof($arr3);
    for ($e=0; $e< $len5;$e++){
        $a96 = $a96.$arr3[$e];
        if($e < $len5-1){
            $a96 = $a96." ,";
        }    
    }

    $a97 = $_POST['edls1'];
    $a98 = $_POST['wptr'];

    $arr4 = $_POST['ocupp']; // array 4
    $a99 = "";
    $len6 = sizeof($arr4);
    for ($f=0; $f< $len6;$f++){
        $a99 = $a99.$arr4[$f];
        if($f < $len6-1){
            $a99 = $a99." ,";
        }    
    }

    $a100 = $_POST['ocupp1'];
    $a101 = $_POST['wptr2'];
    $a102 = $_POST['wptr3']; 

    $arr5 = $_POST['diets']; // array 5
    $a103 = "";
    $len7 = sizeof($arr5);
    for ($g=0; $g< $len7;$g++){
        $a103 = $a103.$arr5[$g];
        if($g < $len7-1){
            $a103 = $a103." ,";
        }    
    }

    $a104 = $_POST['diets1'];
    $a105 = $_POST['smokes'];
    $a106 = $_POST['drinks'];
    $a107 = $_POST['oecx'];

    $arr6 = $_POST['donot']; // array 6
    $a108 = "";
    $len8 = sizeof($arr6);
    for ($h=0; $h< $len8;$h++){
        $a108 = $a108.$arr6[$h];
        if($h < $len8-1){
            $a108 = $a108." ,";
        }
    }

    $update = "UPDATE `bhagyaroop_signup` SET `marital_stst`='$a87',`castes`='$a88',`detail11`='$a89',`sub_cast`='$a90',`heigh`='$a91',`weigh`='$a92',`differce_in_age`='$a93',`level`='$a94',`detail15`='$a95',`field`='$a96',`detail16`='$a97',`parner`='$a98',`occupation`='$a99',`detail12`='$a100',`country`='$a101',`city`='$a102',`diets`='$a103',`detail13`='$a104',`smoke`='$a105',`drin`='$a106',`other`='$a107',`dnd`='$a108' WHERE `semail`='$email' "; 
    $run = mysqli_query($con,$update);

    if($run){
        header('location:./edit.php?a=1&step=9');
    }else{
        header('location:./edit.php?q=1&step=9');
        //echo "Error !".mysqli_error($con);
    }

}

?>