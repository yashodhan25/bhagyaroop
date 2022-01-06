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
        <title>Change Income</title>
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
                                    <span>Update Income</span>
                                </div>
                                <form action="" method="POST" name="myform" enctype="multipart/form-data" style="padding-right: 35px;">
                                    <br><br>
                                    <ul>
                                        <li class="head1"><label>Income Range *</label></li>
                                        
                                        <li style="text-align: left;">
                                            <select name="new_income">
                                                <option>Student</option>
                                                <option>Job Seeker</option>
                                                <option>Below 2,00,000</option>
                                                <option>2,00,000 – 3,00,000</option>
                                                <option>3,00,000 -4,00,000 </option>
                                                <option>4,00,000 –5,00,000 </option>
                                                <option>5,00,000-6,00,000</option>
                                                <option>6,00,000 -7,00,000</option>
                                                <option>7,00,000-8,00,000</option>
                                                <option>8,00,000-9,00,000</option>
                                                <option>9,00,000-10,00,000</option>
                                                <option>10,00,000 – 15,00,000</option>
                                                <option>15,00,000-20,00,000</option>
                                                <option>20,00,000-25,00,000</option>
                                                <option>25,00,000 – 30,00,000</option>
                                                <option>30,00,000 – 35,00,000</option>
                                                <option>35,00,000 – 40,00,000</option>
                                                <option>40,00,000 – 45,00,000</option>
                                                <option>45,00,000 – 50,00,000</option>
                                                <option>50,00,000 – 60,00,000</option>
                                                <option>60,00,000 – 70,00,000</option>
                                                <option>70,00,000 -80,00,000</option>
                                                <option>80,00,000 – 90,00,000</option>
                                                <option>90,00,000 – 10,00,00,000</option>
                                                <option>10,00,00,000 Above </option>
                                            </select>
                                        </li>

                                        <li class="head1"><label>Income Proof (PDF Format Only) *</label></li>
                                        
                                        <li style="text-align: left;">
                                            <div class="">
                                                <label class="custom-file-upload">
                                                    <input class="file" type="file" id="addreessProof" name="incomeProof" accept=".pdf">
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
            var element = document.getElementById("act7");
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
if(isset($_POST['new_income'])){
    $updatedIncome = $_POST['new_income'];
    $pfile_name = $_FILES['incomeProof']['name']; // get file name

    if($pfile_name == null){
        ?>
        <script>alert("Please Upload Income Proof !")</script>
        <?php
    }else{
        echo $updatedIncome;
        // Move to Folder
        $file_source_location = $_FILES['incomeProof']['tmp_name']; // get source path
        $file_target_location = "./../documents/$pfile_name"; // target location
        $move = move_uploaded_file($file_source_location,$file_target_location); //(temp folder,"Path");

        $updatePlan = "UPDATE `updated` SET `UI`='change',`INCOME`='$updatedIncome' WHERE `email`='$myEmail' ";
        $updatePlanExecute = mysqli_query($con, $updatePlan);

        $updateExistingFile = "UPDATE `upload` SET `file3`='$pfile_name' WHERE `semail`='$myEmail' "; 
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