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
        <title>Hide/Show Photos</title>
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

                    <?php
                    $hideContactDetails = "SELECT * FROM `hiddenPhoto` WHERE `email` = '$myEmail' ";
                    $hideContactDetailsRun = mysqli_query($con, $hideContactDetails);
                    $hideContactDetailsRow = mysqli_num_rows($hideContactDetailsRun);

                    for($hideItem = 1; $hideItem <= $hideContactDetailsRow; $hideItem++ ){
                        $actualStatus = mysqli_fetch_assoc($hideContactDetailsRun);
                        $status = $actualStatus['status'];
                    }

                    if($status == 'hidden'){
                        ?>
                        <div class="alert alert-success">
                            <strong></strong> Your Photos Are Hidden.
                        </div>
                        <div class="HidePhoto">
                            <center>
                                <form action="" method="POST">
                                    <input type="hidden" name="show" value="show">
                                    <input type="submit" value="Show Your Photos">
                                </form>
                            </center>
                        </div>
                        <?php
                    }else{
                        ?>
                        <div class="alert alert-danger">
                        <strong><i class="fa fa-warning"></i></strong> Your Photos Are Visible To All.
                        </div>
                        <div class="HidePhoto">
                            <center>
                                <form action="" method="POST">
                                    <input type="hidden" name="hidden" value="hidden" >
                                    <input type="submit" value="Hide Your Photos">
                                </form>
                            </center>
                        </div>
                        <?php
                    }
                    ?>
                    

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
            var element = document.getElementById("active6");
            element.classList.add("active");
        </script>

        <script>
            var element = document.getElementById("act1");
            element.classList.add("activated");
        </script>

        <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>

    </body>
</html>

<?php

if(isset($_POST['hidden'])){
    $hiddenStatus = $_POST['hidden'];
    $hide = "UPDATE `hiddenphoto` SET `status` = '$hiddenStatus' WHERE `email` = '$myEmail' ";
    $hideExecute = mysqli_query($con, $hide);
    if($hideExecute == true){
        ?>
        <script>
        alert('Your Photos Are Hidden Successfully !');
        var url = "./hsphoto.php";
        window.location = url;
        </script>
        <?php
    }else{
        echo "Error ! ".mysqli_error($con);
    }
}

if(isset($_POST['show'])){
    $hiddenStatus = $_POST['show'];
    $hide = " UPDATE `hiddenphoto` SET `status` = '$hiddenStatus' WHERE `email` = '$myEmail' ";
    $hideExecute = mysqli_query($con, $hide);
    if($hideExecute == true){
        ?>
        <script>
        alert('Your Photos Are Visible For All !');
        var url = "./hsphoto.php";
        window.location = url;
        </script>
        <?php
    }else{
        echo "Error ! ".mysqli_error($con);
    }
}


ob_end_flush();
?>