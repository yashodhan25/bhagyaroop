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
        <title>Change Password</title>
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
        </style>
    </head>
    <body>
        
        <?php
        include 'header2.php';
        ?>

        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-3">

                    <?php
                    include 'sideMenu.php';
                    ?>

                </div>
                
                <div class="col-sm-12 col-md-12 col-lg-9 main-content">
                    <div class="changePassword">
                        <center>
                            <div class="myform">
                                <div class="head">
                                    <span>Change Password</span>
                                </div>
                                <form action="" method="POST" name="myform" onsubmit="return verify();" >
                                    <br><br>
                                    <ul>
                                        <li><input type="password" name="original" placeholder="Enter Your Old Password" required></li>
                                        <li><input type="password" name="password" placeholder="Enter Your New Password" required></li>
                                        <li><input type="password" name="passwordRe" placeholder="Re-Enter Your New Password" required></li>
                                        <li><input type="submit" value="Change"></li>
                                    </ul>
                                </form>
                            </div>
                        </center>
                    </div>
                </div>

            </div>
        </div>

        <br><br><br>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="./custom.js"></script>

        <script>
            function verify(){
                var password1 = document.myform.password.value;
                var password2 = document.myform.passwordRe.value;

                if(password1 !== password2){
                    alert('Password dosent Match !');
                    return false;
                }
            }
        </script>

        <script>
            var element = document.getElementById("active6");
            element.classList.add("active");
        </script>

        <script>
            var element = document.getElementById("act4");
            element.classList.add("activated");
        </script>

        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();   
            });
        </script>

        <script>
            $("#addreessProof").change(function(){
                $("#addreessProofName").text(this.files[0].name);
            });
        </script>

    </body>
</html>

<?php
if(isset($_POST['original'])){
    $oldPassword = $_POST['original'];
    $newPassword = $_POST['password'];
    
    $checkQuery = "SELECT * FROM `users` WHERE `email` ='$myEmail' and `password` ='$oldPassword' ";
    $runcheckQuery = mysqli_query($con,$checkQuery);
    $verifyOldPassword = mysqli_num_rows($runcheckQuery);

    if($verifyOldPassword > 0){

        $changePassword = "UPDATE `users` SET `password`='$newPassword' WHERE `email`='$myEmail' ";
        $runChange = mysqli_query($con,$changePassword);
        if($runChange == true){
            echo "<script>alert('Password Changed Successfully !');</script>";
        }else{
            echo "Error ! ".mysqli_error($con);
        }

    }else{
        echo "<script>alert('Please Enter Valid Old Password !');</script>";
    }
    
}
?>

<?php
ob_end_flush();
?>