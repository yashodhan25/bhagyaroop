<?php
session_start();
ob_start();
include './../../../dbconnection.php';
include 'dataview.php';
if(!(isset($_SESSION['user1']))){
    header("location:./../login.php");
}

if(!(isset($_GET['step']))){
    header("location:./myprofile.php");
}

$verifyage = mysqli_query($con," SELECT * FROM `users` WHERE `email` = '$email' ");
$rowUser = mysqli_num_rows($verifyage);

for($x=1; $x<=$rowUser; $x++){
    $ageData = mysqli_fetch_assoc($verifyage);
    $gender=$ageData['gender'];
    //echo $gender;
}
$given = date("Y");
if($gender == "male"){
    $year = $given - 21;
}else{
    $year = $given - 18;
}

$day = '01';
$month = '01'; 

$max = $year."-".$day."-".$month;
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Edit Profile</title>
        <link rel="icon" href="./../logo.png" type="image/x-icon">
        
        <link rel="stylesheet" href="./design.css">
        <link rel="stylesheet" href="./other.css">
        <!-- <link rel="stylesheet" href="./../topStatus.css"> -->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="./bootstrap-select.css">
        <link rel="stylesheet" href="./../bootstrap-select.css">
        <style>
        body{
            background-image: url('./../../back.jpeg');
          }
          .checked {
                color: #F1C40F;
            }
          </style>
    </head>

    <body>

        <?php
        include 'header2.php';
        ?>

        <div class="container-fluid" id="grad1">
            <div class="row justify-content-center mt-0">
                
                <div class="col-11 col-sm-9 col-md-7 col-lg-9 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        
                            <div class="row">
                                <div class="col-md-12 mx-0">          
                                    <br><br>
                                    <ul id="progressbar" style="margin-left: 40px;" class="pro">
                                        <a href="./edit.php?step=1" id="route_1"><li id="confirm"><strong>Personal Information</strong></li></a>
                                        <a href="./edit.php?step=2" id="route_2"><li id="confirm"><strong>Educational Information</strong></li></a>
                                        <a href="./edit.php?step=3" id="route_3"><li id="confirm"><strong>Professional Information</strong></li></a>
                                        <a href="./edit.php?step=4" id="route_4"><li id="confirm"><strong>Horoscope Information</strong></li></a>
                                        <a href="./edit.php?step=5" id="route_5"><li id="confirm"><strong>Habits And Information</strong></li></a>
                                        <a href="./edit.php?step=6" id="route_6"><li id="confirm"><strong>Contact Information</strong></li></a>
                                        <a href="./edit.php?step=7" id="route_7"><li id="confirm"><strong>Reference</strong></li></a>
                                        <a href="./edit.php?step=8" id="route_8"><li id="confirm"><strong>Family Information</strong></li></a>
                                        <a href="./edit.php?step=9" id="route_9"><li id="confirm"><strong>Expectations</strong></li></a>
                                    </ul>
            

                                    <?php
                                    
                                    if($_GET['step'] == 1){
                                        ?>
                                        <form action="update.php" name="myform" method="POST" id="msform" onsubmit="return validateFun();">
                                            <input type="hidden" name="step" value="1">
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <h4><strong>Are you existing user on Bhagyaroop ?</strong>	
                                                    <select class="list-dt" id="a" name="user" onchange="fun18()">
                                                        <?php
                                                        if($v1 == ""){
                                                            ?>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <?php
                                                        }else{
                                                            ?>
                                                            <option selected value="<?php echo $v1 ?>"><?php echo $v1 ?></option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <?php
                                                        }
                                                        ?>
                                                        
                                                        
                                                    </select>
                                                </h4>
                                            </div>
                                                                    
                                            <div class="col-sm-12 col-md-6 col-lg-6">	
                                                <?php
                                                if($v2 == ""){
                                                    ?>
                                                    <h4 id="a1" style="display:none">
                                                        <strong>How you came to know about Bhagyaroop?</strong>
                                                        <select class="list-dt" name="referance">
                                                            <option>Facebook</option>
                                                            <option>Friends</option>
                                                            <option>Internet</option>
                                                            <option>Newspaper</option>
                                                            <option>Relatives</option>
                                                            <option>Existing User</option>                                             
                                                        </select>
                                                    </h4>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <h4 id="a1">
                                                        <strong>How you came to know about Bhagyaroop?</strong>
                                                        <select class="list-dt" name="referance">
                                                            <option>Facebook</option>
                                                            <option>Friends</option>
                                                            <option>Internet</option>
                                                            <option>Newspaper</option>
                                                            <option>Relatives</option>
                                                            <option>Existing User</option>                                             
                                                        </select>
                                                    </h4>
                                                    <?php
                                                }
                                                ?>						
                                                
                                            </div>

                                            <!-- field 1 -->
                                            <fieldset>
                                                <div class="form-card">
                                                    <div class="row">
                                                        
                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:20px">About Me... (500 Characters) <span style="color:red;font-size:20px">*</span></label>
                                                            <br>
                                                            <textarea name="aboutme" style="margin-top:20px"><?php echo $v3 ?></textarea>
                                                        </div>

                                                    </div>
                                                    <h2 class="fs-title" style="color:#3498DB;">Personal Information</h2> 

                                                    <div class="row">


                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Full Name <span style="color:red;font-size:20px">*</span></label>
                                                            <div class="row"  style="margin-top:14px">
                                                                <div class="col-sm-12 col-md-12 col-lg-4">
                                                                    <input type="text" name="fn" placeholder="First Name" style="" value="<?php echo $v4 ?>">
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-4">
                                                                    <input type="text" name="mname" placeholder="Middle Name" style="" value="<?php echo $v5 ?>">
                                                                </div>
                                                                <div class="col-sm-12 col-md-12 col-lg-4">
                                                                    <input type="text" name="lname" placeholder="Last Name" style="" value="<?php echo $v6 ?>">
                                                                </div>
                                                            </div>
                                                            <div class="line"></div>
                                                        </div>
                                                        
                                                        
                                                        <div class="col-sm-12 col-md-12 col-lg-6" >
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Date of Birth <span style="color:red;font-size:20px">*</span></label>
                                                            <br>
                                                            <input type="date" name="db" max='<?php echo $max ?>' style="margin-top:10px" value="<?php echo $v7 ?>" style="style:width:100%">
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-6" >
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Marital Status <span style="color:red;font-size:20px">*</span></label>
                                                            <select class="list-dt" name="ms" style="margin-top:24px">
                                                                <?php
                                                                if($v8 == ""){
                                                                    ?>
                                                                    <option>Never Married</option>
                                                                    <option>Divorced</option>
                                                                    <option>Widow/Widower</option>
                                                                    <option>Awating Divorce / Legally Separated</option>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <option value="<?php echo $v8 ?>"><?php echo $v8 ?></option>
                                                                    <option>Never Married</option>
                                                                    <option>Divorced</option>
                                                                    <option>Widow/Widower</option>
                                                                    <option>Awating Divorce / Legally Separated</option>
                                                                    <?php
                                                                }
                                                                ?>                                        
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <div class="line"></div>
                                                        </div>



                                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                                            <div class="row"  style="margin-top:14px">
                                                                <div class="col-sm-12 col-md-12 col-lg-12"><label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Height <span style="color:red;font-size:20px">*</span></label><input type="number" name="height" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" style="width:30%"  value="<?php echo $v9 ?>"><label class="pay weight" style="color:black;font-size:18px">(cm)</label></div>
                                                            </div>
                                                        </div>
                                


                                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                                            <div class="row"  style="margin-top:14px">
                                                                <div class="col-sm-12 col-md-12 col-lg-12"><label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Weight <span style="color:red;font-size:20px">*</span></label><input type="number" name="weight" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" style="width:30%" value="<?php echo $v10 ?>"><label class="pay weight" style="color:black;font-size:18px">(kg)</label></div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <div class="line"></div>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:10px; margin-bottom:16px">
                                                            <div class="row">
                                                                <div class="col-sm-4 col-md-4 col-lg-4">
                                                                    <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Body Type <span style="color:red;font-size:20px">*</span></label>
                                                                    <select class="list-dt" name="btype" style="margin-top:14px">
                                                                    <?php
                                                                    if($v11 == ""){
                                                                        ?>
                                                                        <option>Slim</option>
                                                                        <option>Athlete</option>
                                                                        <option>Average</option>
                                                                        <option>Fat</option>
                                                                        <?php
                                                                    }else{
                                                                        ?>
                                                                        <option value="<?php echo $v11 ?>"><?php echo $v11 ?></option>
                                                                        <option>Slim</option>
                                                                        <option>Athlete</option>
                                                                        <option>Average</option>
                                                                        <option>Fat</option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    </select>
                                                                </div> 
                                                                <div class="col-sm-4 col-md-4 col-lg-4">
                                                                    <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Complexion <span style="color:red;font-size:20px">*</span></label>
                                                                    <select class="list-dt" name="comp" style="margin-top:14px">
                                                                    <?php
                                                                    if($v12 == ""){
                                                                        ?>
                                                                        <option>Whitish</option>
                                                                        <option>Dusky</option>
                                                                        <option>Fair</option>
                                                                        <option>Blackish</option>
                                                                        <?php
                                                                    }else{
                                                                        ?>
                                                                        <option value="<?php echo $v12 ?>"><?php echo $v12 ?></option>
                                                                        <option>Whitish</option>
                                                                        <option>Dusky</option>
                                                                        <option>Fair</option>
                                                                        <option>Blackish</option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-4 col-md-4 col-lg-4">
                                                                    <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:16px">Blood Group <span style="color:red;font-size:20px">*</span></label>
                                                                    <select class="list-dt" name="blgrp" style="margin-top:14px">
                                                                    <?php
                                                                    if($v13 == ""){
                                                                        ?>
                                                                        <option>O +</option>
                                                                        <option>O -</option>
                                                                        <option>A +</option>
                                                                        <option>A -</option>
                                                                        <option>B +</option>
                                                                        <option>B -</option>
                                                                        <option>AB +</option>
                                                                        <option>AB -</option>
                                                                        <?php
                                                                    }else{
                                                                        
                                                                        ?>
                                                                        <option value="<?php echo $v13 ?>"><?php echo $v13 ?></option>
                                                                        <option>O +</option>
                                                                        <option>O -</option>
                                                                        <option>A +</option>
                                                                        <option>A -</option>
                                                                        <option>B +</option>
                                                                        <option>B -</option>
                                                                        <option>AB +</option>
                                                                        <option>AB -</option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <div class="line"></div>
                                                        </div>


                                                        <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:22px;">
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Mother Tongue <span style="color:red;font-size:20px">*</span></label>
                                                            <input type="text" name="mtg" style="width:50%;" value="<?php echo $v14 ?>" />
                                                        </div>
                                                        <div class="col-sm-6 col-md-6 col-lg-3" style="margin-top:22px;">
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Passport <span style="color:red;font-size:20px">*</span></label>
                                                            <select class="list-dt" id="passval" name="pp" required onchange="fun1()">
                                                            <?php
                                                            if($v15 == ""){
                                                                ?>
                                                                <option selected value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option value="<?php echo $v15 ?>"><?php echo $v15 ?></option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                                <?php
                                                            }
                                                            ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6 col-lg-3" style="margin-top:22px;">
                                                        <?php
                                                        if($v16 == ""){
                                                            ?>
                                                            <input id="pas" type="text" name="pp1" placeholder="Passport Details" />
                                                            <?php
                                                        }else{
                                                            ?>
                                                            <input id="pas" type="text" name="pp1" value="<?php echo $v16 ?>" />
                                                            <?php
                                                        }
                                                        ?>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <div class="line"></div>
                                                        </div>


                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Special Cases <span style="color:red;font-size:20px">*</span></label>
                                                        </div>
                                                        
                                                        <div class="col-sm-12 col-md-12 col-lg-3">
                                                            <label class="pay" style="margin-top: 16px;margin-left: 6px;color:#616A6B;font-size:16px">Disability <span style="color:red;font-size:20px">*</span></label>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-2">
                                                            <select class="list-dt" style="margin-top: 16px;"  id="dis" name="disa" required onchange="fun2()">
                                                            <?php
                                                            if($v17 == ""){
                                                                ?>
                                                                <option selected>No</option>
                                                                <option>Yes</option>
                                                                <?php
                                                            }
                                                            else{
                                                                ?>
                                                                <option value="<?php echo $v17 ?>"><?php echo $v17 ?></option>
                                                                <option>No</option>
                                                                <option>Yes</option>
                                                                <?php
                                                            }
                                                            ?>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-7" style="height:5px;margin-top: 16px;">
                                                        <?php
                                                        if($v18 == ""){
                                                            ?>
                                                            <input style="display:none" type="text" name="disa1" id="other" placeholder="write down details here"/>
                                                            <?php
                                                        }else{
                                                            ?>
                                                            <input type="text" name="disa1" id="other" value="<?php echo $v18 ?>"/>
                                                            <?php
                                                        }
                                                        ?>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-3" style="margin-left:0px">
                                                            <label class="pay" style="margin-top: 16px;margin-left: 6px;color:#616A6B;font-size:16px">Medical History <span style="color:red;font-size:20px">*</span></label>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-2">
                                                            <select class="list-dt" style="margin-top: 16px;" name="mdh" id="mdh" onchange="fun3()">
                                                                <?php
                                                                if($v19 == ""){
                                                                    ?>
                                                                    <option selected value="No">No</option>
                                                                    <option value="High BP">High BP</option>
                                                                    <option value="Low BP">Low BP</option>
                                                                    <option value="Diebetics">Diebetics</option>
                                                                    <option value="PCOD">PCOD</option>
                                                                    <option value="Thyroid">Thyroid</option>
                                                                    <option value="Other">Other</option>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <option value="<?php echo $v19 ?>"><?php echo $v19 ?></option>
                                                                    <option value="No">No</option>
                                                                    <option value="High BP">High BP</option>
                                                                    <option value="Low BP">Low BP</option>
                                                                    <option value="Diebetics">Diebetics</option>
                                                                    <option value="PCOD">PCOD</option>
                                                                    <option value="Thyroid">Thyroid</option>
                                                                    <option value="Other">Other</option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-7" style="height:5px;margin-top: 16px;">
                                                        <?php
                                                        if($v20 == ""){
                                                            ?>
                                                            <input style="display:none" type="text" name="mdh1" id="others1" placeholder="write down details here" />
                                                            <?php
                                                        }else{
                                                            ?>
                                                            <input type="text" name="mdh1" id="others1" value="<?php echo $v20 ?>" />
                                                            <?php
                                                        }
                                                        ?>
                                                        </div>


                                                    </div>
                                                </div>
                                                <input type="submit" name="next" class="next action-button" value="Update" />
                                            </fieldset>

                                        </form>
                                        <?php
                                    }
                                    if($_GET['step'] == 2){
                                        ?>
                                        <form action="update.php" name="myform" method="POST" id="msform" onsubmit="return validateFun();">
                                            <input type="hidden" name="step" value="2">
                                            <fieldset>
                                                <div class="form-card">
                                                <h2 class="fs-title" style="color:#3498DB;">Educational Information</h2> 
                                                    <div class="row">
                                                        
                                                        <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top: 20px;">
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Medium of Education <span style="color:red;font-size:20px">*</span></label>
                                                            <input type="text" name="edm" style="width:50%" value="<?php echo $v21 ?>"/>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top: 20px;">
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Educational Field <span style="color:red;font-size:20px">*</span></label>
                                                            <select id="edl" name="edl[]" onchange="fun4()" class="selectpicker" multiple data-live-search="true">
                                                                <?php
                                                                if($v22 == ""){
                                                                    ?>
                                                                    <option selected value="Computer/IT">Computer/IT</option>
                                                                    <option value="Administrative services">Administrative services</option>
                                                                    <option value="Advertising /marketing">Advertising /marketing</option>
                                                                    <option value="Architects">Architects</option>
                                                                    <option value="Army/Air Force/navy">Army/Air Force/navy</option>
                                                                    <option value="Arts">Arts</option>
                                                                    <option value="Aviation/pilot">Aviation/pilot</option>
                                                                    <option value="CA/CS/ICWA/CFA">CA/CS/ICWA/CFA</option>
                                                                    <option value="Commerce">Commerce</option>
                                                                    <option value="Defense">Defense</option>
                                                                    <option value="Education/BED/MED">Education/BED/MED</option>
                                                                    <option value="Engineering/technology">Engineering/technology</option>
                                                                    <option value="Fashion">Fashion</option>
                                                                    <option value="Fine arts">Fine arts</option>
                                                                    <option value="Finance">Finance</option>
                                                                    <option value="Home science">Home science</option>
                                                                    <option value="Hospitality/ Hotel Management">Hospitality/ Hotel Management</option>
                                                                    <option value="Journalism /Mass Media">Journalism /Mass Media</option>
                                                                    <option value="Law">Law</option>
                                                                    <option value="Management">Management</option>
                                                                    <option value="Medicine">Medicine</option>
                                                                    <option value="Nursing/Health Science">Nursing/Health Science</option>
                                                                    <option value="Others">Others</option>
                                                                    <option value="Pharmacology">Pharmacology</option>
                                                                    <option value="Science">Science</option>
                                                                    <option value="Social science">Social science</option>
                                                                    <option value="UPSC/MPSC">UPSC/MPSC</option>
                                                                    <option value="Visual effects/ Animation">Visual effects/ Animation</option>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <option selected value="<?php echo $v22 ?>"><?php echo $v22 ?></option>
                                                                    <option value="Computer/IT">Computer/IT</option>
                                                                    <option value="Administrative services">Administrative services</option>
                                                                    <option value="Advertising /marketing">Advertising /marketing</option>
                                                                    <option value="Architects">Architects</option>
                                                                    <option value="Army/Air Force/navy">Army/Air Force/navy</option>
                                                                    <option value="Arts">Arts</option>
                                                                    <option value="Aviation/pilot">Aviation/pilot</option>
                                                                    <option value="CA/CS/ICWA/CFA">CA/CS/ICWA/CFA</option>
                                                                    <option value="Commerce">Commerce</option>
                                                                    <option value="Defense">Defense</option>
                                                                    <option value="Education/BED/MED">Education/BED/MED</option>
                                                                    <option value="Engineering/technology">Engineering/technology</option>
                                                                    <option value="Fashion">Fashion</option>
                                                                    <option value="Fine arts">Fine arts</option>
                                                                    <option value="Finance">Finance</option>
                                                                    <option value="Home science">Home science</option>
                                                                    <option value="Hospitality/ Hotel Management">Hospitality/ Hotel Management</option>
                                                                    <option value="Journalism /Mass Media">Journalism /Mass Media</option>
                                                                    <option value="Law">Law</option>
                                                                    <option value="Management">Management</option>
                                                                    <option value="Medicine">Medicine</option>
                                                                    <option value="Nursing/Health Science">Nursing/Health Science</option>
                                                                    <option value="Others">Others</option>
                                                                    <option value="Pharmacology">Pharmacology</option>
                                                                    <option value="Science">Science</option>
                                                                    <option value="Social science">Social science</option>
                                                                    <option value="UPSC/MPSC">UPSC/MPSC</option>
                                                                    <option value="Visual effects/ Animation">Visual effects/ Animation</option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        

                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <?php
                                                            if($v23 == ""){
                                                                ?>
                                                                <input style="display:none" type="text" name="edl1" id="edl1" placeholder="write down details here" />
                                                                <?php
                                                            }
                                                            else{
                                                                ?>
                                                                <input type="text" name="edl1" id="edl1" <?php echo $v23 ?> />
                                                                <?php
                                                            }
                                                            ?>
                                                            <div class="line" style="margin-top:30px"></div>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Educational Level <span style="color:red;font-size:20px">*</span></label>
                                                            <select class="list-dt" id="edv" name="edf" onchange="fun5()" disabled>
                                                            <?php
                                                            if($v24 == ""){
                                                                ?>
                                                                <option selected>Undergraduate</option>
                                                                <option>Graduate</option>
                                                                <option>Diploma</option>
                                                                <option>Post graduate</option>
                                                                <option>PHD</option>
                                                                <option>International Degree</option>
                                                                <option value="Other">Other</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option value="<?php echo $v24 ?>"><?php echo $v24 ?></option>
                                                                <option>Undergraduate</option>
                                                                <option>Graduate</option>
                                                                <option>Diploma</option>
                                                                <option>Post graduate</option>
                                                                <option>PHD</option>
                                                                <option>International Degree</option>
                                                                <option value="Other">Other</option>
                                                                <?php
                                                            }
                                                            ?>
                                                            </select>
                                                            <input type="hidden" name="edf" value="<?php echo $v24 ?>">
                                                        </div><br>

                                                        <div class="col-sm-12 col-md-12 col-lg-6" style="height:5px;">
                                                        <?php
                                                        if($v25 == ""){
                                                            ?>
                                                            <input style="display:none" type="text" name="edf1" id="edv1" placeholder="write down details here" />
                                                            <?php
                                                        }else{
                                                            ?>
                                                            <input type="text" name="edf1" id="edv1" value="<?php echo $v25 ?>" />
                                                            <?php
                                                        }
                                                        ?>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 35px;" class="addon">
                                                            <div class="line"></div>
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Education University & College Specialization <span style="color:red;font-size:20px">*</span></label>
                                                            <input type="text" name="euc" value="<?php echo $v26 ?>" style="width:50%" required/>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <div class="line"></div>
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Additional Qualification <span style="color:red;font-size:20px"></span></label>
                                                            <input type="text" name="aqf" value="<?php echo $v27 ?>" style="width:50%"/>
                                                        </div>
                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Additional Languages <span style="color:red;font-size:20px"></span></label>
                                                            <input type="text" name="alg" value="<?php echo $v28 ?>" style="width:50%"/>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <input type="submit" name="next" class="next action-button" value="Update" />
                                            </fieldset>
                                        </form>
                                        <?php
                                    }
                                    if($_GET['step'] == 3){
                                        ?>
                                        <form action="update.php" name="myform" method="POST" id="msform" onsubmit="return validateFun();">
                                            <input type="hidden" name="step" value="3">
                                            <fieldset>
                                                <div class="form-card">
                                                    <h2 class="fs-title" style="color:#3498DB;">Professional Information</h2> 
                                                    <div class="row">

                                                        <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top: 25px;">
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Occupation <span style="color:red;font-size:20px">*</span></label>
                                                            <select class="list-dt" id="occ" name="occ" onchange="fun6()">
                                                                <?php
                                                                if($v29 == ""){
                                                                    ?>
                                                                    <option value="Architect" selected>Architect</option>
                                                                    <option value="Artist">Artist</option>
                                                                    <option value="Business">Business</option>
                                                                    <option value="CA/ICWA/CS">CA/ICWA/CS</option>
                                                                    <option value="Consultant">Consultant</option>
                                                                    <option value="Dentist">Dentist</option>
                                                                    <option value="Doctor">Doctor</option>
                                                                    <option value="Employee">Employee</option>
                                                                    <option value="Engineer">Engineer</option>
                                                                    <option value="Govt. Servant">Govt. Servant</option>
                                                                    <option value="Jobs seekers">Jobs seekers</option>
                                                                    <option value="Journalist/ Reporter">Journalist/ Reporter</option>
                                                                    <option value="Lawyer">Lawyer</option>
                                                                    <option value="Military services">Military services</option>
                                                                    <option value="Pilot">Pilot</option>
                                                                    <option value="Professions">Professions</option>
                                                                    <option value="Professor / Teacher">Professor / Teacher</option>
                                                                    <option value="Research fellow">Research fellow</option>
                                                                    <option value="Self employed">Self employed</option>
                                                                    <option value="Service +business">Service +business</option>
                                                                    <option value="Student">Student</option>
                                                                    <option value="Others">Others</option>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <option value="<?php echo $v29 ?>"><?php echo $v29 ?></option>
                                                                    <option value="Architect">Architect</option>
                                                                    <option value="Artist">Artist</option>
                                                                    <option value="Business">Business</option>
                                                                    <option value="CA/ICWA/CS">CA/ICWA/CS</option>
                                                                    <option value="Consultant">Consultant</option>
                                                                    <option value="Dentist">Dentist</option>
                                                                    <option value="Doctor">Doctor</option>
                                                                    <option value="Employee">Employee</option>
                                                                    <option value="Engineer">Engineer</option>
                                                                    <option value="Govt. Servant">Govt. Servant</option>
                                                                    <option value="Jobs seekers">Jobs seekers</option>
                                                                    <option value="Journalist/ Reporter">Journalist/ Reporter</option>
                                                                    <option value="Lawyer">Lawyer</option>
                                                                    <option value="Military services">Military services</option>
                                                                    <option value="Pilot">Pilot</option>
                                                                    <option value="Professions">Professions</option>
                                                                    <option value="Professor / Teacher">Professor / Teacher</option>
                                                                    <option value="Research fellow">Research fellow</option>
                                                                    <option value="Self employed">Self employed</option>
                                                                    <option value="Service +business">Service +business</option>
                                                                    <option value="Student">Student</option>
                                                                    <option value="Others">Others</option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-6" style="height:5px; margin-top: 25px;" >
                                                            <?php
                                                            if($v30 == ""){
                                                                ?>
                                                                <input style="display:none" type="text" name="occ1" id="occ1" placeholder="write down details here" />
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <input type="text" name="occ1" id="occ1" value="<?php echo $v30 ?>" />
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top: 25px;">
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Working Field <span style="color:red;font-size:20px">*</span></label>
                                                            <select class="list-dt" id="wfie" name="wfie" onchange="fun7()">
                                                                <?php
                                                                if($v31 == ""){
                                                                    ?>
                                                                    <option value="Architect" selected>Architect</option>
                                                                    <option value="Business/ self employeed">Business/ self employeed</option>
                                                                    <option value="Govt. /Public">Govt. /Public</option>
                                                                    <option value="Job seeker">Job seeker</option>
                                                                    <option value="Merchant Navy">Merchant Navy</option>
                                                                    <option value="Military /Defense">Military /Defense</option>
                                                                    <option value="MNC">MNC</option>
                                                                    <option value="Private Sector">Private Sector</option>
                                                                    <option value="Professional">Professional</option>
                                                                    <option value="Research">Research</option>
                                                                    <option value="Scientist">Scientist</option>
                                                                    <option value="Student">Student</option>
                                                                    <option value="Others">Others</option>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <option value="<?php echo $v31 ?>"><?php echo $v31 ?></option>
                                                                    <option value="Architect">Architect</option>
                                                                    <option value="Business/ self employeed">Business/ self employeed</option>
                                                                    <option value="Govt. /Public">Govt. /Public</option>
                                                                    <option value="Job seeker">Job seeker</option>
                                                                    <option value="Merchant Navy">Merchant Navy</option>
                                                                    <option value="Military /Defense">Military /Defense</option>
                                                                    <option value="MNC">MNC</option>
                                                                    <option value="Private Sector">Private Sector</option>
                                                                    <option value="Professional">Professional</option>
                                                                    <option value="Research">Research</option>
                                                                    <option value="Scientist">Scientist</option>
                                                                    <option value="Student">Student</option>
                                                                    <option value="Others">Others</option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-6" style="height:5px;margin-top: 25px;" >
                                                            <?php
                                                            if($v32 == ""){
                                                                ?>
                                                                <input style="display:none" type="text" name="wfie1" id="wfie1"  placeholder="write down details here" />
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <input type="text" name="wfie1" id="wfie1"  value="<?php echo $v32 ?>" />
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 25px;">
                                                            <div class="line"></div>
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Duration of Employment ( years and month ) <span style="color:red;font-size:20px">*</span></label>
                                                            <input type="text" name="dym" placeholder="" style="width:50%" value="<?php echo $v33 ?>" />
                                                        </div>

                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <div class="line"></div>
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Company Name/ Business name <span style="color:red;font-size:20px">*</span></label>
                                                            <input type="text" name="cbn" placeholder="" style="width:50%" value="<?php echo $v34 ?>" />
                                                        </div>
                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <div class="line"></div>
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Designation <span style="color:red;font-size:20px">*</span></label>
                                                            <input type="text" name="desgn" placeholder="" style="width:50%" value="<?php echo $v35 ?>" />
                                                        </div>
                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <div class="line"></div>
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Work Country and City <span style="color:red;font-size:20px">*</span></label>
                                                            <input type="text" name="wcc" placeholder="" style="width:50%" value="<?php echo $v36 ?>" />
                                                        </div>


                                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <div class="line"></div>
                                                            <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Annual Income Unit Compulsory INR (USA Dollar/ Japanese Yen/ Pound/ Euro/ other Special note please convert your annual income to approximately INR values) <span style="color:red;font-size:20px">*</span></label>
                                                            <select class="list-dt" name="annin" disabled>
                                                                <?php
                                                                if($v37 == ""){
                                                                    ?>
                                                                    <option selected>Student</option>
                                                                    <option>Job Seeker</option>
                                                                    <option>Below 2,00,000</option>
                                                                    <option>2,00,000 – 3,00,000</option>
                                                                    <option>3,00,000 -4,00,000 </option>
                                                                    <option>4,00,000 –5,00,000 </option>
                                                                    <option>5,00,000-6,00,000</option>
                                                                    <option>6,00,000 -7,00,000</option>
                                                                    <option>7,00,000-8,00,000</option>
                                                                    <option>8,00,000-9,00,000</option>
                                                                    <option>9,00,000-10,00,000</option>
                                                                    <option>10,00,000 – 15,00,000</option>
                                                                    <option>15,00,000-20,00,000</option>
                                                                    <option>20,00,000-25,00,000</option>
                                                                    <option>25,00,000 – 30,00,000</option>
                                                                    <option>30,00,000 – 35,00,000</option>
                                                                    <option>35,00,000 – 40,00,000</option>
                                                                    <option>40,00,000 – 45,00,000</option>
                                                                    <option>45,00,000 – 50,00,000</option>
                                                                    <option>50,00,000 – 60,00,000</option>
                                                                    <option>60,00,000 – 70,00,000</option>
                                                                    <option>70,00,000 -80,00,000</option>
                                                                    <option>80,00,000 – 90,00,000</option>
                                                                    <option>90,00,000 – 10,00,00,000</option>
                                                                    <option>10,00,00,000 Above </option>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <option value="<?php echo $v37 ?>"><?php echo $v37 ?></option>
                                                                    <option>Student</option>
                                                                    <option>Job Seeker</option>
                                                                    <option>Below 2,00,000</option>
                                                                    <option>2,00,000 – 3,00,000</option>
                                                                    <option>3,00,000 -4,00,000 </option>
                                                                    <option>4,00,000 –5,00,000 </option>
                                                                    <option>5,00,000-6,00,000</option>
                                                                    <option>6,00,000 -7,00,000</option>
                                                                    <option>7,00,000-8,00,000</option>
                                                                    <option>8,00,000-9,00,000</option>
                                                                    <option>9,00,000-10,00,000</option>
                                                                    <option>10,00,000 – 15,00,000</option>
                                                                    <option>15,00,000-20,00,000</option>
                                                                    <option>20,00,000-25,00,000</option>
                                                                    <option>25,00,000 – 30,00,000</option>
                                                                    <option>30,00,000 – 35,00,000</option>
                                                                    <option>35,00,000 – 40,00,000</option>
                                                                    <option>40,00,000 – 45,00,000</option>
                                                                    <option>45,00,000 – 50,00,000</option>
                                                                    <option>50,00,000 – 60,00,000</option>
                                                                    <option>60,00,000 – 70,00,000</option>
                                                                    <option>70,00,000 -80,00,000</option>
                                                                    <option>80,00,000 – 90,00,000</option>
                                                                    <option>90,00,000 – 10,00,00,000</option>
                                                                    <option>10,00,00,000 Above </option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                            <input type="hidden" name="annin" value="<?php echo $v37; ?>">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <input type="submit" name="next" class="next action-button" value="Update" />
                                            </fieldset>
                                        </form>
                                        <?php
                                    }
                                    if($_GET['step'] == 4){
                                        ?>
                                        <form action="update.php" name="myform" method="POST" id="msform" onsubmit="return validateFun();">
                                        <input type="hidden" name="step" value="4">
                                        <fieldset>
                                            <div class="form-card">
                                                <h2 class="fs-title" style="color:#3498DB;">Horoscope Information</h2>
                                                <div class="row">

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px;">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Date of Birth <span style="color:red;font-size:20px">*</span></label>
                                                        <input type="date" name="wife" max='<?php echo $max ?>' style="width:50%" value="<?php echo $v38 ?>"/>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px;">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Birth Time <span style="color:red;font-size:20px">*</span></label>
                                                        <input type="time" name="time" style="width:50%" value="<?php echo $v39 ?>"  />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12"><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Birth Place <span style="color:red;font-size:20px">*</span></label>
                                                        <input type="text" name="bp" placeholder="" style="width:50%" value="<?php echo $v40 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Village <span style="color:red;font-size:20px"></span></label>
                                                        <input type="text" name="vi" placeholder="" style="width:50%" value="<?php echo $v41 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12"><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">City <span style="color:red;font-size:20px">*</span></label>
                                                        <input type="text" name="vc" placeholder="" style="width:50%" value="<?php echo $v42 ?>" />
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">State <span style="color:red;font-size:20px">*</span></label>
                                                        <input type="text" name="stc" placeholder="" style="width:50%" value="<?php echo $v43 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12"><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Country <span style="color:red;font-size:20px">*</span></label>
                                                        <input type="text" name="couE" placeholder="" style="width:50%" value="<?php echo $v44 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12"><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Caste <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" id="c" name="c" onchange="fun8()">
                                                            
                                                            <option value="<?php echo $v45 ?>"><?php echo $v45 ?></option>
                                                        
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="height:5px">
                                                        <input style="display: none;" id="c1" type="text" name="c1" placeholder="Please Mention Caste .... *" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:30px;"><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" >
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Sub-caste <span style="color:red;font-size:20px"></span></label>
                                                        <input type="text" name="s" placeholder="" style="width:50%" value="<?php echo $v47 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12"><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Birth Moon Sign <span style="color:red;font-size:20px"></span></label>
                                                        <input type="text" name="bms" placeholder="" style="width:50%" value="<?php echo $v48 ?>" />
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Constellation <span style="color:red;font-size:20px"></span></label>
                                                        <input type="text" name="cont" placeholder="" style="width:50%" value="<?php echo $v49 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12"><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" >
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Charan <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="ss">
                                                            <?php
                                                            if($v50 == ""){
                                                                ?>
                                                                <option value="1" selected>1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="Don't know">Don't know</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option value="<?php echo $v50 ?>"><?php echo $v50 ?></option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="Don't know">Don't know</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Gotra <span style="color:red;font-size:20px"></span></label>
                                                        <input type="text" name="gotr" placeholder="" style="width:50%" value="<?php echo $v51 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12"><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Gan <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="gan">
                                                            <?php
                                                            if($v52 == ""){
                                                                ?>
                                                                <option value="Rakshas" selected>Rakshas</option>
                                                                <option value="Dev">Dev</option>
                                                                <option value="Manushya">Manushya</option>
                                                                <option value="Don't Know">Don't Know</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option value="<?php echo $v52 ?>"><?php echo $v52 ?></option>
                                                                <option value="Dev">Dev</option>
                                                                <option value="Manushya">Manushya</option>
                                                                <option value="Don't Know">Don't Know</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Manglik <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="man" style="margin-left: 6px;">
                                                            <?php
                                                            if($v53 == ""){
                                                                ?>
                                                                <option value="Yes" selected>Yes</option>
                                                                <option value="No">No</option>
                                                                <option value="Don't Know">Don't Know</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option value="<?php echo $v53 ?>"><?php echo $v53 ?></option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                                <option value="Don't Know">Don't Know</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px;">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Naad <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="nad">
                                                            <?php
                                                            if($v54 == ""){
                                                                ?>
                                                                <option value="Antya" selected>Antya</option>
                                                                <option value="Adya">Adya</option>
                                                                <option value="Madhya">Madhya</option>
                                                                <option value="Don't Know">Don't Know</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option value="<?php echo $v54 ?>"><?php echo $v54 ?></option>
                                                                <option value="Antya">Antya</option>
                                                                <option value="Adya">Adya</option>
                                                                <option value="Madhya">Madhya</option>
                                                                <option value="Don't Know">Don't Know</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px;">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Rashi (Moon) <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="rashi">
                                                            <?php
                                                            if($addv1 !== ""){
                                                                ?>
                                                                <option value="<?php echo $addv1 ?>"><?php echo $addv1 ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                            <option value="Aries">Aries</option>
                                                            <option value="Taurus">Taurus</option>
                                                            <option value="Gemini">Gemini</option>
                                                            <option value="Cancer">Cancer</option>
                                                            <option value="Leo">Leo</option>
                                                            <option value="Virgo">Virgo</option>
                                                            <option value="Libra">Libra</option>
                                                            <option value="Scorpio">Scorpio</option>
                                                            <option value="Sagittarius">Sagittarius</option>
                                                            <option value="Capricorn">Capricorn</option>
                                                            <option value="Aquarius">Aquarius</option>
                                                            <option value="Pisces">Pisces</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:20px;">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Do you want to see Horoscope <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="hor" style="margin-left: 6px;">
                                                            <?php
                                                            if($v55 == ""){
                                                                ?>
                                                                <option selected>Yes</option>
                                                                <option>No</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option value="<?php echo $v55 ?>"><?php echo $v55 ?></option>
                                                                <option selected>Yes</option>
                                                                <option>No</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <input type="submit" name="next" class="next action-button" value="Update" />
                                        </fieldset>
                                        </form>
                                        <?php
                                    }
                                    if($_GET['step'] == 5){
                                        ?>
                                        <form action="update.php" name="myform" method="POST" id="msform" onsubmit="return validateFun();">
                                        <input type="hidden" name="step" value="5">
                                        <fieldset>
                                            <div class="form-card">
                                                <h2 class="fs-title" style="color:#3498DB;">Habits and Lifestyle</h2>
                                                
                                                <div class="row">

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Diet <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" id="diet" name="diet" onchange="fun9()">
                                                            <?php
                                                            if($v56 == ""){
                                                                ?>
                                                                <option selected value="veg">Veg</option>
                                                                <option value="non-veg">Non-veg</option>
                                                                <option value="Eggeterian">Eggeterian</option>
                                                                <option value="Nonveg occasionally">Nonveg occasionally</option>
                                                                <option value="Others">Others (Jain/Vegan)</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option value="veg" value="<?php echo $v56 ?>"><?php echo $v56 ?></option>
                                                                <option value="veg">Veg</option>
                                                                <option value="non-veg">Non-veg</option>
                                                                <option value="Eggeterian">Eggeterian</option>
                                                                <option value="Nonveg occasionally">Nonveg occasionally</option>
                                                                <option value="Others">Others (Jain/Vegan)</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="height:5px;margin-top:20px">
                                                        <?php
                                                        if($v57 == ""){
                                                            ?>
                                                            <input style="display: none;" id="diet1" type="text" name="diet1" placeholder="Please Mention .... *" />
                                                            <?php
                                                        }else{
                                                            ?>
                                                            <input id="diet1" type="text" name="diet1" value="<?php echo $v57 ?>" />
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:30px"><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Smoking <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="smoke">
                                                            <?php
                                                            if($v58 == ""){
                                                                ?>
                                                                <option selected>No</option>
                                                                <option>Yes</option>
                                                                <option>Occasionally</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option><?php echo $v58 ?></option>
                                                                <option>No</option>
                                                                <option>Yes</option>
                                                                <option>Occasionally</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Drinking <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="drink">
                                                            <?php
                                                            if($v59 == ""){
                                                                ?>
                                                                <option selected>No</option>
                                                                <option>Yes</option>
                                                                <option>Occasionally</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option value="<?php echo $v59 ?>"><?php echo $v59 ?></option>
                                                                <option>No</option>
                                                                <option>Yes</option>
                                                                <option>Occasionally</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="col-sm-12 col-md-12 col-lg-12"><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Spectacles/Lens <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="splt">
                                                            <?php
                                                            if($v60 == ""){
                                                                ?>
                                                                <option selected>No</option>
                                                                <option>Yes</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option value="<?php echo $v60 ?>"><?php echo $v60 ?></option>
                                                                <option>No</option>
                                                                <option>Yes</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Sports & Fitness <span style="color:red;font-size:20px"></span></label>
                                                        <input type="text" name="sfrts" placeholder="" style="width:50%" value="<?php echo $v61 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12"><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Hobbies <span style="color:red;font-size:20px"></span></label>
                                                        <input type="text" name="hobi" placeholder="" style="width:50%" value="<?php echo $v62 ?>" />
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                            <input type="submit" name="next" class="next action-button" value="Update" />
                                        </fieldset>
                                        </form>
                                        <?php
                                    }
                                    if($_GET['step'] == 6){
                                        ?>
                                        <form action="update.php" name="myform" method="POST" id="msform" onsubmit="return validateFun();">
                                        <input type="hidden" name="step" value="6">
                                        <fieldset>
                                            <div class="form-card">
                                                <h2 class="fs-title" style="color:#3498DB;">Contact Information</h2>
                                                <div class="row">

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Country <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" id="cou" name="coun" onchange="fun10()">
                                                            <?php
                                                            if($v63 == ""){
                                                                ?>
                                                                <option value="India" selected>India</option>
                                                                <option value="United States of America">United States of America</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Middle East">Middle East</option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="France">France</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Newzeland">Newzeland</option>
                                                                <option value="China">China</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="Singapore">Singapore</option>
                                                                <option value="South Korea">South Korea</option>
                                                                <option value="South Africa">South Africa</option>
                                                                <option value="Others">Others</option> 
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option value="India" value="<?php echo $v63 ?>"><?php echo $v63 ?></option>
                                                                <option value="India">India</option>
                                                                <option value="United States of America">United States of America</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Middle East">Middle East</option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="France">France</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Newzeland">Newzeland</option>
                                                                <option value="China">China</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="Singapore">Singapore</option>
                                                                <option value="South Korea">South Korea</option>
                                                                <option value="South Africa">South Africa</option>
                                                                <option value="Others">Others</option> 
                                                                <?php
                                                            }
                                                            ?>                                                       
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="height:5px;margin-top:20px">
                                                        <?php
                                                        if($v64 == ""){
                                                            ?>
                                                            <input style="display: none;" id="cou1" type="text" name="coun1" placeholder="Please Mention Country .... *" />
                                                            <?php
                                                        }else{
                                                            ?>
                                                            <input style="display: none;" id="cou1" type="text" name="coun1" value="<?php echo $v64 ?>" />
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:30px"><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style="">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Address <span style="color:red;font-size:20px">*</span></label>
                                                        <input type="text" name="addr" placeholder="" style="width:70%" value="<?php echo $v65 ?>"disabled />
                                                        <input type="hidden" name="addr" value="<?php echo $v65 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12"><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Pin Code <span style="color:red;font-size:20px"></span></label>
                                                        <input type="text" name="pin" placeholder="" style="width:50%" value="<?php echo $v66 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12"><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Self Mobile Number <span style="color:red;font-size:20px">*</span></label>
                                                        <b>+</b><input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" name="ccode1" placeholder="" style="width:10%" value="<?php echo $ccode1 ?>" /><b>-</b><input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" name="snum" placeholder="" style="width:40%" value="<?php echo $v67 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Mother/Father Mobile No <span style="color:red;font-size:20px">*</span></label>
                                                        <b>+</b><input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" name="ccode2" placeholder="" style="width:10%" value="<?php echo $ccode2 ?>" /><b>-</b><input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" name="bnum" placeholder="" style="width:40%" value="<?php echo $v68 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12"><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Self Email Id <span style="color:red;font-size:20px">*</span></label>
                                                        <input type="text" name="manem" placeholder="" style="width:50%" value="<?php echo $v69 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Mother/Father Email Id <span style="color:red;font-size:20px"></span></label>
                                                        <input type="text" name="mfemail" placeholder="" style="width:50%" value="<?php echo $v70 ?>" />
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <input type="submit" name="next" class="next action-button" value="Update" />
                                        </fieldset>
                                        </form>
                                        <?php
                                    }
                                    if($_GET['step'] == 7){
                                        ?>
                                        <form action="update.php" name="myform" method="POST" id="msform" onsubmit="return validateFun();">
                                        <input type="hidden" name="step" value="7">
                                        <fieldset>
                                            <div class="form-card">
                                                <h2 class="fs-title" style="color:#3498DB;">Reference</h2>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Relatives/Friends Name <span style="color:red;font-size:20px">*</span></label>
                                                        <input type="text" name="reln" placeholder="" style="width:50%" value="<?php echo $v71 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style=""><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Relatives/Friends Mobile No <span style="color:red;font-size:20px">*</span></label>
                                                        <b>+</b><input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" name="ccode3" placeholder="" style="width:10%" value="<?php echo $ccode3 ?>" /><b>-</b><input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" name="remail" placeholder="" style="width:40%" value="<?php echo $v72 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style=""><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Relatives/Friends Email Id <span style="color:red;font-size:20px"></span></label>
                                                        <input type="text" name="remob" placeholder="" style="width:50%" value="<?php echo $v73 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style=""><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Relation with Members <span style="color:red;font-size:20px"></span></label>
                                                        <input type="text" name="relmeb" placeholder="" style="width:50%" value="<?php echo $v74 ?>" />
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <input type="submit" name="next" class="next action-button" value="Update" />
                                        </fieldset>
                                        </form>
                                        <?php
                                    }
                                    if($_GET['step'] == 8){
                                        ?>
                                        <form action="update.php" name="myform" method="POST" id="msform" onsubmit="return validateFun();">
                                        <input type="hidden" name="step" value="8">
                                        <fieldset>
                                            <div class="form-card">
                                                <h2 class="fs-title" style="color:#3498DB;">Family Information</h2>

                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Father <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="fath">
                                                            <?php
                                                            if($v75 == ""){
                                                                ?>
                                                                <option selected>Alive</option>
                                                                <option>No More</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option><?php echo $v75 ?></option>
                                                                <option>Alive</option>
                                                                <option>No More</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Father Occupation <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="fatho">
                                                            <?php
                                                            if($v76 == ""){
                                                                ?>
                                                                <option selected>Working</option>
                                                                <option>Retired</option>
                                                                <option>Businessmen</option>
                                                                <option>Pensioner</option>
                                                                <option>Not Applicable</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option><?php echo $v76 ?></option>
                                                                <option>Working</option>
                                                                <option>Retired</option>
                                                                <option>Businessmen</option>
                                                                <option>Pensioner</option>
                                                                <option>Not Applicable</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Fathers Details</label>
                                                        <input type="text" name="fdt" style="width:50%" value="<?php echo $v77 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Fathers Native Place</label>
                                                        <input type="text" name="fdtn" placeholder="" style="width:50%" value="<?php echo $v78 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style=""><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Mother <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="math">
                                                            <?php
                                                            if($v79 == ""){
                                                                ?>
                                                                <option selected>Alive</option>
                                                                <option>No More</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option><?php echo $v79 ?></option>
                                                                <option>Alive</option>
                                                                <option>No More</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Mother Occupation <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="matho">
                                                            <?php
                                                            if($v80 == ""){
                                                                ?>
                                                                <option selected>Working</option>
                                                                <option>Retired</option>
                                                                <option>Businessmen</option>
                                                                <option>Pensioner</option>
                                                                <option>Home Maker</option>
                                                                <option>Not Applicable</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option><?php echo $v80 ?></option>
                                                                <option>Working</option>
                                                                <option>Retired</option>
                                                                <option>Businessmen</option>
                                                                <option>Pensioner</option>
                                                                <option>Home Maker</option>
                                                                <option>Not Applicable</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Mothers Maternal Surname <span style="color:red;font-size:20px">*</span></label>
                                                        <input type="text" name="mdt" style="width:30%" value="<?php echo $v81 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Mothers Native Place</label>
                                                        <input type="text" name="mdtn" style="width:50%" value="<?php echo $v82 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style=""><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">No of Brothers <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="nb">
                                                            <?php
                                                            if($v83 == ""){
                                                                ?>
                                                                <option>0</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option><?php echo $v83 ?></option>
                                                                <option>0</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Marital Status <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="pay">
                                                            <?php
                                                            if($v84 == ""){
                                                                ?>
                                                                <option>1 Married</option>
                                                                <option>2 Married</option>
                                                                <option>3 Married</option>
                                                                <option>No One Married</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option><?php echo $v84 ?></option>
                                                                <option>1 Married</option>
                                                                <option>2 Married</option>
                                                                <option>3 Married</option>
                                                                <option>No One Married</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">No of Sisters <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="ns">
                                                            <?php
                                                            if($v85 == ""){
                                                                ?>
                                                                <option>0</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option><?php echo $v85 ?></option>
                                                                <option>0</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Marital Status <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="nmss">
                                                            <?php
                                                            if($v86 == ""){
                                                                ?>
                                                                <option>1 Married</option>
                                                                <option>2 Married</option>
                                                                <option>3 Married</option>
                                                                <option selected>No One Married</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option selected><?php echo $v86 ?></option>
                                                                <option>1 Married</option>
                                                                <option>2 Married</option>
                                                                <option>3 Married</option>
                                                                <option>No One Married</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style=""><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">About Family</label>
                                                        <textarea name="afmaly"><?php echo $v87 ?></textarea>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Family Medical History</label>
                                                        <textarea name="fmh"><?php echo $v88 ?></textarea>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style=""><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Family Disability <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" id="fdida" name="fdida" onchange="fun11()">
                                                            <?php
                                                            if($v89 == ""){
                                                                ?>
                                                                <option value="No" selected>No</option>
                                                                <option value="Yes">Yes</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option value="<?php echo $v89 ?>"><?php echo $v89 ?></option>
                                                                <option value="No">No</option>
                                                                <option value="Yes">Yes</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="height:5px">
                                                        <?php
                                                        if($v90 == ""){
                                                            ?>
                                                            <input type="text" style="display: none;" id="fdida1" name="fdida1" placeholder="Please Mention ...." />
                                                            <?php
                                                        }else{
                                                            ?>
                                                            <input type="text" style="display: none;" id="fdida1" name="fdida1" value="<?php echo $v90 ?>" />
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                            <input type="submit" name="next" class="next action-button" value="Update" />
                                        </fieldset>
                                        </form>
                                        <?php
                                    }
                                    if($_GET['step'] == 9){
                                        ?>
                                        <form action="update.php" name="myform" method="POST" id="msform" onsubmit="return validateFun();">
                                        <input type="hidden" name="step" value="9">
                                        <fieldset>
                                            <div class="form-card">
                                                <h2 class="fs-title" style="color:#3498DB;">Expectations</h2>
                                                <div class="row">

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Marital Status <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="selectpicker" multiple data-live-search="true" name="a[]" >
                                                            <?php
                                                            if($v91 == ""){
                                                                ?>
                                                                <option>Never Married</option>
                                                                <option>Divorced</option>
                                                                <option>Widow/Widower</option>
                                                                <option>Awating Divorce / Legally Separated</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option selected><?php echo $v91 ?></option>
                                                                <option>Never Married</option>
                                                                <option>Divorced</option>
                                                                <option>Widow/Widower</option>
                                                                <option>Awating Divorce / Legally Separated</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style=""><div class="line"></div></div>

                                                    <!-- ----------------------------------------------------------------- -->



                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Caste <span style="color:red;font-size:20px">*</span></label>
                                                        <br><label style="font-size:20px;color:black;margin-left:10px"><input style="width:20px;height:20px;" type="checkbox" name="b[]" id="hideItem1" onclick="hidden1()" value="Any">&nbsp;&nbsp;&nbsp;Any</label>
                                                        <div id="hidden1">
                                                            <select class="selectpicker" multiple data-live-search="true" id="b" name="b[]" onchange="">
                                                                <?php
                                                                if($v92 == ""){
                                                                    ?>
                                                                    <option selected value="Brahmin">Brahmin</option>
                                                                    <option value="Maratha">Maratha</option>
                                                                    <option value="Buddhist">Buddhist</option>
                                                                    <option value="Kunbi">Kunbi</option>
                                                                    <option value="Chambhar">Chambhar</option>
                                                                    <option value="Arora"> Arora</option>
                                                                    <option value="Agarwal">Agarwal</option>
                                                                    <option value="Agri">Agri</option>
                                                                    <option value="Ahir">Ahir</option>
                                                                    <option value="Ahir Gawali">Ahir Gawali</option>
                                                                    <option value="Ahir Sonar">Ahir Sonar</option>
                                                                    <option value="Arya Kshatriya">Arya Kshatriya</option>
                                                                    <option value="Arya Samaj">Arya Samaj</option>
                                                                    <option value="Arya Vaishya">Arya Vaishya</option>
                                                                    <option value="Arya Vysya">Arya Vysya</option>
                                                                    <option value="Badgujar">Badgujar</option>
                                                                    <option value="Bairagi">Bairagi</option>
                                                                    <option value="Bania">Bania</option>
                                                                    <option value="Banjara">Banjara</option>
                                                                    <option value="Barai">Barai</option>
                                                                    <option value="Bari">Bari</option>
                                                                    <option value="Beldar">Beldar</option>
                                                                    <option value="Bengali">Bengali</option>
                                                                    <option value="Bengali Kayastha">Bengali Kayastha</option>
                                                                    <option value="Berad">Berad</option>
                                                                    <option value="Bhamti">Bhamti</option>
                                                                    <option value="Bhandari">Bhandari</option>
                                                                    <option value="Bhanushali">Bhanushali</option>
                                                                    <option value="Bharadi">Bharadi</option>
                                                                    <option value="Bhat">Bhat</option>
                                                                    <option value="Bhatt">Bhatt</option>
                                                                    <option value="Bhavasar kshatriya">Bhavasar kshatriya</option>
                                                                    <option value="Bhavsar">Bhavsar</option>
                                                                    <option value="Bhavsar Shimpi">Bhavsar Shimpi</option>
                                                                    <option value="Bhilla">Bhilla</option>
                                                                    <option value="Bhoi">Bhoi</option>
                                                                    <option value="Bhope">Bhope</option>
                                                                    <option value="Billava">Billava</option>
                                                                    <option value="Borul">Borul</option>
                                                                    <option value="Brahma kshatriya">Brahma kshatriya</option>
                                                                    <option value="Burud">Burud</option>
                                                                    <option value="Chandravanshi">Chandravanshi</option>
                                                                    <option value="Chaurasia">Chaurasia</option>
                                                                    <option value="Chitode Wani">Chitode Wani</option>
                                                                    <option value="Chitrakathi">Chitrakathi</option>
                                                                    <option value="CKP">CKP</option>
                                                                    <option value="Daivadnya Brahmin">Daivadnya Brahmin</option>
                                                                    <option value="Dangat">Dangat</option>
                                                                    <option value="Dashnam">Dashnam</option>
                                                                    <option value="Davari">Davari</option>
                                                                    <option value="Devadiga">Devadiga</option>
                                                                    <option value="Devang Koshthi">Devang Koshthi</option>
                                                                    <option value="Dever">Dever</option>
                                                                    <option value="Devli">Devli</option>
                                                                    <option value="Dhangar">Dhangar</option>
                                                                    <option value="Dhobi">Dhobi</option>
                                                                    <option value="Dhor">Dhor</option>
                                                                    <option value="Do not want to disclose">Do not want to disclose</option>
                                                                    <option value="Ezhava">Ezhava</option>
                                                                    <option value="Gabit">Gabit</option>
                                                                    <option value="Ganali">Ganali</option>
                                                                    <option value="Garhwali Kumaoni">Garhwali Kumaoni</option>
                                                                    <option value="Gavandi">Gavandi</option>
                                                                    <option value="Gawali">Gawali</option>
                                                                    <option value="Ghatti">Ghatti</option>
                                                                    <option value="Ghisadi">Ghisadi</option>
                                                                    <option value="Golha">Golha </option>
                                                                    <option value="Gollewar">Gollewar</option>
                                                                    <option value="Gomantak">Gomantak</option>
                                                                    <option value="Gond">Gond</option>
                                                                    <option value="Gondhali">Gondhali</option>
                                                                    <option value="Gopal">Gopal</option>
                                                                    <option value="Gosavi">Gosavi</option>
                                                                    <option value="Goswami">Goswami</option>
                                                                    <option value="Gowari">Gowari</option>
                                                                    <option value="Gowda">Gowda </option>
                                                                    <option value="Gujar">Gujar</option>
                                                                    <option value="Gujarati Mochi">Gujarati Mochi</option>
                                                                    <option value="Gujrathi">Gujrathi</option>
                                                                    <option value="Gurav">Gurav</option>
                                                                    <option value="Halba">Halba</option>
                                                                    <option value="Halba Koshti">Halba Koshti</option>
                                                                    <option value="Halbi">Halbi </option>
                                                                    <option value="Hatkar">Hatkar</option>
                                                                    <option value="Jain">Jain</option>
                                                                    <option value="Jangam">Jangam</option>
                                                                    <option value="Jogi (Nath)">Jogi (Nath)</option>
                                                                    <option value="Joshi">Joshi</option>
                                                                    <option value="Kachhi">Kachhi </option>
                                                                    <option value="Kahar(Hindu)">Kahar(Hindu)</option>
                                                                    <option value="Kaikadi">Kaikadi</option>
                                                                    <option value="Kakayya">Kakayya</option>
                                                                    <option value="kalal">kalal</option>
                                                                    <option value="Kalan">Kalan</option>
                                                                    <option value="Kalar">Kalar</option>
                                                                    <option value="Kapewar">Kapewar</option>
                                                                    <option value="Kapu">Kapu</option>
                                                                    <option value="Karwari">Karwari</option>
                                                                    <option value="Kasar">Kasar</option>
                                                                    <option value="Kashi Kapadi">Kashi Kapadi</option>
                                                                    <option value="Kayastha">Kayastha</option>
                                                                    <option value="Kharvi">Kharvi</option>
                                                                    <option value="khatik">khatik</option>
                                                                    <option value="Khatri">Khatri </option>
                                                                    <option value="Kohli">Kohli</option>
                                                                    <option value="kolhati">kolhati</option>
                                                                    <option value="Koli">Koli</option>
                                                                    <option value="Koli Mahadev">Koli Mahadev</option>
                                                                    <option value="komati">komati</option>
                                                                    <option value="Konkani">Konkani</option>
                                                                    <option value="Koshti">Koshti</option>
                                                                    <option value="Kshatriya">Kshatriya</option>
                                                                    <option value="kshatriya kumawat">kshatriya kumawat</option>
                                                                    <option value="KUDAL,DESHAKAR">KUDAL,DESHAKAR</option>
                                                                    <option value="Kulwant Vani">Kulwant Vani</option>
                                                                    <option value="Kumbhar">Kumbhar</option>
                                                                    <option value="Kutchi Lohana">Kutchi Lohana</option>
                                                                    <option value="Lad">Lad</option>
                                                                    <option value="Lad Sonar">Lad Sonar</option>
                                                                    <option value="Lad Wani">Lad Wani</option>
                                                                    <option value="Ladshakhiy Vani">Ladshakhiy Vani</option>
                                                                    <option value="Leva Gurjar">Leva Gurjar</option>
                                                                    <option value="Leva Patidar">Leva Patidar</option>
                                                                    <option value="Leva patil">Leva patil</option>
                                                                    <option value="Lingayat">Lingayat</option>
                                                                    <option value="Lingayatwani">Lingayatwani</option>
                                                                    <option value="Lohar">Lohar</option>
                                                                    <option value="Lonari">Lonari</option>
                                                                    <option value="Loni">Loni</option>
                                                                    <option value="Madiga">Madiga</option>
                                                                    <option value="Mahar">Mahar</option>
                                                                    <option value="Maheshwari">Maheshwari</option>
                                                                    <option value="Mali">Mali</option>
                                                                    <option value="Mana">Mana</option>
                                                                    <option value="Mang">Mang</option>
                                                                    <option value="Mangalorean Tulu">Mangalorean Tulu</option>
                                                                    <option value="Mannervarlu">Mannervarlu</option>
                                                                    <option value="Marwari">Marwari</option>
                                                                    <option value="Matang">Matang</option>
                                                                    <option value="Maurya">Maurya</option>
                                                                    <option value="Modh Vania">Modh Vania</option>
                                                                    <option value="Mogaveera">Mogaveera </option>
                                                                    <option value="Munnuru Kapu">Munnuru Kapu</option>
                                                                    <option value="Nabhik">Nabhik</option>
                                                                    <option value="Naidu">Naidu</option>
                                                                    <option value="Nair">Nair </option>
                                                                    <option value="Namdev">Namdev</option>
                                                                    <option value="Nath">Nath</option>
                                                                    <option value="Nathpanthi Gosavi">Nathpanthi Gosavi</option>
                                                                    <option value="Navnath Gosavi">Navnath Gosavi</option>
                                                                    <option value="Neve">Neve</option>
                                                                    <option value="Neve Vani">Neve Vani</option>
                                                                    <option value="Nhavi">Nhavi</option>
                                                                    <option value="Nirali">Nirali</option>
                                                                    <option value="Nutan Maratha">Nutan Maratha</option>
                                                                    <option value="Otari">Otari</option>
                                                                    <option value="Pachkalshi">Pachkalshi</option>
                                                                    <option value="Padmashali">Padmashali</option>
                                                                    <option value="PANCHAL">PANCHAL</option>
                                                                    <option value="Pardhi">Pardhi</option>
                                                                    <option value="Parit">Parit</option>
                                                                    <option value="Patel">Patel</option>
                                                                    <option value="Pathare Prabhu">Pathare Prabhu</option>
                                                                    <option value="Patharvat">Patharvat</option>
                                                                    <option value="Prajapati">Prajapati</option>
                                                                    <option value="Pujari">Pujari</option>
                                                                    <option value="Punjabi">Punjabi</option>
                                                                    <option value="Raghuvanshi">Raghuvanshi</option>
                                                                    <option value="Rajasthani Brahmin">Rajasthani Brahmin </option>
                                                                    <option value="Rajput">Rajput</option>
                                                                    <option value="Ramoshi">Ramoshi</option>
                                                                    <option value="Rao Rathod Saoji Teli">Rao Rathod Saoji Teli </option>
                                                                    <option value="Rawal">Rawal</option>
                                                                    <option value="Reddy">Reddy</option>
                                                                    <option value="Rohidas">Rohidas</option>
                                                                    <option value="Sagar">Sagar</option>
                                                                    <option value="Sahastrarjun Kshatriya">Sahastrarjun Kshatriya</option>
                                                                    <option value="Sangar">Sangar</option>
                                                                    <option value="Sarode">Sarode</option>
                                                                    <option value="Savji">Savji</option>
                                                                    <option value="SC">SC</option>
                                                                    <option value="Shilwant">Shilwant</option>
                                                                    <option value="Shimpi">Shimpi</option>
                                                                    <option value="Shivyogi">Shivyogi</option>
                                                                    <option value="Sindhi">Sindhi</option>
                                                                    <option value="Somavanshi Arya Kshatriya">Somavanshi Arya Kshatriya</option>
                                                                    <option value="Sonar">Sonar</option>
                                                                    <option value="ST">ST</option>
                                                                    <option value="Sutar">Sutar</option>
                                                                    <option value="Swakula Sali">Swakula Sali</option>
                                                                    <option value="Tambat">Tambat</option>
                                                                    <option value="Tamil">Tamil</option>
                                                                    <option value="Thakur">Thakur</option>
                                                                    <option value="Vadar">Vadar</option>
                                                                    <option value="Vaidu">Vaidu</option>
                                                                    <option value="Vaish">Vaish</option>
                                                                    <option value="Vaishnav">Vaishnav</option>
                                                                    <option value="vaishnav lad">vaishnav lad</option>
                                                                    <option value="Vaishya">Vaishya</option>
                                                                    <option value="Vaishya Vani">Vaishya Vani</option>
                                                                    <option value="Valmiki">Valmiki</option>
                                                                    <option value="Vani">Vani</option>
                                                                    <option value="Vaniya">Vaniya</option>
                                                                    <option value="Vanjari">Vanjari</option>
                                                                    <option value="Vankar">Vankar</option>
                                                                    <option value="Vasudev(Bhatkya Jamati)">Vasudev(Bhatkya Jamati)</option>
                                                                    <option value="Veer">Veer</option>
                                                                    <option value="veershaiv kakkaya">veershaiv kakkaya</option>
                                                                    <option value="Velama">Velama</option>
                                                                    <option value="Vishwabrahmin">Vishwabrahmin</option>
                                                                    <option value="vishwakarma">vishwakarma</option>
                                                                    <option value="Vysya">Vysya</option>
                                                                    <option value="Walmiki">Walmiki</option>
                                                                    <option value="Warli">Warli</option>
                                                                    <option value="Yadav">Yadav</option>
                                                                    <option value="Any"></option>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <option selected value="<?php echo $v92 ?>"><?php echo $v92 ?></option>
                                                                    <option value="Brahmin">Brahmin</option>
                                                                    <option value="Maratha">Maratha</option>
                                                                    <option value="Buddhist">Buddhist</option>
                                                                    <option value="Kunbi">Kunbi</option>
                                                                    <option value="Chambhar">Chambhar</option>
                                                                    <option value="Arora"> Arora</option>
                                                                    <option value="Agarwal">Agarwal</option>
                                                                    <option value="Agri">Agri</option>
                                                                    <option value="Ahir">Ahir</option>
                                                                    <option value="Ahir Gawali">Ahir Gawali</option>
                                                                    <option value="Ahir Sonar">Ahir Sonar</option>
                                                                    <option value="Arya Kshatriya">Arya Kshatriya</option>
                                                                    <option value="Arya Samaj">Arya Samaj</option>
                                                                    <option value="Arya Vaishya">Arya Vaishya</option>
                                                                    <option value="Arya Vysya">Arya Vysya</option>
                                                                    <option value="Badgujar">Badgujar</option>
                                                                    <option value="Bairagi">Bairagi</option>
                                                                    <option value="Bania">Bania</option>
                                                                    <option value="Banjara">Banjara</option>
                                                                    <option value="Barai">Barai</option>
                                                                    <option value="Bari">Bari</option>
                                                                    <option value="Beldar">Beldar</option>
                                                                    <option value="Bengali">Bengali</option>
                                                                    <option value="Bengali Kayastha">Bengali Kayastha</option>
                                                                    <option value="Berad">Berad</option>
                                                                    <option value="Bhamti">Bhamti</option>
                                                                    <option value="Bhandari">Bhandari</option>
                                                                    <option value="Bhanushali">Bhanushali</option>
                                                                    <option value="Bharadi">Bharadi</option>
                                                                    <option value="Bhat">Bhat</option>
                                                                    <option value="Bhatt">Bhatt</option>
                                                                    <option value="Bhavasar kshatriya">Bhavasar kshatriya</option>
                                                                    <option value="Bhavsar">Bhavsar</option>
                                                                    <option value="Bhavsar Shimpi">Bhavsar Shimpi</option>
                                                                    <option value="Bhilla">Bhilla</option>
                                                                    <option value="Bhoi">Bhoi</option>
                                                                    <option value="Bhope">Bhope</option>
                                                                    <option value="Billava">Billava</option>
                                                                    <option value="Borul">Borul</option>
                                                                    <option value="Brahma kshatriya">Brahma kshatriya</option>
                                                                    <option value="Burud">Burud</option>
                                                                    <option value="Chandravanshi">Chandravanshi</option>
                                                                    <option value="Chaurasia">Chaurasia</option>
                                                                    <option value="Chitode Wani">Chitode Wani</option>
                                                                    <option value="Chitrakathi">Chitrakathi</option>
                                                                    <option value="CKP">CKP</option>
                                                                    <option value="Daivadnya Brahmin">Daivadnya Brahmin</option>
                                                                    <option value="Dangat">Dangat</option>
                                                                    <option value="Dashnam">Dashnam</option>
                                                                    <option value="Davari">Davari</option>
                                                                    <option value="Devadiga">Devadiga</option>
                                                                    <option value="Devang Koshthi">Devang Koshthi</option>
                                                                    <option value="Dever">Dever</option>
                                                                    <option value="Devli">Devli</option>
                                                                    <option value="Dhangar">Dhangar</option>
                                                                    <option value="Dhobi">Dhobi</option>
                                                                    <option value="Dhor">Dhor</option>
                                                                    <option value="Do not want to disclose">Do not want to disclose</option>
                                                                    <option value="Ezhava">Ezhava</option>
                                                                    <option value="Gabit">Gabit</option>
                                                                    <option value="Ganali">Ganali</option>
                                                                    <option value="Garhwali Kumaoni">Garhwali Kumaoni</option>
                                                                    <option value="Gavandi">Gavandi</option>
                                                                    <option value="Gawali">Gawali</option>
                                                                    <option value="Ghatti">Ghatti</option>
                                                                    <option value="Ghisadi">Ghisadi</option>
                                                                    <option value="Golha">Golha </option>
                                                                    <option value="Gollewar">Gollewar</option>
                                                                    <option value="Gomantak">Gomantak</option>
                                                                    <option value="Gond">Gond</option>
                                                                    <option value="Gondhali">Gondhali</option>
                                                                    <option value="Gopal">Gopal</option>
                                                                    <option value="Gosavi">Gosavi</option>
                                                                    <option value="Goswami">Goswami</option>
                                                                    <option value="Gowari">Gowari</option>
                                                                    <option value="Gowda">Gowda </option>
                                                                    <option value="Gujar">Gujar</option>
                                                                    <option value="Gujarati Mochi">Gujarati Mochi</option>
                                                                    <option value="Gujrathi">Gujrathi</option>
                                                                    <option value="Gurav">Gurav</option>
                                                                    <option value="Halba">Halba</option>
                                                                    <option value="Halba Koshti">Halba Koshti</option>
                                                                    <option value="Halbi">Halbi </option>
                                                                    <option value="Hatkar">Hatkar</option>
                                                                    <option value="Jain">Jain</option>
                                                                    <option value="Jangam">Jangam</option>
                                                                    <option value="Jogi (Nath)">Jogi (Nath)</option>
                                                                    <option value="Joshi">Joshi</option>
                                                                    <option value="Kachhi">Kachhi </option>
                                                                    <option value="Kahar(Hindu)">Kahar(Hindu)</option>
                                                                    <option value="Kaikadi">Kaikadi</option>
                                                                    <option value="Kakayya">Kakayya</option>
                                                                    <option value="kalal">kalal</option>
                                                                    <option value="Kalan">Kalan</option>
                                                                    <option value="Kalar">Kalar</option>
                                                                    <option value="Kapewar">Kapewar</option>
                                                                    <option value="Kapu">Kapu</option>
                                                                    <option value="Karwari">Karwari</option>
                                                                    <option value="Kasar">Kasar</option>
                                                                    <option value="Kashi Kapadi">Kashi Kapadi</option>
                                                                    <option value="Kayastha">Kayastha</option>
                                                                    <option value="Kharvi">Kharvi</option>
                                                                    <option value="khatik">khatik</option>
                                                                    <option value="Khatri">Khatri </option>
                                                                    <option value="Kohli">Kohli</option>
                                                                    <option value="kolhati">kolhati</option>
                                                                    <option value="Koli">Koli</option>
                                                                    <option value="Koli Mahadev">Koli Mahadev</option>
                                                                    <option value="komati">komati</option>
                                                                    <option value="Konkani">Konkani</option>
                                                                    <option value="Koshti">Koshti</option>
                                                                    <option value="Kshatriya">Kshatriya</option>
                                                                    <option value="kshatriya kumawat">kshatriya kumawat</option>
                                                                    <option value="KUDAL,DESHAKAR">KUDAL,DESHAKAR</option>
                                                                    <option value="Kulwant Vani">Kulwant Vani</option>
                                                                    <option value="Kumbhar">Kumbhar</option>
                                                                    <option value="Kutchi Lohana">Kutchi Lohana</option>
                                                                    <option value="Lad">Lad</option>
                                                                    <option value="Lad Sonar">Lad Sonar</option>
                                                                    <option value="Lad Wani">Lad Wani</option>
                                                                    <option value="Ladshakhiy Vani">Ladshakhiy Vani</option>
                                                                    <option value="Leva Gurjar">Leva Gurjar</option>
                                                                    <option value="Leva Patidar">Leva Patidar</option>
                                                                    <option value="Leva patil">Leva patil</option>
                                                                    <option value="Lingayat">Lingayat</option>
                                                                    <option value="Lingayatwani">Lingayatwani</option>
                                                                    <option value="Lohar">Lohar</option>
                                                                    <option value="Lonari">Lonari</option>
                                                                    <option value="Loni">Loni</option>
                                                                    <option value="Madiga">Madiga</option>
                                                                    <option value="Mahar">Mahar</option>
                                                                    <option value="Maheshwari">Maheshwari</option>
                                                                    <option value="Mali">Mali</option>
                                                                    <option value="Mana">Mana</option>
                                                                    <option value="Mang">Mang</option>
                                                                    <option value="Mangalorean Tulu">Mangalorean Tulu</option>
                                                                    <option value="Mannervarlu">Mannervarlu</option>
                                                                    <option value="Marwari">Marwari</option>
                                                                    <option value="Matang">Matang</option>
                                                                    <option value="Maurya">Maurya</option>
                                                                    <option value="Modh Vania">Modh Vania</option>
                                                                    <option value="Mogaveera">Mogaveera </option>
                                                                    <option value="Munnuru Kapu">Munnuru Kapu</option>
                                                                    <option value="Nabhik">Nabhik</option>
                                                                    <option value="Naidu">Naidu</option>
                                                                    <option value="Nair">Nair </option>
                                                                    <option value="Namdev">Namdev</option>
                                                                    <option value="Nath">Nath</option>
                                                                    <option value="Nathpanthi Gosavi">Nathpanthi Gosavi</option>
                                                                    <option value="Navnath Gosavi">Navnath Gosavi</option>
                                                                    <option value="Neve">Neve</option>
                                                                    <option value="Neve Vani">Neve Vani</option>
                                                                    <option value="Nhavi">Nhavi</option>
                                                                    <option value="Nirali">Nirali</option>
                                                                    <option value="Nutan Maratha">Nutan Maratha</option>
                                                                    <option value="Otari">Otari</option>
                                                                    <option value="Pachkalshi">Pachkalshi</option>
                                                                    <option value="Padmashali">Padmashali</option>
                                                                    <option value="PANCHAL">PANCHAL</option>
                                                                    <option value="Pardhi">Pardhi</option>
                                                                    <option value="Parit">Parit</option>
                                                                    <option value="Patel">Patel</option>
                                                                    <option value="Pathare Prabhu">Pathare Prabhu</option>
                                                                    <option value="Patharvat">Patharvat</option>
                                                                    <option value="Prajapati">Prajapati</option>
                                                                    <option value="Pujari">Pujari</option>
                                                                    <option value="Punjabi">Punjabi</option>
                                                                    <option value="Raghuvanshi">Raghuvanshi</option>
                                                                    <option value="Rajasthani Brahmin">Rajasthani Brahmin </option>
                                                                    <option value="Rajput">Rajput</option>
                                                                    <option value="Ramoshi">Ramoshi</option>
                                                                    <option value="Rao Rathod Saoji Teli">Rao Rathod Saoji Teli </option>
                                                                    <option value="Rawal">Rawal</option>
                                                                    <option value="Reddy">Reddy</option>
                                                                    <option value="Rohidas">Rohidas</option>
                                                                    <option value="Sagar">Sagar</option>
                                                                    <option value="Sahastrarjun Kshatriya">Sahastrarjun Kshatriya</option>
                                                                    <option value="Sangar">Sangar</option>
                                                                    <option value="Sarode">Sarode</option>
                                                                    <option value="Savji">Savji</option>
                                                                    <option value="SC">SC</option>
                                                                    <option value="Shilwant">Shilwant</option>
                                                                    <option value="Shimpi">Shimpi</option>
                                                                    <option value="Shivyogi">Shivyogi</option>
                                                                    <option value="Sindhi">Sindhi</option>
                                                                    <option value="Somavanshi Arya Kshatriya">Somavanshi Arya Kshatriya</option>
                                                                    <option value="Sonar">Sonar</option>
                                                                    <option value="ST">ST</option>
                                                                    <option value="Sutar">Sutar</option>
                                                                    <option value="Swakula Sali">Swakula Sali</option>
                                                                    <option value="Tambat">Tambat</option>
                                                                    <option value="Tamil">Tamil</option>
                                                                    <option value="Thakur">Thakur</option>
                                                                    <option value="Vadar">Vadar</option>
                                                                    <option value="Vaidu">Vaidu</option>
                                                                    <option value="Vaish">Vaish</option>
                                                                    <option value="Vaishnav">Vaishnav</option>
                                                                    <option value="vaishnav lad">vaishnav lad</option>
                                                                    <option value="Vaishya">Vaishya</option>
                                                                    <option value="Vaishya Vani">Vaishya Vani</option>
                                                                    <option value="Valmiki">Valmiki</option>
                                                                    <option value="Vani">Vani</option>
                                                                    <option value="Vaniya">Vaniya</option>
                                                                    <option value="Vanjari">Vanjari</option>
                                                                    <option value="Vankar">Vankar</option>
                                                                    <option value="Vasudev(Bhatkya Jamati)">Vasudev(Bhatkya Jamati)</option>
                                                                    <option value="Veer">Veer</option>
                                                                    <option value="veershaiv kakkaya">veershaiv kakkaya</option>
                                                                    <option value="Velama">Velama</option>
                                                                    <option value="Vishwabrahmin">Vishwabrahmin</option>
                                                                    <option value="vishwakarma">vishwakarma</option>
                                                                    <option value="Vysya">Vysya</option>
                                                                    <option value="Walmiki">Walmiki</option>
                                                                    <option value="Warli">Warli</option>
                                                                    <option value="Yadav">Yadav</option>
                                                                    <option value="Any"></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 col-md-6 col-lg-6" style="height:5px;margin-top:20px;">
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:30px"> 
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Sub-caste <span style="color:red;font-size:20px"></span></label>
                                                        <input type="text" name="s1" placeholder="" value="<?php echo $v94 ?>" style="width:80%" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style=""><div class="line"></div></div>

                                                    <!-- ------------------------------------------------------------------ -->

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Height Range<span style="color:red;font-size:20px"></span></label>
                                                        <input type="text" name="shet" value="<?php echo $v95 ?>" style="width:30%" required/>
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">(cm)<span style="color:red;font-size:20px">*</span></label>
                                                    </div>


                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Weight Range<span style="color:red;font-size:20px"></span></label>
                                                        <input type="text" name="swe" value="<?php echo $v96 ?>" style="width:30%" required/>
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">(kg)<span style="color:red;font-size:20px">*</span></label>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style=""><div class="line"></div></div>

                                                    <!-- ----------------------------------------------------------------- -->

                                                    <div class="col-12">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Differance in age range<span style="color:red;font-size:20px">*</span></label>
                                                        <input type="text" name="diffage" value="<?php echo $v97 ?>" style="width:60%" required/>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style=""><div class="line"></div></div>

                                                    <!-- ----------------------------------------------------------------- -->

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Educational Field<span style="color:red;font-size:20px">*</span></label>
                                                        <br><label style="font-size:20px;color:black;margin-left:10px"><input style="width:20px;height:20px;" type="checkbox" name="edfs[]" id="hideItem2" onclick="hidden2()" value="Any">&nbsp;&nbsp;&nbsp;Any</label>
                                                        <div id="hidden2">
                                                            <select class="selectpicker" multiple data-live-search="true" id="edfs" name="edfs[]" onchange="fun13()">
                                                                <?php
                                                                if($v98 == ""){
                                                                    ?>
                                                                    <option selected value="Computer/IT">Computer/IT</option>
                                                                    <option value="Administrative services">Administrative services</option>
                                                                    <option value="Advertising /marketing">Advertising /marketing</option>
                                                                    <option value="Architects">Architects</option>
                                                                    <option value="Army/Air Force/navy">Army/Air Force/navy</option>
                                                                    <option value="Arts">Arts</option>
                                                                    <option value="Aviation/pilot">Aviation/pilot</option>
                                                                    <option value="CA/CS/ICWA/CFA">CA/CS/ICWA/CFA</option>
                                                                    <option value="Commerce">Commerce</option>
                                                                    <option value="Defense">Defense</option>
                                                                    <option value="Education/BED/MED">Education/BED/MED</option>
                                                                    <option value="Engineering/technology">Engineering/technology</option>
                                                                    <option value="Fashion">Fashion</option>
                                                                    <option value="Fine arts">Fine arts</option>
                                                                    <option value="Finance">Finance</option>
                                                                    <option value="Home science">Home science</option>
                                                                    <option value="Hospitality/ Hotel Management">Hospitality/ Hotel Management</option>
                                                                    <option value="Journalism /Mass Media">Journalism /Mass Media</option>
                                                                    <option value="Law">Law</option>
                                                                    <option value="Management">Management</option>
                                                                    <option value="Medicine">Medicine</option>
                                                                    <option value="Nursing/Health Science">Nursing/Health Science</option>
                                                                    <option value="Pharmacology">Pharmacology</option>
                                                                    <option value="Science">Science</option>
                                                                    <option value="Social science">Social science</option>
                                                                    <option value="UPSC/MPSC">UPSC/MPSC</option>
                                                                    <option value="Visual effects/ Animation">Visual effects/ Animation</option>
                                                                    <option value="Any"></option>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <option selected value="<?php echo $v98 ?>"><?php echo $v98 ?></option>
                                                                    <option value="Computer/IT">Computer/IT</option>
                                                                    <option value="Administrative services">Administrative services</option>
                                                                    <option value="Advertising /marketing">Advertising /marketing</option>
                                                                    <option value="Architects">Architects</option>
                                                                    <option value="Army/Air Force/navy">Army/Air Force/navy</option>
                                                                    <option value="Arts">Arts</option>
                                                                    <option value="Aviation/pilot">Aviation/pilot</option>
                                                                    <option value="CA/CS/ICWA/CFA">CA/CS/ICWA/CFA</option>
                                                                    <option value="Commerce">Commerce</option>
                                                                    <option value="Defense">Defense</option>
                                                                    <option value="Education/BED/MED">Education/BED/MED</option>
                                                                    <option value="Engineering/technology">Engineering/technology</option>
                                                                    <option value="Fashion">Fashion</option>
                                                                    <option value="Fine arts">Fine arts</option>
                                                                    <option value="Finance">Finance</option>
                                                                    <option value="Home science">Home science</option>
                                                                    <option value="Hospitality/ Hotel Management">Hospitality/ Hotel Management</option>
                                                                    <option value="Journalism /Mass Media">Journalism /Mass Media</option>
                                                                    <option value="Law">Law</option>
                                                                    <option value="Management">Management</option>
                                                                    <option value="Medicine">Medicine</option>
                                                                    <option value="Nursing/Health Science">Nursing/Health Science</option>
                                                                    <option value="Pharmacology">Pharmacology</option>
                                                                    <option value="Science">Science</option>
                                                                    <option value="Social science">Social science</option>
                                                                    <option value="UPSC/MPSC">UPSC/MPSC</option>
                                                                    <option value="Visual effects/ Animation">Visual effects/ Animation</option>
                                                                    <option value="Any"></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="height:5px">
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="margin-top:30px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Educational Level<span style="color:red;font-size:20px">*</span></label>
                                                        <br><label style="font-size:20px;color:black;margin-left:10px"><input style="width:20px;height:20px;" type="checkbox" name="edls[]" id="hideItem3" onclick="hidden3()" value="Any">&nbsp;&nbsp;&nbsp;Any</label>
                                                        <div id="hidden3">
                                                            <select class="selectpicker" multiple data-live-search="true" id="edls" name="edls[]" onchange="fun14()">
                                                                <?php
                                                                if($v100 == ""){
                                                                    ?>
                                                                    <option selected value="Undergraduate">Undergraduate</option>
                                                                    <option value="Graduate">Graduate</option>
                                                                    <option value="Diploma">Diploma</option>
                                                                    <option value="Post graduate">Post graduate</option>
                                                                    <option value="PHD">PHD</option>
                                                                    <option value="International Degree">International Degree</option>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <option selected value="<?php echo $v100 ?>"><?php echo $v100 ?></option>
                                                                    <option value="Undergraduate">Undergraduate</option>
                                                                    <option value="Graduate">Graduate</option>
                                                                    <option value="Diploma">Diploma</option>
                                                                    <option value="Post graduate">Post graduate</option>
                                                                    <option value="PHD">PHD</option>
                                                                    <option value="International Degree">International Degree</option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="height:5px;margin-top:30px">
                                                    </div>

                                                    <!-- ----------------------------------------------------------------- -->
                                                    <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:30px"><div class="line"></div></div>


                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Do you Want to Working Partner<span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="wptr">
                                                            <?php
                                                            if($v102 == ""){
                                                                ?>
                                                                <option selected>Yes</option>
                                                                <option>No</option>
                                                                <option>Both</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option selected><?php echo $v102 ?></option>
                                                                <option>Yes</option>
                                                                <option>No</option>
                                                                <option>Both</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style=""><div class="line"></div></div>

                                                    <!-- ----------------------------------------------------------------- -->

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Occupation<span style="color:red;font-size:20px">*</span></label>
                                                        <br><label style="font-size:20px;color:black;margin-left:10px"><input style="width:20px;height:20px;" type="checkbox" name="ocupp[]" id="hideItem4" onclick="hidden4()" value="Any">&nbsp;&nbsp;&nbsp;Any</label>
                                                        <div id="hidden4">
                                                            <select class="selectpicker" multiple data-live-search="true" id="ocupp" name="ocupp[]" onchange="fun15()">
                                                                <?php
                                                                if($v103 == ""){
                                                                    ?>
                                                                    <option value="Architect" selected>Architect</option>
                                                                    <option value="Artist">Artist</option>
                                                                    <option value="Business">Business</option>
                                                                    <option value="CA/ICWA/CS">CA/ICWA/CS</option>
                                                                    <option value="Consultant">Consultant</option>
                                                                    <option value="Dentist">Dentist</option>
                                                                    <option value="Doctor">Doctor</option>
                                                                    <option value="Employee">Employee</option>
                                                                    <option value="Engineer">Engineer</option>
                                                                    <option value="Govt. Servant">Govt. Servant</option>
                                                                    <option value="Jobs seekers">Jobs seekers</option>
                                                                    <option value="Journalist/ Reporter">Journalist/ Reporter</option>
                                                                    <option value="Lawyer">Lawyer</option>
                                                                    <option value="Military services">Military services</option>
                                                                    <option value="Pilot">Pilot</option>
                                                                    <option value="Professions">Professions</option>
                                                                    <option value="Professor / Teacher">Professor / Teacher</option>
                                                                    <option value="Research fellow">Research fellow</option>
                                                                    <option value="Self employed">Self employed</option>
                                                                    <option value="Service +business">Service +business</option>
                                                                    <option value="Student">Student</option>
                                                                    <option value="Any"></option>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <option value="<?php echo $v103 ?>" selected><?php echo $v103 ?></option>
                                                                    <option value="Architect">Architect</option>
                                                                    <option value="Artist">Artist</option>
                                                                    <option value="Business">Business</option>
                                                                    <option value="CA/ICWA/CS">CA/ICWA/CS</option>
                                                                    <option value="Consultant">Consultant</option>
                                                                    <option value="Dentist">Dentist</option>
                                                                    <option value="Doctor">Doctor</option>
                                                                    <option value="Employee">Employee</option>
                                                                    <option value="Engineer">Engineer</option>
                                                                    <option value="Govt. Servant">Govt. Servant</option>
                                                                    <option value="Jobs seekers">Jobs seekers</option>
                                                                    <option value="Journalist/ Reporter">Journalist/ Reporter</option>
                                                                    <option value="Lawyer">Lawyer</option>
                                                                    <option value="Military services">Military services</option>
                                                                    <option value="Pilot">Pilot</option>
                                                                    <option value="Professions">Professions</option>
                                                                    <option value="Professor / Teacher">Professor / Teacher</option>
                                                                    <option value="Research fellow">Research fellow</option>
                                                                    <option value="Self employed">Self employed</option>
                                                                    <option value="Service +business">Service +business</option>
                                                                    <option value="Student">Student</option>
                                                                    <option value="Any"></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="height:5px;">
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:30px"><div class="line"></div></div>

                                                    <!-- ----------------------------------------------------------------- -->

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Country<span style="color:red;font-size:20px"></span></label>
                                                        <input type="text" name="wptr2" value="<?php echo $v105 ?>" style="width:50%" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Work Location City<span style="color:red;font-size:20px"></span></label>
                                                        <input type="text" name="wptr3" value="<?php echo $v106 ?>" style="width:50%" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style=""><div class="line"></div></div>
                                                    <!-- ----------------------------------------------------------------- -->
                                                

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Diet<span style="color:red;font-size:20px">*</span></label>
                                                        
                                                            <select class="selectpicker" multiple data-live-search="true" id="diets" name="diets[]" onchange="fun16()">
                                                                <?php
                                                                if($v107 == ""){
                                                                    ?>
                                                                    <option selected value="veg">Veg</option>
                                                                    <option value="non-veg">Non-veg</option>
                                                                    <option value="Eggeterian">Eggeterian</option>
                                                                    <option value="Nonveg occasionally">Nonveg occasionally</option>
                                                                    <option value="Others">Others (Jain/Vegan)</option>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <option selected value="<?php echo $v107 ?>"><?php echo $v107 ?></option>
                                                                    <option value="veg">Veg</option>
                                                                    <option value="non-veg">Non-veg</option>
                                                                    <option value="Eggeterian">Eggeterian</option>
                                                                    <option value="Nonveg occasionally">Nonveg occasionally</option>
                                                                    <option value="Others">Others (Jain/Vegan)</option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        
                                                    </div>
                                                    
                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="height:5px">
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:30px"><div class="line"></div></div>
                                                    <!-- ----------------------------------------------------------------- -->

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Smoking <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="smokes">
                                                            <?php
                                                            if($v109 == ""){
                                                                ?>
                                                                <option selected>No</option>
                                                                <option>Yes</option>
                                                                <option>Occasionally</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option selected><?php echo $v109 ?></option>
                                                                <option>No</option>
                                                                <option>Yes</option>
                                                                <option>Occasionally</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Drinking <span style="color:red;font-size:20px">*</span></label>
                                                        <select class="list-dt" name="drinks">
                                                            <?php
                                                            if($v110 == ""){
                                                                ?>
                                                                <option selected>No</option>
                                                                <option>Yes</option>
                                                                <option>Occasionally</option>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <option selected><?php echo $v110 ?></option>
                                                                <option>No</option>
                                                                <option>Yes</option>
                                                                <option>Occasionally</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style=""><div class="line"></div></div>

                                                    <div class="col-12" style="margin-top:20px">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Other Expectations <span style="color:red;font-size:20px"></span></label>
                                                        <input type="text" name="oecx" placeholder="" style="width:50%" value="<?php echo $v111 ?>" />
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-12" style=""><div class="line"></div></div>

                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <label class="pay" style="margin-left: 6px;color:#616A6B;font-size:18px">Show My Profile Only to <span style="color:red;font-size:20px">*</span></label>
                                                        <br><label style="font-size:20px;color:black;margin-left:10px"><input style="width:20px;height:20px;" type="checkbox" name="donot[]" id="hideItem5" onclick="hidden5()" value="Any">&nbsp;&nbsp;&nbsp;Any</label>
                                                        <div id="hidden5">
                                                            <select class="selectpicker" multiple data-live-search="true" id="donot" name="donot[]" onchange="">
                                                                <?php
                                                                if($v112 == ""){
                                                                    if($v45 !== ""){
                                                                        ?>
                                                                        <option selected value="<?php echo $v45; ?>"><?php echo $v45; ?></option>
                                                                        <?php
                                                                    }
                                                                }else{
                                                                    ?>
                                                                    <option selected value="<?php echo $v112; ?>"><?php echo $v112; ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                                <option value="Brahmin">Brahmin</option>
                                                                <option value="Brahmin">Brahmin</option>
                                                                <option value="Maratha">Maratha</option>
                                                                <option value="Buddhist">Buddhist</option>
                                                                <option value="Kunbi">Kunbi</option>
                                                                <option value="Chambhar">Chambhar</option>
                                                                <option value="Arora"> Arora</option>
                                                                <option value="Agarwal">Agarwal</option>
                                                                <option value="Agri">Agri</option>
                                                                <option value="Ahir">Ahir</option>
                                                                <option value="Ahir Gawali">Ahir Gawali</option>
                                                                <option value="Ahir Sonar">Ahir Sonar</option>
                                                                <option value="Arya Kshatriya">Arya Kshatriya</option>
                                                                <option value="Arya Samaj">Arya Samaj</option>
                                                                <option value="Arya Vaishya">Arya Vaishya</option>
                                                                <option value="Arya Vysya">Arya Vysya</option>
                                                                <option value="Badgujar">Badgujar</option>
                                                                <option value="Bairagi">Bairagi</option>
                                                                <option value="Bania">Bania</option>
                                                                <option value="Banjara">Banjara</option>
                                                                <option value="Barai">Barai</option>
                                                                <option value="Bari">Bari</option>
                                                                <option value="Beldar">Beldar</option>
                                                                <option value="Bengali">Bengali</option>
                                                                <option value="Bengali Kayastha">Bengali Kayastha</option>
                                                                <option value="Berad">Berad</option>
                                                                <option value="Bhamti">Bhamti</option>
                                                                <option value="Bhandari">Bhandari</option>
                                                                <option value="Bhanushali">Bhanushali</option>
                                                                <option value="Bharadi">Bharadi</option>
                                                                <option value="Bhat">Bhat</option>
                                                                <option value="Bhatt">Bhatt</option>
                                                                <option value="Bhavasar kshatriya">Bhavasar kshatriya</option>
                                                                <option value="Bhavsar">Bhavsar</option>
                                                                <option value="Bhavsar Shimpi">Bhavsar Shimpi</option>
                                                                <option value="Bhilla">Bhilla</option>
                                                                <option value="Bhoi">Bhoi</option>
                                                                <option value="Bhope">Bhope</option>
                                                                <option value="Billava">Billava</option>
                                                                <option value="Borul">Borul</option>
                                                                <option value="Brahma kshatriya">Brahma kshatriya</option>
                                                                <option value="Burud">Burud</option>
                                                                <option value="Chandravanshi">Chandravanshi</option>
                                                                <option value="Chaurasia">Chaurasia</option>
                                                                <option value="Chitode Wani">Chitode Wani</option>
                                                                <option value="Chitrakathi">Chitrakathi</option>
                                                                <option value="CKP">CKP</option>
                                                                <option value="Daivadnya Brahmin">Daivadnya Brahmin</option>
                                                                <option value="Dangat">Dangat</option>
                                                                <option value="Dashnam">Dashnam</option>
                                                                <option value="Davari">Davari</option>
                                                                <option value="Devadiga">Devadiga</option>
                                                                <option value="Devang Koshthi">Devang Koshthi</option>
                                                                <option value="Dever">Dever</option>
                                                                <option value="Devli">Devli</option>
                                                                <option value="Dhangar">Dhangar</option>
                                                                <option value="Dhobi">Dhobi</option>
                                                                <option value="Dhor">Dhor</option>
                                                                <option value="Do not want to disclose">Do not want to disclose</option>
                                                                <option value="Ezhava">Ezhava</option>
                                                                <option value="Gabit">Gabit</option>
                                                                <option value="Ganali">Ganali</option>
                                                                <option value="Garhwali Kumaoni">Garhwali Kumaoni</option>
                                                                <option value="Gavandi">Gavandi</option>
                                                                <option value="Gawali">Gawali</option>
                                                                <option value="Ghatti">Ghatti</option>
                                                                <option value="Ghisadi">Ghisadi</option>
                                                                <option value="Golha">Golha </option>
                                                                <option value="Gollewar">Gollewar</option>
                                                                <option value="Gomantak">Gomantak</option>
                                                                <option value="Gond">Gond</option>
                                                                <option value="Gondhali">Gondhali</option>
                                                                <option value="Gopal">Gopal</option>
                                                                <option value="Gosavi">Gosavi</option>
                                                                <option value="Goswami">Goswami</option>
                                                                <option value="Gowari">Gowari</option>
                                                                <option value="Gowda">Gowda </option>
                                                                <option value="Gujar">Gujar</option>
                                                                <option value="Gujarati Mochi">Gujarati Mochi</option>
                                                                <option value="Gujrathi">Gujrathi</option>
                                                                <option value="Gurav">Gurav</option>
                                                                <option value="Halba">Halba</option>
                                                                <option value="Halba Koshti">Halba Koshti</option>
                                                                <option value="Halbi">Halbi </option>
                                                                <option value="Hatkar">Hatkar</option>
                                                                <option value="Jain">Jain</option>
                                                                <option value="Jangam">Jangam</option>
                                                                <option value="Jogi (Nath)">Jogi (Nath)</option>
                                                                <option value="Joshi">Joshi</option>
                                                                <option value="Kachhi">Kachhi </option>
                                                                <option value="Kahar(Hindu)">Kahar(Hindu)</option>
                                                                <option value="Kaikadi">Kaikadi</option>
                                                                <option value="Kakayya">Kakayya</option>
                                                                <option value="kalal">kalal</option>
                                                                <option value="Kalan">Kalan</option>
                                                                <option value="Kalar">Kalar</option>
                                                                <option value="Kapewar">Kapewar</option>
                                                                <option value="Kapu">Kapu</option>
                                                                <option value="Karwari">Karwari</option>
                                                                <option value="Kasar">Kasar</option>
                                                                <option value="Kashi Kapadi">Kashi Kapadi</option>
                                                                <option value="Kayastha">Kayastha</option>
                                                                <option value="Kharvi">Kharvi</option>
                                                                <option value="khatik">khatik</option>
                                                                <option value="Khatri">Khatri </option>
                                                                <option value="Kohli">Kohli</option>
                                                                <option value="kolhati">kolhati</option>
                                                                <option value="Koli">Koli</option>
                                                                <option value="Koli Mahadev">Koli Mahadev</option>
                                                                <option value="komati">komati</option>
                                                                <option value="Konkani">Konkani</option>
                                                                <option value="Koshti">Koshti</option>
                                                                <option value="Kshatriya">Kshatriya</option>
                                                                <option value="kshatriya kumawat">kshatriya kumawat</option>
                                                                <option value="KUDAL,DESHAKAR">KUDAL,DESHAKAR</option>
                                                                <option value="Kulwant Vani">Kulwant Vani</option>
                                                                <option value="Kumbhar">Kumbhar</option>
                                                                <option value="Kutchi Lohana">Kutchi Lohana</option>
                                                                <option value="Lad">Lad</option>
                                                                <option value="Lad Sonar">Lad Sonar</option>
                                                                <option value="Lad Wani">Lad Wani</option>
                                                                <option value="Ladshakhiy Vani">Ladshakhiy Vani</option>
                                                                <option value="Leva Gurjar">Leva Gurjar</option>
                                                                <option value="Leva Patidar">Leva Patidar</option>
                                                                <option value="Leva patil">Leva patil</option>
                                                                <option value="Lingayat">Lingayat</option>
                                                                <option value="Lingayatwani">Lingayatwani</option>
                                                                <option value="Lohar">Lohar</option>
                                                                <option value="Lonari">Lonari</option>
                                                                <option value="Loni">Loni</option>
                                                                <option value="Madiga">Madiga</option>
                                                                <option value="Mahar">Mahar</option>
                                                                <option value="Maheshwari">Maheshwari</option>
                                                                <option value="Mali">Mali</option>
                                                                <option value="Mana">Mana</option>
                                                                <option value="Mang">Mang</option>
                                                                <option value="Mangalorean Tulu">Mangalorean Tulu</option>
                                                                <option value="Mannervarlu">Mannervarlu</option>
                                                                <option value="Marwari">Marwari</option>
                                                                <option value="Matang">Matang</option>
                                                                <option value="Maurya">Maurya</option>
                                                                <option value="Modh Vania">Modh Vania</option>
                                                                <option value="Mogaveera">Mogaveera </option>
                                                                <option value="Munnuru Kapu">Munnuru Kapu</option>
                                                                <option value="Nabhik">Nabhik</option>
                                                                <option value="Naidu">Naidu</option>
                                                                <option value="Nair">Nair </option>
                                                                <option value="Namdev">Namdev</option>
                                                                <option value="Nath">Nath</option>
                                                                <option value="Nathpanthi Gosavi">Nathpanthi Gosavi</option>
                                                                <option value="Navnath Gosavi">Navnath Gosavi</option>
                                                                <option value="Neve">Neve</option>
                                                                <option value="Neve Vani">Neve Vani</option>
                                                                <option value="Nhavi">Nhavi</option>
                                                                <option value="Nirali">Nirali</option>
                                                                <option value="Nutan Maratha">Nutan Maratha</option>
                                                                <option value="Otari">Otari</option>
                                                                <option value="Pachkalshi">Pachkalshi</option>
                                                                <option value="Padmashali">Padmashali</option>
                                                                <option value="PANCHAL">PANCHAL</option>
                                                                <option value="Pardhi">Pardhi</option>
                                                                <option value="Parit">Parit</option>
                                                                <option value="Patel">Patel</option>
                                                                <option value="Pathare Prabhu">Pathare Prabhu</option>
                                                                <option value="Patharvat">Patharvat</option>
                                                                <option value="Prajapati">Prajapati</option>
                                                                <option value="Pujari">Pujari</option>
                                                                <option value="Punjabi">Punjabi</option>
                                                                <option value="Raghuvanshi">Raghuvanshi</option>
                                                                <option value="Rajasthani Brahmin">Rajasthani Brahmin </option>
                                                                <option value="Rajput">Rajput</option>
                                                                <option value="Ramoshi">Ramoshi</option>
                                                                <option value="Rao Rathod Saoji Teli">Rao Rathod Saoji Teli </option>
                                                                <option value="Rawal">Rawal</option>
                                                                <option value="Reddy">Reddy</option>
                                                                <option value="Rohidas">Rohidas</option>
                                                                <option value="Sagar">Sagar</option>
                                                                <option value="Sahastrarjun Kshatriya">Sahastrarjun Kshatriya</option>
                                                                <option value="Sangar">Sangar</option>
                                                                <option value="Sarode">Sarode</option>
                                                                <option value="Savji">Savji</option>
                                                                <option value="SC">SC</option>
                                                                <option value="Shilwant">Shilwant</option>
                                                                <option value="Shimpi">Shimpi</option>
                                                                <option value="Shivyogi">Shivyogi</option>
                                                                <option value="Sindhi">Sindhi</option>
                                                                <option value="Somavanshi Arya Kshatriya">Somavanshi Arya Kshatriya</option>
                                                                <option value="Sonar">Sonar</option>
                                                                <option value="ST">ST</option>
                                                                <option value="Sutar">Sutar</option>
                                                                <option value="Swakula Sali">Swakula Sali</option>
                                                                <option value="Tambat">Tambat</option>
                                                                <option value="Tamil">Tamil</option>
                                                                <option value="Thakur">Thakur</option>
                                                                <option value="Vadar">Vadar</option>
                                                                <option value="Vaidu">Vaidu</option>
                                                                <option value="Vaish">Vaish</option>
                                                                <option value="Vaishnav">Vaishnav</option>
                                                                <option value="vaishnav lad">vaishnav lad</option>
                                                                <option value="Vaishya">Vaishya</option>
                                                                <option value="Vaishya Vani">Vaishya Vani</option>
                                                                <option value="Valmiki">Valmiki</option>
                                                                <option value="Vani">Vani</option>
                                                                <option value="Vaniya">Vaniya</option>
                                                                <option value="Vanjari">Vanjari</option>
                                                                <option value="Vankar">Vankar</option>
                                                                <option value="Vasudev(Bhatkya Jamati)">Vasudev(Bhatkya Jamati)</option>
                                                                <option value="Veer">Veer</option>
                                                                <option value="veershaiv kakkaya">veershaiv kakkaya</option>
                                                                <option value="Velama">Velama</option>
                                                                <option value="Vishwabrahmin">Vishwabrahmin</option>
                                                                <option value="vishwakarma">vishwakarma</option>
                                                                <option value="Vysya">Vysya</option>
                                                                <option value="Walmiki">Walmiki</option>
                                                                <option value="Warli">Warli</option>
                                                                <option value="Yadav">Yadav</option>
                                                                <option value="Any"></option>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-lg-6" style="height:5px;margin-top:35px">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <input type="submit" name="next" class="next action-button" value="Update" />
                                        </fieldset>
                                        </form>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>

                        </form>
                        
                    </div>
                </div>

            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="./custom.js"></script>
        <script src="./validate.js"></script>
        <script src="./hide.js"></script>

        <script>
            function hidden1(){
                var status = document.getElementById('hideItem1');
                if(status.checked == true){
                    document.getElementById('hidden1').style.display = "none";
                }else{
                    document.getElementById('hidden1').style.display = "block";
                }
            }
            function hidden2(){
                var status = document.getElementById('hideItem2');
                if(status.checked == true){
                    document.getElementById('hidden2').style.display = "none";
                }else{
                    document.getElementById('hidden2').style.display = "block";
                }
            }
            function hidden3(){
                var status = document.getElementById('hideItem3');
                if(status.checked == true){
                    document.getElementById('hidden3').style.display = "none";
                }else{
                    document.getElementById('hidden3').style.display = "block";
                }
            }
            function hidden4(){
                var status = document.getElementById('hideItem4');
                if(status.checked == true){
                    document.getElementById('hidden4').style.display = "none";
                }else{
                    document.getElementById('hidden4').style.display = "block";
                }
            }
            function hidden5(){
                var status = document.getElementById('hideItem5');
                if(status.checked == true){
                    document.getElementById('hidden5').style.display = "none";
                }else{
                    document.getElementById('hidden5').style.display = "block";
                }
            }
        </script>

        <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>

        <script>
            var element = document.getElementById("active6");
            element.classList.add("active");
        </script>

        <script>
            var element = document.getElementById("route_<?php echo $_GET['step'] ?>");
            element.classList.add("active");
        </script>

    </body>
</html>

<?php
if(isset($_GET['a'])){
    echo "<script> alert('Data Updated successfully. Please go to the upload documents !'); </script>";
}
if(isset($_GET['q'])){
    echo "<script> alert('Something Went Wrong, Please Try Again !'); </script>";
}

ob_end_flush();
?>