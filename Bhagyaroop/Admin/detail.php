<?php
include './../dbconnection.php';
session_start();
include 'dataview.php';
ob_start();
if(!(isset($_SESSION['passAdmin']))){
  header("location:./");
}

$email = $_GET['email'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Action</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="./css/custom.css" rel="stylesheet">
    </head>
    <body>

        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Bhagyaroop Admin</a>
            </div>
            <ul class="nav navbar-nav">
              <li class=""><a href="./user.php">Users</a></li>
              <li class="active"><a href="./action.php">User Activation</a></li>
              <li class=""><a href="./updateUser.php">Update User</a></li>
              <li class=""><a href="./block.php">Block User</a></li>
            </ul>

            <a href="logout.php"><button class="logout">Log Out</button></a>

          </div>
        </nav>

        <center>
          <div class="container">
            <div class="row">
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="action">
                  <div class="myForm">
                      
                      <form action="" method="POST">
                        <input type="hidden" name="email" value="<?php echo $email ?>">
                        <input type="hidden" name="string" value="abc">
                        <button class="view-button">View All Details</button>
                      </form>

                      <div class="document">
                        <?php
                        $view = mysqli_query($con,"SELECT * FROM `upload` WHERE `semail` = '$email' ");
                        $row = mysqli_num_rows($view);
                        for($i=1; $i<=$row; $i++){
                          $data = mysqli_fetch_assoc($view);
                          $payment=$data['file11'];
                          $educational_qualification=$data['file1'];
                          $identity=$data['file2'];
                          $income=$data['file3'];
                          $address=$data['file4'];
                          $death = $data['file9'];
                          $divorce = $data['file10'];
                        }

                        $userData = mysqli_query($con,"SELECT * FROM `users` WHERE `email` = '$email' ");
                        $row1 = mysqli_num_rows($userData);
                        for($x=1; $x<=$row1; $x++){
                          $data1 = mysqli_fetch_assoc($userData);
                          $name = $data1['full_name'];
                          $email = $data1['email'];
                        }

                        if($educational_qualification !== ""){
                          ?>
                          <h4>User Email ID : <b><?php echo $email ?></b></h4>
                          <table class="table">
                            <thead>
                              <tr><td>Document</td><td>File Name</td><td>Action</td></tr>
                            </thead>
                            <tbody>
                              <tr><th>Payment Receipt</th><td><?php echo $payment ?></td><td><form action="" method="POST"><input type="hidden" name="file" value="<?php echo $payment ?>"><button>View Document</button></form></td></tr>
                              <tr><th>Educational Qualification Certificate</th><td><?php echo $educational_qualification ?></td><td><form action="" method="POST"><input type="hidden" name="file" value="<?php echo $educational_qualification ?>"><button>View Document</button></form></td></tr>
                              <tr><th>Identity Proof</th><td><?php echo $identity ?></td><td><form action="" method="POST"><input type="hidden" name="file" value="<?php echo $identity ?>"><button>View Document</button></form></td></tr>
                              <tr><th>Income Proof</th><td><?php echo $income ?></td><td><form action="" method="POST"><input type="hidden" name="file" value="<?php echo $income ?>"><button>View Document</button></form></td></tr>
                              <tr><th>Address Proof</th><td><?php echo $address ?></td><td><form action="" method="POST"><input type="hidden" name="file" value="<?php echo $address ?>"><button>View Document</button></form></td></tr>
                              <?php
                              if($v8 == "Widow/Widower"){
                                  ?>
                                  <tr><th>Death Certificate</th><td><?php echo $death ?></td><td><form action="" method="POST"><input type="hidden" name="file" value="<?php echo $death ?>"><button>View Document</button></form></td></tr>
                                  <?php
                              }
                              if($v8 == "Awating Divorce / Legally Separated" || $v8 == "Divorced"){
                                  ?>
                                  <tr><th>Divorce Decree OR (Case Filling Paper In Case of Awating Divorce / Legally Separated)</th><td><?php echo $divorce ?></td><td><form action="" method="POST"><input type="hidden" name="file" value="<?php echo $$divorce ?>"><button>View Document</button></form></td></tr>
                                  <?php
                              }
                              ?>
                            </tbody>
                          </table>
                          <form action="" method="POST">
                            <ul>
                              <li><input type="checkbox" name="file1" value="done">&nbsp;&nbsp;<span>Educational Qualification Certificate</span></li>
                              <li><input type="checkbox" name="file2" value="done">&nbsp;&nbsp;<span>Identity Proof</span></li>
                              <li><input type="checkbox" name="file3" value="done">&nbsp;&nbsp;<span>Income Proof</span></li>
                              <li><input type="checkbox" name="file4" value="done">&nbsp;&nbsp;<span>Address Proof</span></li>
                              <?php
                              if($v8 == "Widow/Widower"){
                                  ?>
                                  <li><input type="checkbox" name="file5" value="done">&nbsp;&nbsp;<span>Death Certificate</span></li>
                                  <?php
                              }
                              if($v8 == "Awating Divorce / Legally Separated" || $v8 == "Divorced"){
                                  ?>
                                  <li><input type="checkbox" name="file6" value="done">&nbsp;&nbsp;<span>Divorce Decree OR (Case Filling Paper In Case of Awating Divorce / Legally Separated)</span></li>
                                  <?php
                              }
                              ?>
                              <li><input type="text" name="pid" placeholder="Enter Profile ID" required>&nbsp;&nbsp;</li>
                              <li><button>Verify</button></li>
                            </ul>
                          </form>
                          <?php
                        }else{
                          ?>
                          <table class="table">
                            <thead>
                              <h2>You have verify all documents on <b>contact@bhagyaroop.com</b></h2>
                              <tr><td>Document</td><td>File Name</td><td>Action</td></tr>
                            </thead>
                            <tbody>
                              <tr><th>Payment Receipt</th><td><?php echo $payment ?></td><td><form action="" method="POST"><input type="hidden" name="file" value="<?php echo $payment ?>"><button>View Document</button></form></td></tr>
                              <tr><td colspan="3" style="text-align:center"><a href="./upload.php?email=<?php echo $email ?>" ><button>Upload All Document</button></a></td></tr>
                            </tbody>
                          </table>
                          <form action="" method="POST">
                            <ul>
                              <li><input type="checkbox" name="file1" value="done">&nbsp;&nbsp;<span>Educational Qualification Certificate</span></li>
                              <li><input type="checkbox" name="file2" value="done">&nbsp;&nbsp;<span>Identity Proof</span></li>
                              <li><input type="checkbox" name="file3" value="done">&nbsp;&nbsp;<span>Income Proof</span></li>
                              <li><input type="checkbox" name="file4" value="done">&nbsp;&nbsp;<span>Address Proof</span></li>
                              <?php
                              if($v8 == "Widow/Widower"){
                                  ?>
                                  <li><input type="checkbox" name="file5" value="done">&nbsp;&nbsp;<span>Death Certificate</span></li>
                                  <?php
                              }
                              if($v8 == "Awating Divorce / Legally Separated" || $v8 == "Divorced"){
                                  ?>
                                  <li><input type="checkbox" name="file6" value="done">&nbsp;&nbsp;<span>Divorce Decree OR (Case Filling Paper In Case of Awating Divorce / Legally Separated)</span></li>
                                  <?php
                              }
                              ?>
                              <li><input type="text" name="pid" placeholder="Enter Profile ID" required>&nbsp;&nbsp;</li>
                              <li><button>Verify</button></li>
                            </ul>
                          </form>
                          <?php
                        }
                        ?> 

                      </div>

                  <div>
                </div>
                <br><br>
              </div>

            </div>
          </div>
        </center>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script>
          $(document).ready(function()
          {
              $("#statelist").keyup(function()
              {
              $.ajax({
                  type: "POST",
                  url: "./autocomplete-search.php",
                  data:'keyword='+$(this).val(),
                  success: function(data){
                  $("#suggesstion-box").show();
                  $("#suggesstion-box").html(data);
                  }
              });
              });
          });
          function selectState(val) 
          {
              $("#statelist").val(val);
              $("#suggesstion-box").hide();
          }
      </script>
      
      <?php
      if(isset($_POST['file']) ){
        $uploadedFile = $_POST['file'];
        if(preg_match("/\.(pdf)$/", $uploadedFile)){
          ?>
          <script>
            var url = "./../bhagyaroop/user/documents/<?php echo $uploadedFile; ?>";
            window.open(url, '_blank').focus();
          </script>
          <?php
        }else{
          ?>
          
          <div class="myModal" id="myModel" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                
                <div class="modal-header">
                  <button type="button" onclick="myFun();" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">User Details</h4>
                </div>

                <div class="modal-body">
                  <img src="./../Bhagyaroop/user/documents/<?php echo $uploadedFile; ?>" width="100%" height="auto" >
                </div>

                <div class="modal-footer">
                  <button type="button" onclick="myFun();" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

              </div>
              
            </div>
          </div>
          <script>
            function myFun(){
              document.getElementById("myModel").style.display = "none";
            }
          </script>

          <?php
        }
      }
      ?>


      <?php
      if(isset($_POST['email']) && isset($_POST['string']) ){
        ?>
        
        <div class="myModal" id="myModel" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                
                <div class="modal-header">
                  <button type="button" onclick="myFun();" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">User Details</h4>
                </div>

                <div class="modal-body">
                  <div class="myform1">
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
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" onclick="myFun();" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

              </div>
              
            </div>
          </div>
          
        </div>

        <script>
          function myFun(){
            document.getElementById("myModel").style.display = "none";
          }
        </script>

        <?php
      }
      ?>
    </body>
</html>

<?php
if(isset($_POST['pid'])){
  if( !(isset($_POST['file1'])) ){ $file1 = 'Not Done'; }else{ $file1 = $_POST['file1']; }
  if( !(isset($_POST['file2'])) ){ $file2 = 'Not Done'; }else{ $file2 = $_POST['file2']; }
  if( !(isset($_POST['file3'])) ){ $file3 = 'Not Done'; }else{ $file3 = $_POST['file3']; }
  if( !(isset($_POST['file4'])) ){ $file4 = 'Not Done'; }else{ $file4 = $_POST['file4']; }
  if( !(isset($_POST['file5'])) ){ $file5 = 'Not Done'; }else{ $file5 = $_POST['file5']; }
  if( !(isset($_POST['file6'])) ){ $file6 = 'Not Done'; }else{ $file6 = $_POST['file6']; }
  $pid = $_POST['pid'];

  $userData1 = mysqli_query($con,"SELECT * FROM `users` WHERE `PID` = '$pid' ");
  $row2 = mysqli_num_rows($userData1);
  if($row2 == 0){

    $date = date("Y-m-d");

    $update1 = mysqli_query($con,"UPDATE `verify` SET `file1`='$file1',`file2`='$file2',`file3`='$file3',`file4`='$file4',`file5`='$file5',`file6`='$file6' WHERE `email`='$email' ");

    $update2 = mysqli_query($con,"UPDATE `users` SET `PID`='$pid' WHERE `email`='$email' ");

    $update3 = mysqli_query($con,"UPDATE `usertype` SET `status`='paid', `payDate`='$date' WHERE `email`='$email' ");

    $update4 = mysqli_query($con,"UPDATE `bhagyaroop_signup` SET `payment_status`='paid' WHERE `semail`='$email' ");

    if($update1){
        ?>
        <script>alert('User Verified !')</script>
        <?php
    }
  }else{
    ?>
    <script>alert('Profile ID Already Exist !')</script>
    <?php
  }

}
?>

<?php
ob_end_flush();
?>