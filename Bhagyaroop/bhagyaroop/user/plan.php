<?php
session_start();
ob_start();

include './../../dbconnection.php';
include 'dataview.php';
if(!(isset($_SESSION['user1']))){
    header("location:./../login.php");
}

$email = $_SESSION['user1'];

$check = mysqli_query($con,"SELECT * FROM `usertype` WHERE `email` = '$email' ");
$found = mysqli_num_rows($view);

for($z=1; $z<=$found; $z++){
    $data = mysqli_fetch_assoc($check);    
    $profileStatus = $data['type'];
    $status = $data['status'];   
}

if($status == 'paid' ){
    header("location:./dashboard");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Premium Plans</title>
        <link rel="stylesheet" href="customStyle.css">
        <link rel="stylesheet" href="topStatus.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Abhaya Libre' rel='stylesheet'>
        <link rel="stylesheet" href="./bootstrap-select.css">

        <style>
            body  {
                background-image: url("myimg.jpeg");
                background-size: 100%;
                margin:0px;
                padding:0px;
            }
            .checked {
                color: #FFD700;
            }
            .tested{
                color:#58EB09;
            }
            .cross{
                color:red;
            }
        </style>	
    </head>

    <body>
        <nav class="custom">
            <img src="./logo.png" height="80" width="300">
            <ul>
                <li><a href="./logout.php">Log Out</a></li>
            </ul>
        </nav>

        <div style="left:clear"></div>


        <br>
        <div class="container">
            <div class="row">

                <!-- <div class="col-sm-12 col-md-12 col-lg-4">
                    <center>
                        <div class="premiumPlan">
                            <label><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i></label>
                            <h3>Silver</h3>
                            <h2>&#8377; 2250</h2>
                            <form action="payment.php" method="POST">
                                <input type="hidden" name="type" value="Silver">
                                <input type="hidden" name="price" value="2250">
                                <button>Continue</button>
                            </form>
                        </div>
                        <button class="premium">Read More <b>&#8594;</b></button>
                    </center>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <center>
                        <div class="selectedpremiumPlan">
                            <label><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i></label>
                            <h3>Gold</h3>
                            <h2>&#8377; 3250</h2>
                            <form action="payment.php" method="POST">
                                <input type="hidden" name="type" value="Gold">
                                <input type="hidden" name="price" value="3250">
                                <button>Continue</button>
                            </form>
                        </div>
                        <button class="premium">Read More <b>&#8594;</b></button>
                    </center>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <center>
                        <div class="premiumPlan">
                            <label><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i></label>
                            <h3>Diamond</h3>
                            <h2>&#8377; 4250</h2>
                            <form action="payment.php" method="POST">
                                <input type="hidden" name="type" value="Diamond">
                                <input type="hidden" name="price" value="4250">
                                <button>Continue</button>
                            </form>
                        </div>
                        <button class="premium">Read More <b>&#8594;</b></button>
                    </center>
                </div> -->


                <div class="col-sm-12 col-md-12 col-lg-4 plan " id="sec1" style="">
                    <center>
                        <div class="details">
                            <label><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i></label>
                            <h2>Silver</h2>
                            <h3>&#8377; 2250</h3>
                            <table>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Yearly Membership</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Basic Search</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Profile Listing and Editing</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Verified Profiles</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Photo Upload Maximum 3</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Horoscope Upload</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Express Interest</td></tr>
                                <tr><td><i class="fa fa-close cross"></i></td><td>&nbsp;&nbsp;Who Viewed My Profile</td></tr>
                                <tr><td><i class="fa fa-close cross"></i></td><td>&nbsp;&nbsp;Kundali Matching</td></tr>
                                <tr><td><i class="fa fa-close cross"></i></td><td>&nbsp;&nbsp;Hide Your Photo</td></tr>
                                <tr><td><i class="fa fa-close cross"></i></td><td>&nbsp;&nbsp;Hide Your Contact Details</td></tr>
                            </table>
                            <form action="payment.php" method="POST">
                                <input type="hidden" name="type" value="Silver">
                                <input type="hidden" name="price" value="2250">
                                <button>Continue</button>
                            </form>
                        </div>
                    </center>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 plan" id="sec2" style="">
                    <center>
                        <div class="details">
                        <label><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i></label>
                            <h2>Gold</h2>
                            <h3>&#8377; 3250</h3>
                            <table>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Yearly Membership</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Basic Search</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Profile Listing and Editing</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Verified Profiles</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Photo Upload Maximum 5</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Horoscope Upload</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Express Interest</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Who Viewed My Profile</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Kundali Matching</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Hide Your Photo</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Hide Your Contact Details</td></tr>
                            </table>
                            <form action="payment.php" method="POST">
                                <input type="hidden" name="type" value="Gold">
                                <input type="hidden" name="price" value="3250">
                                <button>Continue</button>
                            </form>
                        </div>
                    </center>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 plan " id="sec3" style="">
                    <center>
                        <div class="details">
                        <label><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i></label>
                            <h2>Diamond</h2>
                            <h3>&#8377; 4250</h3>
                            <table>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Membership till the marriage is fixed</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Basic Search</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Profile Listing and Editing</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Verified Profiles</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Photo Upload Maximum 7</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Horoscope Upload</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Express Interest</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Who Viewed My Profile</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Kundali Matching</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Hide Your Photo</td></tr>
                                <tr><td><i class="fa fa-check tested"></i></td><td>&nbsp;&nbsp;Hide Your Contact Details</td></tr>
                            </table>
                            <form action="payment.php" method="POST">
                                <input type="hidden" name="type" value="Diamond">
                                <input type="hidden" name="price" value="4250">
                                <button>Continue</button>
                            </form>
                        </div>
                    </center>
                </div>

            </div>
        </div>

        <br><br><br><br>
        

        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        
        <script src="step.js"></script>
        <script src="hide.js"></script>
        <script src="save.js"></script>
        <script src="saveDefult.js"></script>
        <script src="validate.js"></script>

    </body>
</html>
<?php
if(isset($_GET['a'])){
    echo "<script> alert('Data Submitted Successfully !'); </script>";
}
ob_end_flush();
?>

