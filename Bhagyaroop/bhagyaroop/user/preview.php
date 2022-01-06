<?php
session_start();
ob_start();
include './../../dbconnection.php';
include 'dataview.php';
if(!(isset($_SESSION['user1']))){
    header("location:./../login.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Preview Details</title>
        <link rel="icon" href="./../logo.png" type="image/x-icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
        <link href='https://fonts.googleapis.com/css?family=Amethysta' rel='stylesheet'>
        <link rel="stylesheet" href="customStyle.css">
        <link rel="stylesheet" href="topStatus.css">

        <link href="./../../assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="./../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="./../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="./../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="./../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="./../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="./../../assets/css/style.css" rel="stylesheet">
        
        <style>
            body  {
                background-image: url("myimg.jpeg");
                background-size: 100%;
            }
        </style>	
    </head>

    <body>

        <?php 
        include "header1.php"; 
        ?> 

        <div class="container">
            <div class="row preview">
                <div class="col-sm-12 col-md-12 col-lg-12">                    
                    <div class="myform1">
                        <?php
                        if($v100 == ""){
                            ?>
                            <center>
                            <div class="alert alert-danger" role="alert">
                            <i class='fas fa-exclamation-triangle'></i>
                            &nbsp;&nbsp;
                            Please Complete All Fields of <strong>Registration</strong>
                            </div>
                            </center>
                            <?php
                        }else{
                            ?>
                            <table>
                                <tr><th colspan="2">Are you existing user on Bhagyaroop ?</th></tr>
                                
                                <tr><td colspan="2"><?php echo $v1 ?></td></tr>

                                <tr><th colspan="2">How you came to know about Bhagyaroop ?</th></tr>
                                
                                <tr><td colspan="2"><?php echo $v2 ?></td></tr>

                                <tr><th colspan="2" style="padding-top:18px;padding-bottom:18px;text-align: justify;color: #CB4335;font-size: 28px;font-weight: bold;">About me</th></tr>
                                
                                <tr><td colspan="2"><?php echo $v3 ?></td></tr>
                                
                            
                                <tr><td colspan="2" style="text-align: left;padding-top: 32px;padding-bottom: 18px;font-size: 28px;text-align: left;color: #CB4335;">Personal Information</td></tr>
                                
                                <tr>
                                    <th>Full Name</th>
                                    <td><?php echo $v4." ".$v5." ".$v6 ?></td>
                                </tr>
                                <tr>
                                    <th>Birth Date</th>
                                    <td><?php echo $v7 ?></td>
                                </tr>
                                <tr>
                                    <th>Marital Status</th>
                                    <td><?php echo $v8 ?></td>
                                </tr>
                                <tr>
                                    <th>Height</th>
                                    <td><?php echo $v9."cm" ?></td>
                                </tr>
                                <tr>
                                    <th>Weight</th>
                                    <td><?php echo $v10."kg" ?></td>
                                </tr>
                                <tr>
                                    <th>Body Type</th>
                                    <td><?php echo $v11 ?></td>
                                </tr>
                                <tr>
                                    <th>Complexion</th>
                                    <td><?php echo $v12 ?></td>
                                </tr>
                                <tr>
                                    <th>Blood Group</th>
                                    <td><?php echo $v13 ?></td>
                                </tr>
                                <tr>
                                    <th>Mother Tongue</th>
                                    <td><?php echo $v14 ?></td>
                                </tr>
                                <tr>
                                    <th>Passport</th>
                                    <td><?php echo $v15 ?></td>
                                </tr>
                                <?php
                                if($v16 !== ""){
                                    ?>
                                    <tr>
                                        <th>Passport Details</th>
                                        <td><?php echo $v16 ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <th>Disability</th>
                                    <td><?php echo $v17 ?></td>
                                </tr>
                                <?php
                                if($v18 !== ""){
                                    ?>
                                    <tr>
                                        <th>Disability Details</th>
                                        <td><?php echo $v18 ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <th>Medical History</th>
                                    <td><?php echo $v19 ?></td>
                                </tr>
                                <?php
                                if($v20 !== ""){
                                    ?>
                                    <tr>
                                        <th>Disability Details</th>
                                        <td><?php echo $v20 ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>

                                <tr><td colspan="2" style="text-align: left;padding-top: 32px;padding-bottom: 18px;font-size: 28px;text-align: left;color: #CB4335;">Educational Information</td></tr>

                                <tr>
                                    <th>Medium of Education</th>
                                    <td><?php echo $v21 ?></td>
                                </tr>
                                <tr>
                                    <th>Education Field</th>
                                    <td><?php echo $v22 ?></td>
                                </tr>
                                <?php
                                if($v23 !== ""){
                                    ?>
                                    <tr>
                                        <th>Education Field Details</th>
                                        <td><?php echo $v23 ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <th>Educational Level</th>
                                    <td><?php echo $v24 ?></td>
                                </tr>
                                <?php
                                if($v25 !== ""){
                                    ?>
                                    <tr>
                                        <th>Educational Level Details</th>
                                        <td><?php echo $v25 ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <th>Education University</th>
                                    <td><?php echo $v26 ?></td>
                                </tr>
                                <tr>
                                    <th>Additional Qualification</th>
                                    <td><?php echo $v27 ?></td>
                                </tr>
                                <tr>
                                    <th>Additional Languages</th>
                                    <td><?php echo $v28 ?></td>
                                </tr>

                                <tr><td colspan="2" style="text-align: left;padding-top: 32px;padding-bottom: 18px;font-size: 28px;text-align: left;color: #CB4335;">Professional Information</td></tr>

                                <tr>
                                    <th>Occupation</th>
                                    <td><?php echo $v29 ?></td>
                                </tr>
                                <?php
                                if($v30 !== ""){
                                    ?>
                                    <tr>
                                        <th>Occupation Details</th>
                                        <td><?php echo $v30 ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <th>Working Field</th>
                                    <td><?php echo $v31 ?></td>
                                </tr>
                                <?php
                                if($v32 !== ""){
                                    ?>
                                    <tr>
                                        <th>Working Field Details</th>
                                        <td><?php echo $v32 ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <th>Duration of Employment</th>
                                    <td><?php echo $v33 ?></td>
                                </tr>
                                <tr>
                                    <th>Company Name/ Business name </th>
                                    <td><?php echo $v34 ?></td>
                                </tr>
                                <tr>
                                    <th>Designation</th>
                                    <td><?php echo $v35 ?></td>
                                </tr>
                                <tr>
                                    <th>Work Country and City</th>
                                    <td><?php echo $v36 ?></td>
                                </tr>
                                <tr>
                                    <th>Annual Income</th>
                                    <td><?php echo $v37 ?></td>
                                </tr>

                                <tr><td colspan="2" style="text-align: left;padding-top: 32px;padding-bottom: 18px;font-size: 28px;text-align: left;color: #CB4335;">Horoscope Information</td></tr>

                                <tr>
                                    <th>Date of Birth</th>
                                    <td><?php echo $v38 ?></td>
                                </tr>
                                <tr>
                                    <th>Birth Time</th>
                                    <td><?php echo $v39 ?></td>
                                </tr>
                                <tr>
                                    <th>Birth Place</th>
                                    <td><?php echo $v40 ?></td>
                                </tr>
                                <tr>
                                    <th>Village</th>
                                    <td><?php echo $v41 ?></td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td><?php echo $v42 ?></td>
                                </tr>
                                <tr>
                                    <th>State</th>
                                    <td><?php echo $v43 ?></td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td><?php echo $v44 ?></td>
                                </tr>
                                <tr>
                                    <th>Caste</th>
                                    <td><?php echo $v45 ?></td>
                                </tr>
                                <?php
                                if($v46 !== ""){
                                    ?>
                                    <tr>
                                        <th>Other Caste Details</th>
                                        <td><?php echo $v46 ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <th>Sub Caste</th>
                                    <td><?php echo $v47 ?></td>
                                </tr>
                                <tr>
                                    <th>Birth Moon Sign</th>
                                    <td><?php echo $v48 ?></td>
                                </tr>
                                <tr>
                                    <th>Constellation</th>
                                    <td><?php echo $v49 ?></td>
                                </tr>
                                <tr>
                                    <th>Charan</th>
                                    <td><?php echo $v50 ?></td>
                                </tr>
                                <tr>
                                    <th>Gotra</th>
                                    <td><?php echo $v51 ?></td>
                                </tr>
                                <tr>
                                    <th>Gan</th>
                                    <td><?php echo $v52 ?></td>
                                </tr>
                                <tr>
                                    <th>Manglik</th>
                                    <td><?php echo $v53 ?></td>
                                </tr>
                                <tr>
                                    <th>Naad</th>
                                    <td><?php echo $v54 ?></td>
                                </tr>
                                <tr>
                                    <th>Do you want to see Horoscope ?</th>
                                    <td><?php echo $v55 ?></td>
                                </tr>

                                <tr><td colspan="2" style="text-align: left;padding-top: 32px;padding-bottom: 18px;font-size: 28px;text-align: left;color: #CB4335;">Habits and Lifestyle</td></tr>
                            
                                <tr>
                                    <th>Diet</th>
                                    <td><?php echo $v56 ?></td>
                                </tr>
                                <?php
                                if($v57 !== ""){
                                    ?>
                                    <tr>
                                        <th>Diet Details</th>
                                        <td><?php echo $v57 ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <th>Smoking</th>
                                    <td><?php echo $v58 ?></td>
                                </tr>
                                <tr>
                                    <th>Drink</th>
                                    <td><?php echo $v59 ?></td>
                                </tr>
                                <tr>
                                    <th>Spectacles/Lens</th>
                                    <td><?php echo $v60 ?></td>
                                </tr>
                                <tr>
                                    <th>Sports & Fitness</th>
                                    <td><?php echo $v61 ?></td>
                                </tr>
                                <tr>
                                    <th>Hobbies</th>
                                    <td><?php echo $v62 ?></td>
                                </tr>

                                <tr><td colspan="2" style="text-align: left;padding-top: 32px;padding-bottom: 18px;font-size: 28px;text-align: left;color: #CB4335;">Contact Information</td></tr>

                                <tr>
                                    <th>Country</th>
                                    <td><?php echo $v63 ?></td>
                                </tr>
                                <?php
                                if($v64 !== ""){
                                    ?>
                                    <tr>
                                        <th>Country Details</th>
                                        <td><?php echo $v64 ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <th>Address</th>
                                    <td><?php echo $v65 ?></td>
                                </tr>
                                <tr>
                                    <th>Pin Code</th>
                                    <td><?php echo $v66 ?></td>
                                </tr>
                                <tr>
                                    <th>Self Mobile Number</th>
                                    <td>+<?php echo $ccode1 ?>-<?php echo $v67 ?></td>
                                </tr>
                                <tr>
                                    <th>Mother/Father Mobile Number</th>
                                    <td>+<?php echo $ccode2 ?>-<?php echo $v68 ?></td>
                                </tr>
                                <tr>
                                    <th>Self Mail Id</th>
                                    <td><?php echo $v69 ?></td>
                                </tr>
                                <tr>
                                    <th>Mother/Father Mail Id</th>
                                    <td><?php echo $v70 ?></td>
                                </tr>

                                <tr><td colspan="2" style="text-align: left;padding-top: 32px;padding-bottom: 18px;font-size: 28px;text-align: left;color: #CB4335;">Reference</td></tr>

                                <tr>
                                    <th>Relatives/Friends Name</th>
                                    <td><?php echo $v71 ?></td>
                                </tr>
                                <tr>
                                    <th>Relatives/Friends Mobile No</th>
                                    <td>+<?php echo $ccode3 ?>-<?php echo $v72 ?></td>
                                </tr>
                                <tr>
                                    <th>Relatives/Friends Email Id</th>
                                    <td><?php echo $v73 ?></td>
                                </tr>
                                <tr>
                                    <th>Relation with Members</th>
                                    <td><?php echo $v74 ?></td>
                                </tr>

                                <tr><td colspan="2" style="text-align: left;padding-top: 32px;padding-bottom: 18px;font-size: 28px;text-align: left;color: #CB4335;">Family Information</td></tr>

                                <tr>
                                    <th>Father</th>
                                    <td><?php echo $v75 ?></td>
                                </tr>
                                <tr>
                                    <th>Father Occupation</th>
                                    <td><?php echo $v76 ?></td>
                                </tr>
                                <tr>
                                    <th>Fathers Details</th>
                                    <td><?php echo $v77 ?></td>
                                </tr>
                                <tr>
                                    <th>Fathers Native Place</th>
                                    <td><?php echo $v78 ?></td>
                                </tr>
                                <tr>
                                    <th>Mother</th>
                                    <td><?php echo $v79 ?></td>
                                </tr>
                                <tr>
                                    <th>Mother Occupation</th>
                                    <td><?php echo $v80 ?></td>
                                </tr>
                                <tr>
                                    <th>Mother Details</th>
                                    <td><?php echo $v81 ?></td>
                                </tr>
                                <tr>
                                    <th>Mother Native Place</th>
                                    <td><?php echo $v82 ?></td>
                                </tr>
                                <tr>
                                    <th>Number of Brothers</th>
                                    <td><?php echo $v83 ?></td>
                                </tr>
                                <tr>
                                    <th>Marital Status</th>
                                    <td><?php echo $v84 ?></td>
                                </tr>
                                <tr>
                                    <th>Number of Sisters</th>
                                    <td><?php echo $v85 ?></td>
                                </tr>
                                <tr>
                                    <th>Marital Status</th>
                                    <td><?php echo $v86 ?></td>
                                </tr>
                                <tr>
                                    <th>About Family</th>
                                    <td><?php echo $v87 ?></td>
                                </tr>
                                <tr>
                                    <th>Family Medical History</th>
                                    <td><?php echo $v88 ?></td>
                                </tr>
                                <tr>
                                    <th>Family Disability</th>
                                    <td><?php echo $v89 ?></td>
                                </tr>
                                <?php
                                if($v90 !== ""){
                                    ?>
                                    <tr>
                                        <th>Family Disability Details</th>
                                        <td><?php echo $v90 ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>

                                <tr><td colspan="2" style="text-align: left;padding-top: 32px;padding-bottom: 18px;font-size: 28px;text-align: left;color: #CB4335;">Expectations</td></tr>

                                <tr>
                                    <th>Marital Status</th>
                                    <td><?php echo $v91 ?></td>
                                </tr>
                                <tr>
                                    <th>Caste</th>
                                    <td><?php echo $v92 ?></td>
                                </tr>
                                <tr>
                                    <th>Sub Caste</th>
                                    <td><?php echo $v94 ?></td>
                                </tr>
                                <tr>
                                    <th>Height Range</th>
                                    <td><?php echo $v95 ?></td>
                                </tr>
                                <tr>
                                    <th>Weight Range</th>
                                    <td><?php echo $v96 ?></td>
                                </tr>
                                <tr>
                                    <th>Difference in age range</th>
                                    <td><?php echo $v97 ?></td>
                                </tr>
                                <tr>
                                    <th>Educational Field</th>
                                    <td><?php echo $v98 ?></td>
                                </tr>
                                <tr>
                                    <th>Educational Level</th>
                                    <td><?php echo $v100 ?></td>
                                </tr>
                                <tr>
                                    <th>Do you Want to Working Partner</th>
                                    <td><?php echo $v102 ?></td>
                                </tr>
                                <tr>
                                    <th>Occupation</th>
                                    <td><?php echo $v103 ?></td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td><?php echo $v105 ?></td>
                                </tr>
                                <tr>
                                    <th>Work Location City</th>
                                    <td><?php echo $v106 ?></td>
                                </tr>
                                <tr>
                                    <th>Diet</th>
                                    <td><?php echo $v107 ?></td>
                                </tr>
                                <tr>
                                    <th>Smoking</th>
                                    <td><?php echo $v109 ?></td>
                                </tr>
                                <tr>
                                    <th>Drink</th>
                                    <td><?php echo $v110 ?></td>
                                </tr>
                                <tr>
                                    <th>Other Expectations</th>
                                    <td><?php echo $v111 ?></td>
                                </tr>
                                <tr>
                                    <th>Show My Profile Only with</th>
                                    <td><?php echo $v112 ?></td>
                                </tr>
                            </table>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>



        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <!-- Template Main JS File -->
        <script src="./../../assets/js/main.js"></script>

        <script>
            var element = document.getElementById("active3");
            element.classList.add("activeLink");
        </script>

    </body>
</html>


                
<?php
ob_end_flush();
?>