<?php
session_start();
ob_start();
include './../../../dbconnection.php';

if(!(isset($_SESSION['user1']))){
    header("location:./../../login.php");
}

if(!(isset($_GET['email']))){
    header("location:./");
}

$obtainEmail = $_GET['email'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Photo Gallery</title>
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
                include 'sidemenu2.php';
                ?>
                    

                </div>
                
                <div class="col-sm-12 col-md-12 col-lg-9 main-content">

                <?php
                $checkEx1 = mysqli_query($con,"SELECT * FROM `usertype` WHERE `email` = '$obtainEmail' ");
                $foundEx1 = mysqli_num_rows($checkEx1);
                
                for($zEx1=1; $zEx1<=$foundEx1; $zEx1++){
                    $dataEx1 = mysqli_fetch_assoc($checkEx1);    
                    $profileStatusEx1 = $dataEx1['type'];
                    $planEx1 = $dataEx1['type'];
                }
                if($planEx1 != 'Silver' ){
                    $hideshowStatusQuery = "SELECT * FROM `hiddenitem` WHERE `email`='$obtainEmail' AND `status` IN ('show','') ";
                    $hideshowStatusQueryExecute = mysqli_query($con,$hideshowStatusQuery);
                    $hideshowStatusRows = mysqli_num_rows($hideshowStatusQueryExecute);

                    $notifyobtainedRowsEx = "SELECT * FROM `notification` WHERE `status`= 'accepted' AND `senderemail` IN ('$myEmail','$obtainEmail') AND `receiveremail` IN ('$myEmail','$obtainEmail') ";
                    $notifyobtainedRowsExecuteEx = mysqli_query($con, $notifyobtainedRowsEx);
                    $notifyfinalRowsEx = mysqli_num_rows($notifyobtainedRowsExecuteEx);

                    if($hideshowStatusRows >= 1 || $notifyfinalRowsEx >= 1){
                        ?>
                        <div class="photoGallery">
                            <div class="row">

                                <?php
                                $view = mysqli_query($con,"SELECT * FROM `upload` WHERE `semail` = '$obtainEmail' ");
                                $row1 = mysqli_num_rows($view);
                                for($x=1; $x<=$row1; $x++){
                                $data1 = mysqli_fetch_assoc($view);
                                $photo1 = $data1['file6'];
                                $photo2 = $data1['file7'];
                                $photo3 = $data1['file8'];
                                $photo4 = $data1['file12'];
                                $photo5 = $data1['file13'];
                                $photo6 = $data1['file14'];
                                $photo7 = $data1['file15'];
                                }
                                if($photo1 != ""){
                                    ?>
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="photos">
                                            <div class="gal">
                                                <a href="./gallery.php?email=<?php echo $obtainEmail; ?>&file=<?php echo $photo1; ?>"><img src="./../documents/<?php echo $photo1; ?>"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                if($photo2 != ""){
                                    ?>
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="photos">
                                            <div class="gal">
                                                <a href="./gallery.php?email=<?php echo $obtainEmail; ?>&file=<?php echo $photo2; ?>"><img src="./../documents/<?php echo $photo2; ?>"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                if($photo3 != ""){
                                    ?>
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="photos">
                                            <div class="gal">
                                                <a href="./gallery.php?email=<?php echo $obtainEmail; ?>&file=<?php echo $photo3; ?>"><img src="./../documents/<?php echo $photo3; ?>"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                if($photo4 != ""){
                                    ?>
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="photos">
                                            <div class="gal">
                                                <a href="./gallery.php?email=<?php echo $obtainEmail; ?>&file=<?php echo $photo4; ?>"><img src="./../documents/<?php echo $photo4; ?>"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                if($photo5 != ""){
                                    ?>
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="photos">
                                            <div class="gal">
                                                <a href="./gallery.php?email=<?php echo $obtainEmail; ?>&file=<?php echo $photo5; ?>"><img src="./../documents/<?php echo $photo5; ?>"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                if($photo6 != ""){
                                    ?>
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="photos">
                                            <div class="gal">
                                                <a href="./gallery.php?email=<?php echo $obtainEmail; ?>&file=<?php echo $photo6; ?>"><img src="./../documents/<?php echo $photo6; ?>"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                if($photo7 != ""){
                                    ?>
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <div class="photos">
                                            <div class="gal">
                                                <a href="./gallery.php?email=<?php echo $obtainEmail; ?>&file=<?php echo $photo7; ?>"><img src="./../documents/<?php echo $photo7; ?>"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>

                            </div>
                        </div>
                        <?php
                    }else{
                        ?>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="alert alert-danger">
                                    <strong><i class="fa fa-warning"></i></strong> Your Photos Are Visible To All.
                                </div>
                            </div>
                        </div>
                        <?php
                    }

                }else{
                    ?>
                    <div class="photoGallery">
                        <div class="row">

                            <?php
                            $view = mysqli_query($con,"SELECT * FROM `upload` WHERE `semail` = '$obtainEmail' ");
                            $row1 = mysqli_num_rows($view);
                            for($x=1; $x<=$row1; $x++){
                              $data1 = mysqli_fetch_assoc($view);
                              $photo1 = $data1['file6'];
                              $photo2 = $data1['file7'];
                              $photo3 = $data1['file8'];
                              $photo4 = $data1['file12'];
                              $photo5 = $data1['file13'];
                              $photo6 = $data1['file14'];
                              $photo7 = $data1['file15'];
                            }
                            if($photo1 != ""){
                                ?>
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="photos">
                                        <div class="gal">
                                            <a href="./gallery.php?email=<?php echo $obtainEmail; ?>&file=<?php echo $photo1; ?>"><img src="./../documents/<?php echo $photo1; ?>"></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            if($photo2 != ""){
                                ?>
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="photos">
                                        <div class="gal">
                                            <a href="./gallery.php?email=<?php echo $obtainEmail; ?>&file=<?php echo $photo2; ?>"><img src="./../documents/<?php echo $photo2; ?>"></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            if($photo3 != ""){
                                ?>
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="photos">
                                        <div class="gal">
                                            <a href="./gallery.php?email=<?php echo $obtainEmail; ?>&file=<?php echo $photo3; ?>"><img src="./../documents/<?php echo $photo3; ?>"></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            if($photo4 != ""){
                                ?>
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="photos">
                                        <div class="gal">
                                            <a href="./gallery.php?email=<?php echo $obtainEmail; ?>&file=<?php echo $photo4; ?>"><img src="./../documents/<?php echo $photo4; ?>"></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            if($photo5 != ""){
                                ?>
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="photos">
                                        <div class="gal">
                                            <a href="./gallery.php?email=<?php echo $obtainEmail; ?>&file=<?php echo $photo5; ?>"><img src="./../documents/<?php echo $photo5; ?>"></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            if($photo6 != ""){
                                ?>
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="photos">
                                        <div class="gal">
                                            <a href="./gallery.php?email=<?php echo $obtainEmail; ?>&file=<?php echo $photo6; ?>"><img src="./../documents/<?php echo $photo6; ?>"></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            if($photo7 != ""){
                                ?>
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <div class="photos">
                                        <div class="gal">
                                            <a href="./gallery.php?email=<?php echo $obtainEmail; ?>&file=<?php echo $photo7; ?>"><img src="./../documents/<?php echo $photo7; ?>"></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>

                        </div>
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
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>

        <script>
            var element = document.getElementById("act1");
            element.classList.add("activated");
        </script>

        <?php
        if(isset($_GET['file'])){
            $file = $_GET['file'];
            ?>
            <div class="myModal" id="myModel" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    
                    <div class="modal-header">
                    <button type="button" onclick="myFun();" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                    <img src="./../documents/<?php echo $file; ?>" width="100%" height="auto" >
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
        ?>

    </body>
</html>

<?php
ob_end_flush();
?>