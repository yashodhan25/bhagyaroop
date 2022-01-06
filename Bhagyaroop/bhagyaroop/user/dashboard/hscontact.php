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
        <title>My Profile</title>
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
                    $hideContactDetails = "SELECT * FROM `hiddenitem` WHERE `email` = '$myEmail' ";
                    $hideContactDetailsRun = mysqli_query($con, $hideContactDetails);
                    $hideContactDetailsRow = mysqli_num_rows($hideContactDetailsRun);
                    for($hideItem = 1; $hideItem <= $hideContactDetailsRow; $hideItem++ ){
                        $actualStatus = mysqli_fetch_assoc($hideContactDetailsRun);
                        $status = $actualStatus['status'];
                    }

                    if($status == 'hidden'){
                        ?>
                        <div class="alert alert-success">
                            <strong></strong> Your Contact Details Are Hidden
                        </div>
                        <div class="HideContact">
                            <center>
                                <form action="" method="POST">
                                    <input type="hidden" name="show" value="show">
                                    <div class="head">
                                        <span>Show Contact Details</span>
                                    </div>
                                    <table>
                                        <tr>
                                            <th>Address</th>
                                            <td><?php echo $v65 ?></td>
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
                                    </table>
                                    <input type="submit" value="Apply">
                                </form>
                            </center>
                        </div>
                        <?php
                    }else{
                        ?>
                        <div class="alert alert-danger">
                        <strong><i class="fa fa-warning"></i></strong> Your Contact Details Are Visible.
                        </div>
                        <div class="HideContact">
                            <center>
                                <form action="" method="POST">
                                    <input type="hidden" name="hidden" value="hidden" >
                                    <div class="head">
                                        <span>Hide Contact Details</span>
                                    </div>
                                    <table>
                                        <tr>
                                            <th>Address</th>
                                            <td><?php echo $v65 ?></td>
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
                                    </table>
                                    <input type="submit" value="Apply">
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
            var element = document.getElementById("act2");
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
    $hide = "UPDATE `hiddenitem` SET `status` = '$hiddenStatus' WHERE `email` = '$myEmail' ";
    $hideExecute = mysqli_query($con, $hide);
    if($hideExecute == true){
        ?>
        <script>
        alert('Contact Details Hide Successfully !');
        var url = "./hscontact.php";
        window.location = url;
        </script>
        <?php
    }else{
        echo "Error ! ".mysqli_error($con);
    }
}

if(isset($_POST['show'])){
    $hiddenStatus = $_POST['show'];
    $hide = " UPDATE `hiddenitem` SET `status` = '$hiddenStatus' WHERE `email` = '$myEmail' ";
    $hideExecute = mysqli_query($con, $hide);
    if($hideExecute == true){
        ?>
        <script>
        alert('Contact Details Visible For All !');
        var url = "./hscontact.php";
        window.location = url;
        </script>
        <?php
    }else{
        echo "Error ! ".mysqli_error($con);
    }
}

ob_end_flush();
?>