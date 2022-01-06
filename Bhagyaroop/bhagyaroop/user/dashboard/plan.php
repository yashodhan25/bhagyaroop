<?php
session_start();
ob_start();
include './../../../dbconnection.php';
include 'dataview.php';

if(!(isset($_SESSION['user1']))){
    header("location:./../../login.php");
}

$myEmail = $_SESSION['user1'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Premium Plan</title>
        <link rel="icon" href="./../logo.png" type="image/x-icon">
        <link rel="stylesheet" href="./design.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="./font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="./bootstrap-select.css">
        <style>
        body{
            background-image: url('./../../back.jpeg');
        }
        .checked {
            color: #F1C40F;
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
        
        <?php
        include 'header2.php';
        ?>

        <div class="container">
            <div class="row">
                
                <div class="col-sm-12 col-md-12 col-lg-4 plan1 ">
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

                <div class="col-sm-12 col-md-12 col-lg-4 plan1">
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
                
                <div class="col-sm-12 col-md-12 col-lg-4 plan1 ">
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

        <br><br>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="./custom.js"></script>

        <script>
            var element = document.getElementById("active6");
            element.classList.add("active");
        </script>

        <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>

    </body>
</html>

<?php
ob_end_flush();
?>