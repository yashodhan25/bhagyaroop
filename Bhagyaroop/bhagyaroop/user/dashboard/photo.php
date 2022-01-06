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
                    <div class="uploadPhotos">
                        <form action="./photo.php" method="POST" enctype="multipart/form-data">
                        
                        <input type="hidden" name="change_photo" value="abc">

                        <div class="row">
                            <?php
                            $view = mysqli_query($con,"SELECT * FROM `upload` WHERE `semail` = '$myEmail' ");
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
                            ?>

                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <center>
                                    <div class="seperator">
                                        <table>
                                            <?php
                                            if($photo1 != ""){
                                                ?>
                                                <tr>
                                                    <td>
                                                        <div class="img1">
                                                        <a href="./removePhoto.php?photo1=<?php echo $photo1; ?>" title="Remove Photo"><i class="fa fa-close"></i></a>
                                                        <img src="./../documents/<?php echo $photo1 ?>">
                                                        </div>
                                                        <ul>
                                                            <li style="padding-top:10px;">
                                                                <label class="custom-file-upload">
                                                                    <input class="file" type="file" id="addreessProof" name="photo1" accept=".jpg, .jpeg, .png">
                                                                    Change
                                                                </label>
                                                                <span id="addreessProofName"></span>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <?php
                                            }else{
                                                ?>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                                <label style="display: inline-block; cursor: pointer;">
                                                                    <div class="img">
                                                                        <img src="./butt.jpeg">
                                                                        <input class="file" style="display:none" type="file" id="addreessProof" name="photo1" accept=".jpg, .jpeg, .png">
                                                                    </div>
                                                                </label>
                                                                <br>
                                                                <span id="addreessProofName"></span>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </table>
                                    </div>
                                </center>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <center>
                                    <div class="seperator">
                                        <table>
                                            <?php
                                            if($photo2 != ""){
                                                ?>
                                                <tr>
                                                    <td>
                                                        
                                                        <div class="img1">
                                                            <a href="./removePhoto.php?photo2=<?php echo $photo2; ?>" title="Remove Photo"><i class="fa fa-close"></i></a>
                                                            <img src="./../documents/<?php echo $photo2 ?>">
                                                        </div>

                                                        <ul>
                                                            <li style="padding-top:10px;">
                                                                <label class="custom-file-upload">
                                                                    <input class="file" type="file" id="addreessProof1" name="photo2" accept=".jpg, .jpeg, .png">
                                                                    Change
                                                                </label>
                                                                <span id="addreessProofName1"></span>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <?php
                                            }else{
                                                ?>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>                                                                
                                                                <label style="display: inline-block; cursor: pointer;">
                                                                    <div class="img">
                                                                        <img src="./butt.jpeg">
                                                                        <input class="file" style="display:none" type="file" id="addreessProof1" name="photo2" accept=".jpg, .jpeg, .png">
                                                                    </div>
                                                                </label>
                                                                <br>
                                                                <span id="addreessProofName1"></span>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </table>
                                    </div>
                                </center>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <center>
                                    <div class="seperator">
                                        <table>
                                            <?php
                                            if($photo3 != ""){
                                                ?>
                                                <tr>
                                                    <td>
                                                        <div class="img1">
                                                        <a href="./removePhoto.php?photo3=<?php echo $photo3; ?>" title="Remove Photo"><i class="fa fa-close"></i></a>
                                                        <img src="./../documents/<?php echo $photo3 ?>">
                                                        </div>
                                                        <ul>
                                                            <li style="padding-top:10px;">
                                                                <label class="custom-file-upload">
                                                                    <input class="file" type="file" id="addreessProof2" name="photo3" accept=".jpg, .jpeg, .png">
                                                                    Change
                                                                </label>
                                                                <span id="addreessProofName2"></span>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <?php
                                            }else{
                                                ?>
                                                <tr>
                                                    <td>
                                                        <ul>
                                                            <li>                                                                
                                                                <label style="display: inline-block; cursor: pointer;">
                                                                    <div class="img">
                                                                        <img src="./butt.jpeg">
                                                                        <input class="file" style="display:none" type="file" id="addreessProof2" name="photo3" accept=".jpg, .jpeg, .png">
                                                                    </div>
                                                                </label>
                                                                <br>
                                                                <span id="addreessProofName2"></span>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </table>
                                    </div>
                                </center>
                            </div>

                            <?php
                            if($plan == 'Gold'){
                                ?>
                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <center>
                                        <div class="seperator">
                                            <table>
                                                <?php
                                                if($photo4 != ""){
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <div class="img1">
                                                            <a href="./removePhoto.php?photo4=<?php echo $photo4; ?>" title="Remove Photo"><i class="fa fa-close"></i></a>
                                                            <img src="./../documents/<?php echo $photo4 ?>">
                                                            </div>
                                                            <ul>
                                                                <li style="padding-top:10px;">
                                                                    <label class="custom-file-upload">
                                                                        <input class="file" type="file" id="addreessProof3" name="photo4" accept=".jpg, .jpeg, .png">
                                                                        Change
                                                                    </label>
                                                                    <span id="addreessProofName3"></span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <ul>
                                                                <li>                                                                
                                                                    <label style="display: inline-block; cursor: pointer;">
                                                                        <div class="img">
                                                                            <img src="./butt.jpeg">
                                                                            <input class="file" style="display:none" type="file" id="addreessProof3" name="photo4" accept=".jpg, .jpeg, .png">
                                                                        </div>
                                                                    </label>
                                                                    <br>
                                                                    <span id="addreessProofName3"></span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </center>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <center>
                                        <div class="seperator">
                                            <table>
                                                <?php
                                                if($photo5 != ""){
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <div class="img1">
                                                            <a href="./removePhoto.php?photo5=<?php echo $photo5; ?>" title="Remove Photo"><i class="fa fa-close"></i></a>
                                                            <img src="./../documents/<?php echo $photo5 ?>">
                                                            </div>
                                                            <ul>
                                                                <li style="padding-top:10px;">
                                                                    <label class="custom-file-upload">
                                                                        <input class="file" type="file" id="addreessProof4" name="photo5" accept=".jpg, .jpeg, .png">
                                                                        Change
                                                                    </label>
                                                                    <span id="addreessProofName4"></span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <ul>
                                                                <li>                                                                
                                                                    <label style="display: inline-block; cursor: pointer;">
                                                                        <div class="img">
                                                                            <img src="./butt.jpeg">
                                                                            <input class="file" style="display:none" type="file" id="addreessProof4" name="photo5" accept=".jpg, .jpeg, .png">
                                                                        </div>
                                                                    </label>
                                                                    <br>
                                                                    <span id="addreessProofName4"></span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                                
                                            </table>
                                        </div>
                                    </center>
                                </div>
                                <?php
                            }
                            if($plan == 'Diamond'){
                                ?>
                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <center>
                                        <div class="seperator">
                                            <table>
                                                <?php
                                                if($photo4 != ""){
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <div class="img1">
                                                            <a href="./removePhoto.php?photo4=<?php echo $photo4; ?>" title="Remove Photo"><i class="fa fa-close"></i></a>
                                                            <img src="./../documents/<?php echo $photo4 ?>">
                                                            </div>
                                                            <ul>
                                                                <li style="padding-top:10px;">
                                                                    <label class="custom-file-upload">
                                                                        <input class="file" type="file" id="addreessProof3" name="photo4" accept=".jpg, .jpeg, .png">
                                                                        Change
                                                                    </label>
                                                                    <span id="addreessProofName3"></span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <ul>
                                                                <li>                                                                
                                                                    <label style="display: inline-block; cursor: pointer;">
                                                                        <div class="img">
                                                                            <img src="./butt.jpeg">
                                                                            <input class="file" style="display:none" type="file" id="addreessProof3" name="photo4" accept=".jpg, .jpeg, .png">
                                                                        </div>
                                                                    </label>
                                                                    <br>
                                                                    <span id="addreessProofName3"></span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </center>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <center>
                                        <div class="seperator">
                                            <table>
                                                <?php
                                                if($photo5 != ""){
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <div class="img1">
                                                            <a href="./removePhoto.php?photo5=<?php echo $photo5; ?>" title="Remove Photo"><i class="fa fa-close"></i></a>
                                                            <img src="./../documents/<?php echo $photo5 ?>">
                                                            </div>
                                                            <ul>
                                                                <li style="padding-top:10px;">
                                                                    <label class="custom-file-upload">
                                                                        <input class="file" type="file" id="addreessProof4" name="photo5" accept=".jpg, .jpeg, .png">
                                                                        Change
                                                                    </label>
                                                                    <span id="addreessProofName4"></span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <ul>
                                                                <li>                                                                
                                                                    <label style="display: inline-block; cursor: pointer;">
                                                                        <div class="img">
                                                                            <img src="./butt.jpeg">
                                                                            <input class="file" style="display:none" type="file" id="addreessProof4" name="photo5" accept=".jpg, .jpeg, .png">
                                                                        </div>
                                                                    </label>
                                                                    <br>
                                                                    <span id="addreessProofName4"></span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </center>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <center>
                                        <div class="seperator">
                                            <table>
                                                <?php
                                                if($photo6 != ""){
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <div class="img1">
                                                            <a href="./removePhoto.php?photo6=<?php echo $photo6; ?>" title="Remove Photo"><i class="fa fa-close"></i></a>
                                                            <img src="./../documents/<?php echo $photo6 ?>">
                                                            </div>
                                                            <ul>
                                                                <li style="padding-top:10px;">
                                                                    <label class="custom-file-upload">
                                                                        <input class="file" type="file" id="addreessProof5" name="photo6" accept=".jpg, .jpeg, .png">
                                                                        Change
                                                                    </label>
                                                                    <span id="addreessProofName5"></span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <ul>
                                                                <li>                                                                
                                                                    <label style="display: inline-block; cursor: pointer;">
                                                                        <div class="img">
                                                                            <img src="./butt.jpeg">
                                                                            <input class="file" style="display:none" type="file" id="addreessProof5" name="photo6" accept=".jpg, .jpeg, .png">
                                                                        </div>
                                                                    </label>
                                                                    <br>
                                                                    <span id="addreessProofName5"></span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </center>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <center>
                                        <div class="seperator">
                                            <table>
                                                <?php
                                                if($photo7 != ""){
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <div class="img1">
                                                            <a href="./removePhoto.php?photo7=<?php echo $photo7; ?>" title="Remove Photo"><i class="fa fa-close"></i></a>
                                                            <img src="./../documents/<?php echo $photo7 ?>">
                                                            </div>
                                                            <ul>
                                                                <li style="padding-top:10px;">
                                                                    <label class="custom-file-upload">
                                                                        <input class="file" type="file" id="addreessProof6" name="photo7" accept=".jpg, .jpeg, .png">
                                                                        Change
                                                                    </label>
                                                                    <span id="addreessProofName6"></span>
                                                                </li>
                                                                <li style="padding-top:8px;">
                                                                    <a href="./removePhoto.php?photo7=<?php echo $photo7; ?>">Remove Photo</a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <ul>
                                                                <li>                                                                
                                                                    <label style="display: inline-block; cursor: pointer;">
                                                                        <div class="img">
                                                                            <img src="./butt.jpeg">
                                                                            <input class="file" style="display:none" type="file" id="addreessProof6" name="photo7" accept=".jpg, .jpeg, .png">
                                                                        </div>
                                                                    </label>
                                                                    <br>
                                                                    <span id="addreessProofName6"></span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </center>
                                </div>

                                <?php
                            }
                            ?>

                        </div>

                        <center>
                            <input id="dependant" type="submit" value="Upload Selected Photos">
                        </center>

                        </form>

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
            var element = document.getElementById("act10");
            element.classList.add("activated");
        </script>

        <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>

        <script>
            document.getElementById('dependant').disabled = true;
            $("#addreessProof").change(function(){

                if (this.files[0].size > 2000000) // 2 MB for bytes. 
                {
                    $("#addreessProofName").text("File size must under 2MB !");
                    $("#addreessProof").val("");
                    return false; 
                }else{
                    document.getElementById('dependant').disabled = false;
                    $("#addreessProofName").text(this.files[0].name);
                }
            });

            $("#addreessProof1").change(function(){
                if (this.files[0].size > 2000000) // 2 MB for bytes. 
                {
                    $("#addreessProofName1").text("File size must under 2MB !");
                    $("#addreessProof1").val("");
                    return false; 
                }else{
                    document.getElementById('dependant').disabled = false;
                    $("#addreessProofName1").text(this.files[0].name);
                }
            });

            $("#addreessProof2").change(function(){
                if (this.files[0].size > 2000000) // 2 MB for bytes. 
                {
                    $("#addreessProofName2").text("File size must under 2MB !");
                    $("#addreessProof2").val("");
                    return false; 
                }else{
                    document.getElementById('dependant').disabled = false;
                    $("#addreessProofName2").text(this.files[0].name);
                }
            });

            $("#addreessProof3").change(function(){
                if (this.files[0].size > 2000000) // 2 MB for bytes. 
                {
                    $("#addreessProofName3").text("File size must under 2MB !");
                    $("#addreessProof3").val("");
                    return false; 
                }else{
                    document.getElementById('dependant').disabled = false;
                    $("#addreessProofName3").text(this.files[0].name);
                }
            });

            $("#addreessProof4").change(function(){
                if (this.files[0].size > 2000000) // 2 MB for bytes. 
                {
                    $("#addreessProofName4").text("File size must under 2MB !");
                    $("#addreessProof4").val("");
                    return false; 
                }else{
                    document.getElementById('dependant').disabled = false;
                    $("#addreessProofName4").text(this.files[0].name);
                }
            });

            $("#addreessProof5").change(function(){
                if (this.files[0].size > 2000000) // 2 MB for bytes. 
                {
                    $("#addreessProofName5").text("File size must under 2MB !");
                    $("#addreessProof5").val("");
                    return false; 
                }else{
                    document.getElementById('dependant').disabled = false;
                    $("#addreessProofName5").text(this.files[0].name);
                }
            });

            $("#addreessProof6").change(function(){
                if (this.files[0].size > 2000000) // 2 MB for bytes. 
                {
                    $("#addreessProofName6").text("File size must under 2MB !");
                    $("#addreessProof6").val("");
                    return false; 
                }else{
                    document.getElementById('dependant').disabled = false;
                    $("#addreessProofName6").text(this.files[0].name);
                }
            });
        </script>

    </body>
</html>

<?php

if(isset($_GET['a'])){
    ?>
    <script>alert('Photo Removed Successfully !');</script>
    <?php
}

if(isset($_POST['change_photo'])){
    $view = mysqli_query($con,"SELECT * FROM `upload` WHERE `semail` = '$myEmail' ");
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
    $newPhoto1 = $_FILES['photo1']['name']; // get file name
    $newPhoto2 = $_FILES['photo2']['name']; // get file name
    $newPhoto3 = $_FILES['photo3']['name']; // get file name
    $newPhoto4 = $_FILES['photo4']['name']; // get file name
    $newPhoto5 = $_FILES['photo5']['name']; // get file name
    $newPhoto6 = $_FILES['photo6']['name']; // get file name
    $newPhoto7 = $_FILES['photo7']['name']; // get file name

    if($newPhoto1 == null){
        echo "OK !";
        if($photo1 != ""){
            $newPhoto1 = $photo1; 
        }else{
            $newPhoto1 = "";
        }
    }else{
        $file_source_location1 = $_FILES['photo1']['tmp_name']; // get source path
        $file_target_location1 = "./../documents/$newPhoto1"; // target location
        $move1 = move_uploaded_file($file_source_location1,$file_target_location1); //(temp folder,"Path");
    }

    if($newPhoto2 == null){
        if($photo2 != ""){
            $newPhoto2 = $photo2; 
        }else{
            $newPhoto2 = "";
        }
    }else{
        $file_source_location2 = $_FILES['photo2']['tmp_name']; // get source path
        $file_target_location2 = "./../documents/$newPhoto2"; // target location
        $move2 = move_uploaded_file($file_source_location2,$file_target_location2); //(temp folder,"Path");
    }

    if($newPhoto3 == null){
        if($photo3 != ""){
            $newPhoto3 = $photo3; 
        }else{
            $newPhoto3 = "";
        }
    }
    else{
        $file_source_location3 = $_FILES['photo3']['tmp_name']; // get source path
        $file_target_location3 = "./../documents/$newPhoto3"; // target location
        $move3 = move_uploaded_file($file_source_location3,$file_target_location3); //(temp folder,"Path");
    }

    if($newPhoto4 == null){
        if($photo4 != ""){
            $newPhoto4 = $photo4; 
        }else{
            $newPhoto4 = "";
        }
    }else{
        $file_source_location4 = $_FILES['photo4']['tmp_name']; // get source path
        $file_target_location4 = "./../documents/$newPhoto4"; // target location
        $move4 = move_uploaded_file($file_source_location4,$file_target_location4); //(temp folder,"Path");
    }

    if($newPhoto5 == null){
        if($photo5 != ""){
            $newPhoto5 = $photo5; 
        }else{
            $newPhoto5 = "";
        }
    }else{
        $file_source_location5 = $_FILES['photo5']['tmp_name']; // get source path
        $file_target_location5 = "./../documents/$newPhoto5"; // target location
        $move5 = move_uploaded_file($file_source_location5,$file_target_location5); //(temp folder,"Path");
    }

    if($newPhoto6 == null){
        if($photo6 != ""){
            $newPhoto6 = $photo6; 
        }else{
            $newPhoto6 = "";
        }
    }else{
        $file_source_location6 = $_FILES['photo6']['tmp_name']; // get source path
        $file_target_location6 = "./../documents/$newPhoto6"; // target location
        $move6 = move_uploaded_file($file_source_location6,$file_target_location6); //(temp folder,"Path");
    }

    if($newPhoto7 == null){
        if($photo7 != ""){
            $newPhoto7 = $photo7; 
        }else{
            $newPhoto7 = "";
        }
    }else{
        $file_source_location7 = $_FILES['photo7']['tmp_name']; // get source path
        $file_target_location7 = "./../documents/$newPhoto2"; // target location
        $move7 = move_uploaded_file($file_source_location7,$file_target_location7); //(temp folder,"Path");
    }

    $uploadQuery = "UPDATE `upload` SET `file6`='$newPhoto1',`file7`='$newPhoto2',`file8`='$newPhoto3',`file12`='$newPhoto4',`file13`='$newPhoto5',`file14`='$newPhoto6',`file15`='$newPhoto7' WHERE `semail`='$email' "; 
    $uploadQueryExecute = mysqli_query($con, $uploadQuery);
    if($uploadQueryExecute == true){
        ?>
        <script>
            var url = "./photo.php";
            window.location = url;
            alert('Photos Status Updated Successfully !');
        </script>
        <?php
    }else{
        echo "Error" ;
    }

}

ob_end_flush();
?>