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
        <title>Change Address</title>
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
                                    <span>Update Address</span>
                                </div>
                                <form action="" method="POST" name="myform" enctype="multipart/form-data" style="padding-right: 35px;">
                                    <br><br>
                                    <ul>
                                        <li class="head1"><label>Address *</label></li>
                                        <li><textarea name="address" placeholder="Please Enter Your New Address" required></textarea></li>
                                        <li class="head1"><label>Address Proof (PDF Format Only) *</label></li>
                                        <li style="text-align: left;">
                                            <div class="">
                                                <label class="custom-file-upload">
                                                    <input class="file" type="file" id="addreessProof" name="addreessProof" accept=".pdf">
                                                    Upload File
                                                </label>
                                                <span id="addreessProofName"></span>
                                            </div>
                                        </li>
                                        <li><input type="submit" value="Update"></li>
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
            var element = document.getElementById("active6");
            element.classList.add("active");
        </script>

        <script>
            var element = document.getElementById("act6");
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
if(isset($_POST['address'])){
    $updatedAdress = $_POST['address'];
    $pfile_name = $_FILES['addreessProof']['name']; // get file name

    if($pfile_name == null){
        ?>
        <script>alert("Please Upload Address Proof !")</script>
        <?php
    }else{
        // Move to Folder
        $file_source_location = $_FILES['addreessProof']['tmp_name']; // get source path
        $file_target_location = "./../documents/$pfile_name"; // target location
        $move = move_uploaded_file($file_source_location,$file_target_location); //(temp folder,"Path");

        $updatePlan = "UPDATE `updated` SET `UA`='change',`ADDR`='$updatedAdress' WHERE `email`='$myEmail' ";
        $updatePlanExecute = mysqli_query($con, $updatePlan);

        $updateExistingFile = "UPDATE `upload` SET `file4`='$pfile_name' WHERE `semail`='$myEmail' "; 
        $updateExistingFileExecute = mysqli_query($con,$updateExistingFile);

        if($updatePlanExecute == true){
            ?>
            <script>
                alert("Status Updated Successfully !");
            </script>
            <?php
        }
    }
}
ob_end_flush();
?>