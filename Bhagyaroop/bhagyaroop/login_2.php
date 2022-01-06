<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <link href='https://fonts.googleapis.com/css?family=Amethysta' rel='stylesheet'>
        <link rel="stylesheet" href="custom.css">
        <style>
            body  {
                background-image: url("myimg.jpeg");
                background-size: 100%;
            }
        </style>	
    </head>

    <body>

        <!-- Registration Form -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <center>
                        <div class="myform">
                            <div class="head">
                                <span>Log In</span>
                            </div>
                            <form action="auth.php" method="POST" name="myform" onsubmit="">
                                <br><br>
                                <ul>
                                    <li><input type="email" name="email" placeholder="Enter Your Email" required></li>
                                    <li><input type="password" name="pass" placeholder="Enter Your Password" required></li>
                                    <li><input type="submit" value="Log In"></li>
                                </ul>
                            </form>
                        </div>
                    </center>
                </div>
            </div>
        </div>


    </body>
</html>
<?php
if(isset($_GET['a'])){
    echo "<script> alert('Invalid Credentials !'); </script>";
}
?>